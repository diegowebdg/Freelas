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
	// Define os dados do servidor e tipo de conexão

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->Host = "mail.rafaelbianco.com.br"; // Endereço do servidor SMTP
	$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)							
	$mail->Username = 'sanay@rafaelbianco.com.br'; // Usuário do servidor SMTP
	$mail->Password = 'sanay1q2w3e'; // Senha do servidor SMTP
	
	
	// Define o remetente
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->From = "sanay@rafaelbianco.com.br"; // Seu e-mail
	$mail->FromName = "Sanay - Desenvolvimento Imobiliário"; // Seu nome
	 
	
	// Define os destinatário(s)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	
	$mail->AddAddress($email_destino, ' Sanay');
	//$mail->AddAddress( 'operacional@mattar.com.br', 'Operacional - Mattar');
	//$mail->AddAddress($email, $nome);
	
	//$mail->AddAddress('ciclano@site.net');
	
	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
	
	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
	
	// Define os dados técnicos da Mensagem
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	
	$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	
	// Define a mensagem (Texto e Assunto)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->Subject  = "Dúvidas - Sanay Desenvolvimento Imobiliário"; // Assunto da mensagem
	
	$mail->Body = "Contato através do site www.sanay.com.br: <br />";
	
	$mail->Body .= "Nome: ".$nome."<br>";
	$mail->Body .= "E-mail: ".$email."<br>";
	$mail->Body .= "Telefone: ".$tel."<br>";
	$mail->Body .= "Celular: ".$cel."<br>";
	$mail->Body .= "Mensagem: ".$mensagem."<br><br><br>";
	
	//$mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n <img src='http://blog.thiagobelem.net/wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley'>";
	 
	
	// Define os anexos (opcional)
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
	
	 
	
	// Envia o e-mail
	
	$enviado = $mail->Send();
	
	 
	
	// Limpa os destinatários e os anexos
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