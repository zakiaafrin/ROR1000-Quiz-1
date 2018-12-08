<?php
define('i', '99');
$title = '99 Bottles of Beer<hr>';
function song() {
    echo "<font size = '4'>"; 
    for ($i=99; $i>=0; $i--) {
    echo "<font color = '#8A2BE2'>";  
    if(($i % 2) === 0) echo "<font color = '#FF00FF'>";
    if ($i === 0) echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.";
    elseif ($i === 1) echo "$i bottle of beer on the wall, $i bottle of beer. Take it down and pass it around, no more bottles of beer on the wall.<br/><br/>";
    elseif ($i === 2) echo "$i bottles of beer on the wall, $i bottles of beer. Take one down and pass it around, " . ($i - 1) . " bottle of beer on the wall.<br/><br/>";
    else echo "$i bottles of beer on the wall, $i bottles of beer. Take one down and pass it around, " . ($i - 1) . " bottles of beer on the wall.<br/><br/>";
    }
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