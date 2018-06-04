<?php
include_once 'Controller.php';
if(isset($_POST['update'])){
    $con=new Controller();
   $con->edit_info($_POST);
}
