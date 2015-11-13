<?php
$enimi =" Hardi";
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

?>
