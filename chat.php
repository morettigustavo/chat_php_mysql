<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
</head>
<body style="background-color: red">
    <div style="background-color: #999; padding: 1%;">
        <label style="color: #222; font-size: 20px;">
            Bem vindo <span id="user"><?php echo $_POST['nickname'];?></span>!!!
            <?php 
            include_once("conexao.php");
            $ip = $_SERVER["REMOTE_ADDR"];
            $nickname = $_POST['nickname'];
            
            $query = "insert into ip (nickname,ip) values ('$nickname', '$ip')";
            
            $resposta = mysqli_query($link, $query);
            if($_POST['nickname'] == "moretti"){
            ?><form action="clearChat.php"> <input type="submit" value="Limpar"> </form><?php 
            }
            ?>
        </label>
    </div>
    <div style="background-color: white; min-height: 700px; padding: 2%; margin-bottom: 1%;" id="divChat">
        <label id="lbChat">
            <table id="tbChat"></table>
        </label>
    </div>
    <div style="background-color: #999; padding: 1%;">
        <label>
            <form action="#" method="post" name="form" id="form">
                <span style="color: #222; font-size: 20px;">Sua Mensagem: </span>
                <input type="text" name="msg" id="msg" style="height: 20px;">
                <br><br>
                <input type="submit" value="Enviar" style="height: 30px;">
            </form>
        </label>
    </div>
    <script src="chat.js"></script>
    <script src="jquery.js"></script>
</body>
</html>