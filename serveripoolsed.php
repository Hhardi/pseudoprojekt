<?php
echo 'Tere maailm';
$enimi =" Hardi";
$pnimi = " Kaiv ";
$vanus =  19;
$eesnimi_algab_vokaaliga = false;
$isik = array($enimi, $pnimi,'('. $vanus.')');
$var1 = 1.23;
$var2= 2.34;


echo $enimi;
echo $pnimi;
echo '('.$vanus.')';
echo '<br>';
echo $isik[0].$isik[1].$isik[2];

if ($eesnimi_algab_vokaaliga) {
    echo 'Nimi algab vokaaliga';
}
echo '<br>'.($var1 + $var2);


?>