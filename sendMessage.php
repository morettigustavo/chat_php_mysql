<?php
include_once("conexao.php");

$nickname = $_POST['nick'];
$msg = $_POST['msg'];

$query = "insert into tb_chat (nick,msg) values ('$nickname', '$msg')";

$resposta = mysqli_query($link, $query);

if ($resposta){
    echo "Tudo ok";
}else{
    echo "Deu problema";
}
?>