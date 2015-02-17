<head>
</head>
<body>

<?php
$aantal=600;
$aantalsave= 0;
$r = 0;
$d1 = 0;
$d2 = 0;
$d3 = 0;
$d4 = 0;
$d5 = 0;
$d6 = 0;

$aantalsave = $aantal;

while($aantal >= 0){

$r = Mt_rand(1,6);
${d.$r} ++;


$aantal --;

}

echo "Je hebt $d1 keer 1 gegooid <br>";
echo "Je hebt $d2 keer 2 gegooid<br>";
echo "Je hebt $d3 keer 3 gegooid<br>";
echo "Je hebt $d4 keer 4 gegooid<br>";
echo "Je hebt $d5 keer 5 gegooid<br>";
echo "Je hebt $d6 keer 6 gegooid<br>";
?>
</body>