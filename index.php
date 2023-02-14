<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ata</title>
</head>
<body>

    <a href="?page=1">Página 1</a>
    <a href="?page=2">Página 2</a>
    <a href="?page=3">Página 3</a>
    
    <?php
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
            case'1';
            require_once ('./Pages/Page1.php');
            break;
            case'2';
            require_once ('./Pages/Page2.php');
            break;
            case'3';
            require_once ('./Pages/Page3.php');
            break;
        }
    }
        
        
    ?>

</body>
</html>