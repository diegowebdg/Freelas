<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	require_once("../phpmailer/class.phpmailer.php");

	$seu_nome  = utf8_decode($_POST['seu_nome_indique']);
	$seu_email  = utf8_decode($_POST['seu_email_indique']);
	$amigo_nome = utf8_decode($_POST[ 'nome_amigo_indique']);
	$amigo_email = utf8_decode($_POST['email_amigo_indique']);
								

	// Inicia a classe PHPMailer
	$mail = new PHPMailer();
	// Define os dados do servidor e tipo de conex�o

	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

	$mail->IsSMTP(); // Define que a mensagem ser� SMTP
	$mail->Host = "mail.sanay.com.br"; // Endere�o do servidor SMTP
	$mail->SMTPAuth = true; // Usa autentica��o SMTP? (opcional)							
	$mail->Username = 'envios@sanay.com.br'; // Usu�rio do servidor SMTP
	$mail->Password = 'sanay1q2w3e'; // Senha do servidor SMTP
	
	
	// Define o remetente
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->From = "sanay@sanay.com.br"; // Seu e-mail
	$mail->FromName = "Sanay - Desenvolvimento Imobili�rio"; // Seu nome
	 
	
	// Define os destinat�rio(s)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	
	$mail->AddAddress($amigo_email, ' Sanay');
	//$mail->AddAddress('ciclano@site.net');
	
	//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
	
	//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta
	
	// Define os dados t�cnicos da Mensagem
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
	
	$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
	
	// Define a mensagem (Texto e Assunto)
	
	// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
	
	$mail->Subject  = "Seu amigo ".$seu_nome." te indicou a Sanay"; // Assunto da mensagem
	
	
	$mail->Body .= "Ol� <b>".$amigo_nome."</b>, seu amigo <b>".$seu_nome."</b> indicou os empreendimentos da Sanay para voc�. Acesse o site abaixo: <br /><br/>";
	$mail->Body .= "<a href='http://www.sanay.com.br' target='_blank' style='font-family:Arial; font-size:30px; color:#e9821b'>www.sanay.com.br</a><br><br><br>";
	
	$mail->Body .= "Nome do seu amigo: ".$seu_nome."<br>";
	$mail->Body .= "E-mail do seu amigo: ".$seu_email."<br>";
	$mail->Body .= "Seu nome: ".$amigo_nome."<br>";
	$mail->Body .= "Seu e-mail: ".$amigo_email."<br><br><br>";
	
	$mail->Body .= "<a href='http://www.sanay.com.br' target='_blank'><img src='http://www.rafaelbianco.com.br/projetos/sanay/wordpress/wp-content/themes/sanay/images/sanay-logo.png' alt='Sanay - Desenvolvimento Imobili�rio' /></a><br><br><br>";
	
	
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
	echo '{"msg":"Mensagem enviada com sucesso!"}';
?>				