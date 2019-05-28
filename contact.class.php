
<?php
session_start();

	if (isset($_POST['nome']) && !empty($_POST['nome'])) {

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $assunto = addslashes($_POST['assunto']);
        $msg = addslashes($_POST['msg']);

       


        $to = 'danieltugok@gmail.com';
        $message_body = $nome. " - ( ". $email . " - Telefone" $telefone) \r\n Mensagem:\r\n " . $msg;
        $cabecalho = "From: contato@danielkogut.com"."\r\n".
                    "Reply-To:" . $email. "\r\n".
                    "X-Mailer: PHP/".phpversion();


        mail($to, $assunto, $message_body, $cabecalho);

        // $_SESSION['message'] = 'E-mail Enviado com sucesso... <br> Retornarei o mais breve possível!';

        header("Location: index.php?msg=E-mail Enviado com sucesso... <br> Retornarei o mais breve possível! 👍 #contato");	
        

    }

?>

