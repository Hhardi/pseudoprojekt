<?php
$enimi ="Hardi";
$pnimi = " Kaiv ";
$vanus =  19;
$eesnimi_algab_vokaaliga = false;
$isik = array($enimi, $pnimi,'('. $vanus.')');
$var1 = 1.23;
$var2= 2.34;
if ($eesnimi_algab_vokaaliga) {
    echo 'Nimi algab vokaaliga';
}

$obj=(object)array('nimi'=>'hardi', 'pnimi'=> 'kaiv', 'vanus'=>19);
echo $obj->nimi. " " .$obj->pnimi. " (".$obj->vanus.")" ;
$vokaalid = array('A', 'E', 'I', 'O', 'U','Õ', 'Ä', 'Ö' );
echo '<br>';
if (in_array($enimi[0], $vokaalid)) {
    echo "Eesnimi algab vokaaliga";
}
else {echo 'Eesnimi ei alga vokaaliga';}
?>
