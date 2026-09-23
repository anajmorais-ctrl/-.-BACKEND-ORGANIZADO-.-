<?php
$qnt = $_POST["qnt"];
if($qnt>50){
    echo "Multa de ",($qnt-50)*4,"R$";
}else{
    echo"Concluído";
}