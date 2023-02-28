<h1>Calcule o IMC - Peso/Altura²</h1>

<form method="post">
    Peso(Kg) <input type="number" name="x" placeholder=""> 
    <br>
    <br>
    Altura(M)<input id="corzinha" type="number" name="y" placeholder="">
    <input type="submit" value="Gerar">
</form>
<h3></h3>

<?php
    if(isset($_POST['x'], $_POST['y'])){
        $x = $_POST['x'];
        $y = $_POST['y'] / 100;
        $resultado = $x / ($y*$y);
        echo"<h3>$resultado</h3>";
            
    }

?>
