<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;

    if ($media >= 90 && $media <= 100){
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