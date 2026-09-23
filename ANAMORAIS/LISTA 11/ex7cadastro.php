<?php
$email =$_POST["email"];
$senha =$_POST["senha"];
if($email == "ana.morais@gmail.com"
 && $senha == "m1234"){
    echo "Login bem sucedido!!";
 }else{
    echo "Login ou senha invalido!";
}
?>