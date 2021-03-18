<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lekcja 2</title>
</head>
<body>
<style> *{
font-family: sans-serif;
text-align: center;}
</style>
    
    <?php
   $var = 'Hello';
   $var = 'HI';


define('CONSTANT', 'World');
//CONATANT = 'Earth'; komentarz 
echo "$var " . CONSTANT;
echo '<br>';
$text = 'ABCD';
$num = 120;
$float = 25.52;
$bool = true;
echo "$text, $num, $float,";
var_dump($bool);
echo '<br>';

$textNum = "30x";
// echo $textNum +$num;
var_dump(is_numeric($textNum));


    ?>
    
   
    
</body>
</html>