<h1>Calcule sua viagem - Distancia / Autonomia * Preco do combustivel</h1>

<form method="post">
    Distancia (Km) <input type="number" name="x" placeholder=""> 
    <br>
    <br>
    Autonomia (Km) <input id="corzinha" type="number" name="y" placeholder="">
    <br>
    <br>
    Preço do combustivel (R$) <input id="corzinha2" type="number" name="w" placeholder="">
    <input type="submit" value="Gerar">
</form>
<h3></h3>

<?php
    if(isset($_POST['x'], $_POST['y'], $_POST['w'])){
        $x = $_POST['x'];
        $y = $_POST['y'];
        $w = $_POST['w'];
        $resultado = (($x / $y) *$w);
        echo"<h3>$resultado</h3>";
            
    }

?>
