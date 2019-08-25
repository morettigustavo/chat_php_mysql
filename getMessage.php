<?php
include_once("conexao.php");

$query = "select nick,msg from tb_chat order by id_chat desc limit 20";

$resposta = mysqli_query($link, $query);

while($line = mysqli_fetch_array($resposta)){
    $dados[] = array("nick" => $line['nick'], "msg" => $line['msg']); // assim por diante com todos os campos
}
$json = json_encode($dados);

echo $json;

// var_dump($json);
?>