<?php
require('connection_info.php');

if (isset($_POST['savedata'])) {
	$tulajdonos = $_POST['owner'];
	$auto = $_POST['which_car'];
    $garancialis = $_POST['warranty'];
    $eletkor = $_POST['age'];
    $szerviz_kezdete = $_POST['started'];
    $szerviz_vege = "";
}

    header('location: ./../VIEW/list.php');
?>