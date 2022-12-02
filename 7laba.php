<?php

            if (isset($_POST['nums'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            
            function factorial($number2)
            {
                if ($number2 < 0) {
                    return -1;
                }
                else if($number2 == 0) {
                    return 1;
                }  
                    $tmp = $number2;
                    while( $number2-- > 2){
                        $tmp *=$number2;
                    }
                    return $tmp;
                factorial($number2);
            }

            for($w = 0; $w <= $number2; $w++)
            {
                
                $e = pow(-1,($number1))*(pow($number2, $number1))/ $number1;
            }
            
            $r = M_PI/2 + $e;
            echo($r);  
            }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<form method="post" action="">
    <input name="number1" type="text">
    <input name="number2" type="text">
    <input type="submit" name="nums" value="Нажми на меня">
    
    </form>
</body>
</html>