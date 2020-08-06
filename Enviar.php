<?php 
include "connection.php";
$conn = OpenCon();


$ID =$_POST ["ID"];
$Nome = $_POST["Nome"];
$Email =$_POST["Email"];
$Assunto = $_POST["Assunto"];
$Mensagem =$_POST["Mensagem"];


$sql = "INSERT INTO Contactos (ID,Nome,Email,Assunto,Mensagem) values ('$ID','$Nome','$Email','$Assunto','$Mensagem')";
$result = mysqli_query($conn,$sql);
if($result == FALSE)
 {
     
     echo '<script> alert("Mensagem Não Enviada, Tente Novamente");
     window.history.go(-1);</script>';
 }
 else
 {   
    echo '<script>  alert("Mensagem Enviada Com Sucesso!");
    window.history.go(-1);
    </script>';

    
 }
mysqli_close($conn);
?>
