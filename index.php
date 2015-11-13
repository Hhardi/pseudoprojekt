<?php
$page = (isset($_GET['page']) ?  $_GET['page'] : 'home');


if (isset($_GET['page'])) {
require ($_GET['page'].'.php');
}
?>

