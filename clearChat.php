<?php
include_once("conexao.php");

$query = "drop table tb_chat;";

$resposta = mysqli_query($link, $query);

$query = "CREATE TABLE IF NOT EXISTS tb_chat (
    id_chat int(11) NOT NULL AUTO_INCREMENT,
    nick varchar(64) NOT NULL,
    msg varchar(2048) NOT NULL,
    PRIMARY KEY (id_chat)
  ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
$resposta = mysqli_query($link, $query);
