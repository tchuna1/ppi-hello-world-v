<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá povos!</title>
</head>
<body>
    <h1>Se leu é corno</h1>
    <?php
        require_once "model/conexao.php";
        $tecnologias=conexao::select("tecnologia","id,nome");
        print_r($tecnologias);
    ?>
</body>
</html>