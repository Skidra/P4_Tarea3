<html>
<head>
<title>Promedio 20 numeros</title>
</head>
<body>
<?php
$array = array(5,12,34,54,6,75,2.4,3.6,1.3,1.50,30,20,10,5,4,3,2,1,12,5);
print_r($array);
echo "<br/>";
echo "(".$array[0]."+".$array[1]."+".$array[2]."+".$array[3]."+".$array[4]."+".$array[5]."+".$array[6]."+".$array[7]."+".$array[8]."+".$array[9]."+".$array[10]."+".$array[11]."+".$array[12]."+".$array[13]."+".$array[14]."+".$array[15]."+".$array[16]."+".$array[17]."+".$array[18]."+".$array[19].")/10";
$array = $array[0]+$array[1]+$array[2]+$array[3]+$array[4]+$array[5]+$array[6]+$array[7]+$array[8]+$array[9]+$array[10]+$array[11]+$array[12]+$array[13]+$array[14]+$array[15]+$array[16]+$array[17]+$array[18]+$array[19]/10;
echo "<br/>";
echo "Promedio= ".$array;

?>
</body>
</html>