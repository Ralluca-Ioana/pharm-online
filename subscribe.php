<?php
    $conn = mysqli_connect('localhost', 'id18908729_project_root', 'k4YWOzt*d_mz_D#(', 'id18908729_database_project');

    if (mysqli_connect_error()){
        echo "<script> alert('Connection error'); </script>";
        exit();
    }
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST[ 'email']);
        $email_check = "SELECT * FROM newsletter WHERE email = '$email'";
        $res = mysqli_query($conn, $email_check);
        if(mysqli_num_rows($res) > 0){
            echo '<script> alert("Email-ul introdus deja există!"); location.href = "index.php"; </script>';
            die();
        }else{
            $sql ="INSERT INTO newsletter (email) VALUES ('$email')";
            mysqli_query($conn, $sql);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script> alert("Email invalid!"); location.href = "index.php"; </script>';
            die();
        }
    }
    
    $from = "noreply@ralucabruma.com";
    $to = "{$email}";
    $body = " <center><img src=\"https://ralucabruma.com/farmacie/media/logo.png\" alt='logo' style=\"margin: 5px 20px; height:80px; width:100px;\" /></center>
    <h2 style=\"text-align:center;\">Iată începutul unei prietenii pe cinste! Nici nu știi, cât de mult ne bucurăm că ești cu noi!</h2><br>
    <p style=\"color: red;text-align:center;font-size:15px; font-weight: italic; bottom:15px\">Te rugăm să nu răspunzi la acest mesaj prin e-mail.<br> Această adresă este automată, nesupravegheată și nu poate ajuta cu întrebări.</p><br>
    <div style=\"display: grid\"><a href=\"https://ralucabruma.com/farmacie/index.php\" style=\" background-color: #4CAF50;border: none;color: white; padding: 10px 22px; text-align: center;text-decoration: none;display: inline-block; font-size: 16px; margin:auto; cursor: pointer; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)\" >Cumpără online >> </a> </div><br>
    <p style=\"text-align:center;font-size:15px;font-weight: bold\">Îți mulțumim, <br>Echipa Sis Pharm!</p>";
            
    $headers = "From: {$from}\r\n";
    $headers .= "Reply-To: {$from}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset: utf8\r\n";
        
    mail($to,'Îți mulțumim pentru abonarea la newsletter!', $body, $headers);
    echo '<script> alert("V-ati abonat cu succes!"); location.href = "aboutSubscribe.php"; </script>'; 

?>
