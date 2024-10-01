<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boletim</h1>
    <form action="index.php" method="post">
        
        <h5>Nota 1</h5>
        <input type="number" id="n1">
        
        <h5>Nota 2</h5>
        <input type="number" id="n2">
        
        <h5>Nota 3</h5>
        <input type="number" id="n3">
        
        <h5>Nota 4</h5>
        <input type="number" id="n4">
        
        <h5>Nota 5</h5>
        <input type="number" id="n5">

        <button type="submit">Calcular</button>
    </form>

    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;

    if ($media >= 90){
        $notaf = 'A';
    }elseif ($media >= 80 && $media <= 89){
        $notaf = 'B';
    }elseif ($media >= 70 && $media <= 79){
        $notaf = 'C';
    }elseif ($media >= 60 && $media <= 69){
        $notaf = 'D';
    }else{
        $notaf = 'F';
    }
     
    echo "<h1>Resultado do Boletin</h1>";
    echo "Média é ". number_format($media, 2)."<br>";
    echo "Nota final: ". $notaf;
}else{
    echo "Error";
    
}
?>
</body>
</html>