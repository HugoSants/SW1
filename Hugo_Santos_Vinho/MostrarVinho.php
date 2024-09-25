<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
    Nome: <input type="text" name="nome" id="idNome"></br>
    Preço: <input type="text" name="preco" id="idPreco"></br>
    Tipo: <input type="text" name="tipo" id="idTipo"></br>
    Safra: <input type="text" name="safra" id="idSafra"></br>
    <input type="submit" value="mostrar" name="mostrar"></br>
    </br>
    <input type="submit" value="verificar" name="verificar"></br>
    </form>
<?php
if(isset($_POST['mostrar'])){

    require_once 'Vinho.php';

    $vinho = new vinho();

    $vinho->setNome( $_POST['nome']);
    $vinho->setPreco($_POST['preco']);
    $vinho->setTipo($_POST['tipo']);
    $vinho->setSafra($_POST['safra']);
    echo $vinho->mostrarvinho();

}

if(isset($_POST['verificar'])){

    require_once 'Vinho.php';

    $vinho = new vinho();

    $vinho->setNome( $_POST['nome']);
    $vinho->setPreco($_POST['preco']);
    $vinho->setTipo($_POST['tipo']);
    $vinho->setSafra($_POST['safra']);
    $res;
    $res = $vinho->verificarPreco();

    switch ($res){
        case true:
            echo "Produto em Oferta";
            break;
        case false:
            echo "Produto com o 
            preço normal! ";
            break;
    }

}
?>
</body>
</html>