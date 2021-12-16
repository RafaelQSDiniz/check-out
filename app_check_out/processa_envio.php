<?php
	session_start();
	
	require  "./bibliotecas/PHPMailer/Exception.php";
	require  "./bibliotecas/PHPMailer/OAuth.php";
	require  "./bibliotecas/PHPMailer/PHPMailer.php";
	require  "./bibliotecas/PHPMailer/POP3.php";
	require  "./bibliotecas/PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	//print_r($_POST);
    $codigo = rand(1000,9999);
    $_SESSION['codigo'] = $codigo;

	class mensagem {
		private $para = null;
		private $mensagem = null;

		public function __get($atributo) {
			return $this->$atributo;
		}
		

		public function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		public function mensagemValida(){
			if(empty($this->para) || empty($this->mensagem)) { return false;
			}
			return true;
		}
	}

	$mensagem = New Mensagem();

	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('mensagem', $codigo);


	print_r($mensagem);
  
	if (!$mensagem->mensagemValida()) {
		echo "Mensagem não é valida";
		die();	
	} 

	$mail = new PHPMailer(true);

	try {
	    
	    $mail->isSMTP();                                           
	    $mail->Host       = 'smtp.gmail.com';                     
	    $mail->SMTPAuth   = true;                                   
	    $mail->Username   = '';   //<--- coloque seu e-mail                 
	    $mail->Password   = '';   //<--- coloque sua senha
	    $mail->Port       = 587;                                    

	    //Recipients
	    $mail->setFrom('rafaeldiniz.dev@gmail.com', 'Verificar acesso');
	    $mail->addAddress($mensagem->__get('para'));     //Add a recipient             
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Codigo de acesso';
	    $mail->Body    = 'Mensagem para verificação de acesso, seu código é:<b>'.$codigo.'</b>';
	    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'mensagem enviada com sucesso!';
	    header('Location: check.php');
	} catch (Exception $e) {
	    echo "Detalhes do erro: {$mail->ErrorInfo}";
	}
?>

