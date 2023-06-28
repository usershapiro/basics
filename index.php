<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>welcome</h1>
<h2>by me</h2>

<?php
$a=10;
$b=20;
$sum = $a +$b; 
echo "<p> $sum</p>"
?>
<br>
<p>
<?php
$a=10;
$b=20;
$sum = $a +$b; 
echo "<p> $sum</p>"
?>

</p>

<p>server date and time(israel time):</p>
<?php
$time = new DateTimeZone("Israel");
$currentTime = new DateTime("now",$time);
echo "<p>".$currentTime->format("d/m/Y H:i:s")."</p>";
?>
<hr>
<h4> End of Time </h4>


</body>
</html>