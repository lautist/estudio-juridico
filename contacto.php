<?php 

    if (isset($_POST['enviar'])){
        if (!empty($_POST['name'])) && (!empty($_POST['surname'])) && (!empty($_POST['email'])) && (!empty($_POST['asunto'])) && (!empty($_POST['consulta'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $consulta = $_POST['consulta'];
            $header = "From: lautist@yopmail.com" . "\r\n";
            $header .= "Replay: lautist@yopmail.com" . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();
            $mail = mail($email,$name,$surname,$asunto,$consulta,$header);
        } 
  
    }



?>