<?php
$conn = mysqli_connect('localhost', 'id18908729_project_root', 'k4YWOzt*d_mz_D#(', 'id18908729_database_project');

$msg = "";

if (isset($_POST['upload'])) {

    $name_patient = mysqli_real_escape_string($conn, $_POST[ 'name_patient']);
    $email = mysqli_real_escape_string($conn, $_POST[ 'email']);
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = mysqli_real_escape_string($conn, $_POST[ 'address']);
  	$obs = mysqli_real_escape_string($conn, $_POST['obs']);
    $name_medic = mysqli_real_escape_string($conn, $_POST[ 'name_medic']);


  	$prescription = $_FILES['prescription']['name'];
    $additional_file = $_FILES['additional_file']['name'];

  	$target1 = "images/".basename($prescription);
    $target2 = "images/".basename($additional_file);

  	$sql = "INSERT INTO orders (name_patient, email, age, phone, address, obs, name_medic, prescription, additional_file) VALUES ('$name_patient', '$email', '$age', '$phone', '$address', '$obs', '$name_medic', '$prescription', '$additional_file')";
 
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['prescription']['tmp_name'], $target1)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

    if (move_uploaded_file($_FILES['additional_file']['tmp_name'], $target2)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    
   
}
    
    $filename = basename($prescription);
    $file = $target1;
    
    $filename1 = basename($additional_file);
    $file1 = $target2;

    $from = "notify@ralucabruma.com";
    $mailto = $email;
    $subject = "From: {$from}";
    $message = "<center><h3>Bună <em>{$name_patient}</em>,</h3> 
              <p>Îți mulțumim pentru comanda efectuată pe site-ul nostru și te mai așteptăm!</p> 
              <h2 style=\"color: orange;\">Datele comenzii:</h2></style>
              <p><b>Numele și prenumele:</b> {$name_patient}<br><b>Adresă email pacient:</b> {$email} <br><b>Vârstă:</b> {$age}<br> <b>Telefon:</b> {$phone}<br> <b>Adresa:</b> {$address}<br><b>Observații:</b> {$obs}<br><b>Numele medicului:</b> {$name_medic}</p></center>";

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));
    
    $content1 = file_get_contents($file1);
    $content1 = chunk_split(base64_encode($content1));


    $separator = md5(time());

    $eol = "\r\n";


    $headers = "From: {$from}" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    if(!empty($file) && is_file($file)){
        // attachment
        $body .= "--" . $separator . $eol;
        $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content . $eol;
        $body .= "--" . $separator . $eol;
    }
    
    if(!empty($file1) && is_file($file1)){
        $body .= "Content-Type: application/octet-stream; name=\"" . $filename1 . "\"" . $eol;
  
        $body .= "Content-Transfer-Encoding: base64" . $eol;
        $body .= "Content-Disposition: attachment" . $eol;
        $body .= $content1 . $eol;
        $body .= "--" . $separator . "--";
    }

    if (mail($mailto, $subject, $body, $headers)) {
        echo '<script> alert("Comanda a fost înregistrată succes!"); location.href = "aboutShop.php"; </script>';
    } else {
        echo '<script> alert("Nu s-a putut trimite fisierul necesar. Incearca din nou!"); location.href = "aboutShop.php"; </script>';
    }

?>