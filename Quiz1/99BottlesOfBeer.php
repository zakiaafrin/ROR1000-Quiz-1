<?php
$title = '99 Bottles of Beer<hr>';
function song() {
    echo "<font size='4'>"; 
    for ($bottles = 99; $bottles > 0; $bottles--) {   
        echo "<font color='#8A2BE2'>";   
        if ($bottles > 2) { 
            if(($bottles % 2) === 0){
                echo "<font color='#FF00FF'>";
            } 
            echo $bottles . " bottles of beer on the wall, " . $bottles . " bottles of beer. ";
            echo "Take one down and pass it around, " . ($bottles - 1) . " bottles of beer on the wall.</br>";
            echo '<br/>';
        } else if ($bottles > 1) {
            echo "<font color='#FF00FF'>";
            echo $bottles . " bottles of beer on the wall, " . $bottles . " bottles of beer. ";
            echo "Take one down and pass it around, " . ($bottles - 1) . " bottle of beer on the wall.</br>";  
            echo '<br/>';
        } else if ($bottles === 1) {  
            echo $bottles . " bottle of beer on the wall, " . $bottles . " bottle of beer. Take it down and pass it around, no more bottles of beer on the wall.</br>";
            echo '<br/>';
        }
    } 
    echo "<font color='#FF00FF'>"; 
    echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.";   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>99 Bottles of Beer</title>
</head>
<body>
    <h1><pre><?php echo $title; ?></pre></h1>
    <p><strong><pre><?php song(); ?></pre></strong></p>
</body>
</html>