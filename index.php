<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Atividade</title>
</head>
<body>
   
    <nav id="menu">
    <ul> 
      <li><a href="?page=home">Home</a></li>
      <li><a href="?page=tabuada">Tabuada</a></li>
      <li><a href="?page=Sobre">Sobre</a></li>
      <li><a href="?page=CalcIMC">Calcule IMC</a></li>
      <li><a href="?page=CalcViagem"> Calcular Custo da viagem</a></li>
    </ul>
  </nav>



    <?php

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case'';
            require_once ('./Pages/Page404.php');
            break;
            case'home';
            require_once ('./Pages/Home.php');
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