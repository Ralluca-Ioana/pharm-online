<?php
    $conn = mysqli_connect('localhost', 'id18908729_project_root', 'k4YWOzt*d_mz_D#(', 'id18908729_database_project');
    if(isset($_POST['submit'])){
         
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subj = $_POST['subj'];
        $message = $_POST['message'];
        
        $stmt = mysqli_prepare($conn, "INSERT INTO contacts (name, email, subj, message) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssss", $name, $mailFrom, $subj, $message);
        mysqli_stmt_execute($stmt);
    }
    $from = "notify@ralucabruma.com";
    $to = "ralucabruma99@gmail.com";
    $subject = "From: {$mailFrom}";
    $body = "<center><p style=\"font-size:17px;\"> <b>Ai primit un e-mail de la:</b> <em>{$name}</em></p>
            <p style=\"font-size:17px;\"><b>Adresă email pacient:</b> {$mailFrom}</p> 
            <p style=\"font-size:17px;\"> <b>Subiectul:</b> {$subj}</p> 
            <p style=\"font-size:17px;\"> <b>Mesajul:<br></b> <div style=\"font-size:16px; color:orange;\">{$message}</div></p></center>";
            
    $headers = "From: {$from}\r\n";
    $headers .= "Reply-To: {$from}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset: utf8\r\n";
        
    mail($to, $subject, $body, $headers);
    echo '<script> alert("Mesajul a fost trimis cu succes!"); location.href = "thankyou.php"; </script>';
    die();
?>
