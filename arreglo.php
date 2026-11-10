<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action=""> 
        <button type="submit" name="dame">Tres mayores</button>
        <br><br>
    </form>
    <?php
        $n=50;
        $arreglo=[];
        for($i=0; $i<$n; $i++){
            $arreglo[$i]=rand(0,100);
        }
        echo "<h3>Arreglo impreso:</h3>";
        for($i=0; $i<$n; $i++){
            echo $arreglo[$i];
            if($i<$n-1){
                echo ", ";
            }
        }
        if($_SERVER["REQUEST_METHOD"]=== "POST" && isset($_POST['dame'])) {   
            $m1=-1; $m2=-1; $m3=-1;
            for($i=0; $i<$n; $i++){
                if($arreglo[$i]>$m1){
                    $m3=$m2;
                    $m2=$m1;
                    $m1=$arreglo[$i];
                }
                else if($arreglo[$i]>$m2){
                    $m3=$m2;
                    $m2=$arreglo[$i];
                }
                else if($arreglo[$i]>$m3){
                    $m3=$arreglo[$i];
                }
            }
            echo "<h3>Los tres mayores son:</h3>";
            echo $m1 . ", " . $m2 . ", " . $m3;
        }
    ?>    
</body>
</html>

