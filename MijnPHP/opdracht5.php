<?php
$rapportcijfers = array(10.0,2,6.0,7.1,7.3,6.5,8.4,2.4,9.2,4.5);
$aantal = 1;
$totaal = 0;
for($i = 0; $i < count($rapportcijfers); $i++){
    $cijfer = $rapportcijfers[$i];
    $totaal = $totaal + $cijfer;
    $gemiddelde = round($totaal/$aantal,1);
    $aantal = $aantal + 1;
}
echo"$gemiddelde"

?>