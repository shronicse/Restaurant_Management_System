<?php
include_once 'specialitemController.php';
if(isset($_POST['update'])){
    $con=new specialitemController();
    $con->edit_info($_POST);
}