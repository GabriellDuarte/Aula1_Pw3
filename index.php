<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ata</title>
</head>
<body>
    <a href="?page=home">home</a>
    <a href="?page=tabuada">Tabuada</a>
    <a href="?page=Sobre">Sobre</a>
    <a href="?page=CalcIMC">Calcule IMC</a>
    <a href="?page=CalcViagem"> Calcular Custo da viagem</a>

    <?php

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case'home';
            require_once ('./index.php');
            break;
            case'tabuada';
            require_once ('./Pages/Tabuada.php');
            break;
            case'Sobre';
            require_once ('./Pages/Sobre.php');
            break;
            case'CalcIMC';
            require_once ('./Pages/CalcIMC.php');
            break;
            case'CalcViagem';
            require_once ('./Pages/CalcViagem.php');
            break;
            default:
            echo 'página não encontrada';
        }
    }
        
        
    ?>

</body>
</html>