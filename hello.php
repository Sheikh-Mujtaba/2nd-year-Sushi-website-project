<!DOCTYPE>
<html>
<head>
    <title>Php</title>
</head>
<body>
<h1>

<?php
$today =date ("J M Y");
echo "Het is vandaag $today<br><br>";

$time =date ("H");
echo "Het is  {$time}.<br><br>";

$day =date ("z");
echo "Het is  {$day}e dag van het jaar.<br><br>";

$week =date ("w");
echo "Woensdag is de $week dan van de week.<br><br>";

$month =date ("F");
echo "De maand $month heeft in total 31 dagen.<br><br>";


$jaar =date("L");
echo "Het jaar 2021 is geen $jaar.";
    ?>


</h1>

</body>
</html>






</html>
<?php
