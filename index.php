<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Genarator</title>
</head>
<?php  
function getDeg(){
       $deg = mt_rand(0, 180) . 'deg';
       echo $deg;
}

function getRandomColor($num){
    while($num > 0){
       $rand_color = 'rgb(0, 0, ' . mt_rand(0, 255) . ')';
       yield $rand_color;
       $num--;
   }
}

 
?>
<body style="background-image: linear-gradient(<?php getDeg()?>, <?php  echo implode(', ', iterator_to_array(getRandomColor(100))); ?>)">
    
    
    
</body>
</html>