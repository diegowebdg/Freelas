<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	require_once("../phpmailer/class.phpmailer.php");

	$nome  = utf8_decode($_POST['nome']);
	$email  = utf8_decode($_POST['email']);
	$tel = utf8_decode($_POST[ 'tel']);
	$cel = utf8_decode($_POST[ 'cel']);
	$mensagem = utf8_decode($_POST['msg']);
	$email_destino = '';
	if($_POST['departamento']=='Administrativo'){
	 	$email_destino = 'diego.webdg@gmail.com';
	} else{
		$email_destino = 'diego@isee.com.br';
	}						

	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	// Define os dados do servidor e tipo de conex�o

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsSMTP(); // Define que a mensagem ser� SMTP
	$mail->Host = "mail.rafaelbianco.com.br"; // Endere�o do servidor SMTP
	$mail->SMTPAuth = true; // Usa autentica��o SMTP? (opcional)							
	$mail->Username = 'sanay@rafaelbianco.com.br'; // Usu�rio do servidor SMTP
	$mail->Password = 'sanay1q2w3e'; // Senha do servidor SMTP
	
	
	// Define o remetente
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->From = "sanay@rafaelbianco.com.br"; // Seu e-mail
	$mail->FromName = "Sanay - Desenvolvimento Imobili�rio"; // Seu nome
	 
	
	// Define os destinat�rio(s)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	
	$mail->AddAddress($email_destino, ' Sanay');
	//$mail->AddAddress( 'operacional@mattar.com.br', 'Operacional - Mattar');
	//$mail->AddAddress($email, $nome);
	
	//$mail->AddAddress('ciclano@site.net');
	
	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
	
	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta
	
	// Define os dados t�cnicos da Mensagem
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
	
	$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	
	// Define a mensagem (Texto e Assunto)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->Subject  = "D�vidas - Sanay Desenvolvimento Imobili�rio"; // Assunto da mensagem
	
	$mail->Body = "Contato atrav�s do site www.sanay.com.br: <br />";
	
	$mail->Body .= "Nome: ".$nome."<br>";
	$mail->Body .= "E-mail: ".$email."<br>";
	$mail->Body .= "Telefone: ".$tel."<br>";
	$mail->Body .= "Celular: ".$cel."<br>";
	$mail->Body .= "Mensagem: ".$mensagem."<br><br><br>";
	
	//$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n <img src='http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>";
	 
	
	// Define os anexos (opcional)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
	
	 
	
	// Envia o e-mail
	
	$enviado = $mail->Send();
	
	 
	
	// Limpa os destinat�rios e os anexos
	$mail->ClearAllRecipients();
	
	$mail->ClearAttachments();
	
	 
	
	// Exibe uma mensagem de resultado
	
	/*if($enviado){
		echo "success";
	}else{
		echo "erro";
	}*/
	echo '{"msg":"Mensagem enviada com sucesso!", "email":"'.$email_destino.'"}';
?>				