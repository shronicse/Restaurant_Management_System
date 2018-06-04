<?php
include_once 'reservationController.php';
if(isset($_POST['itembook'])){
    $con=new reservationController();
    $con->insertItem($_POST);

}