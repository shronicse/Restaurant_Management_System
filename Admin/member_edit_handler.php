<?php
include_once 'registrationController.php';
if($_POST['update']){
    $con= new registrationController();
    $con->update_info($_POST);
}