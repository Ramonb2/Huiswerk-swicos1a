
<?php
$v = true;
$array = array (10,7.2,3.2,9.1,7.8,6.0,6.9,6.4,5.2,1.4);
$Count = count ($array) - 1;
for ($i = 0; ($i < $Count) && ($v == True); $i++)
{
    $v = false;
    for ($j = 0; $j < ($Count - $i); $j++)
    {
        if ($array[$j] > $array[$j + 1])
        {
            $Temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $Temp;
            $v = true;
        }
    }
}

   echo " laagste $array[0] hoogste $array[$Count]";


?>