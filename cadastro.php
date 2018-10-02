<?php
 
 
$nome = $_POST['txtName'];
$email = $_POST['txtEmail'];
$phone = $_POST['txtPhone'];
$msg = $_POST['txtMsg'];
 
 
$headers = "From: ". $nome;
 
$corpoemail = '<b>Fale Conosco</b>
             
               Nome: '   .$nome.' /n
               Email:'   .$email.'/n
               Telefone:' .$phone.' /n
               Mensagem:'.$msg.' /n';
 
 
 
 
if(mail("contato@candyrain.com.br", "Fale Conosco",$corpoemail,$headers)){
 
 
       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
       header("Location: index.php");
 
} else{
 
      echo "<script>alert('Erro ao enviar, tente diretamente pelo email contato@candyrain.com.br');</script>";  
 
}