<?php
echo 'Tere maailm';
$enimi =" Hardi";
$pnimi = " Kaiv ";
$vanus =  19;
$eesnimi_algab_vokaaliga = false;
$isik = array($enimi, $pnimi,'('. $vanus.')');

echo $enimi;
echo $pnimi;
echo '('.$vanus.')';
echo '<br>';
echo $isik[0].$isik[1].$isik[2];



?>