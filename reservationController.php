<?php

class reservationController
{
    public $con;
    public function __construct()
    {
        $host='localhost';
        $user='root';
        $password="";
        $dbname="restaurant_db";

        $this->con=mysqli_connect($host,$user,$password,$dbname);
        if(!$this->con){
            die('database error').mysqli_error($this->con);
        }
        else{
            return $this->con;
        }

    }

    public function insertItem($data)
    {
        $query = "INSERT INTO reservation_tbl(Order_date,Person_no,Order_time,Phone_number,Itemname)VALUES('$data[date]','$data[personno]','$data[time]','$data[phoneno]','$data[itemname]')";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {

            $_SESSION['insert_message'] = "item inserted successfully";
            header('Location:Admin/allreservation.php');
            return $result;


        }
    }

    public function alldata()
    {
        $query = "SELECT * FROM reservation_tbl";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }

    public function delete_info($data)
    {
        $query="DELETE FROM reservation_tbl WHERE Id='$data'";
        $result=mysqli_query($this->con,$query);
        if(!$result){
            die("query can not be executed".mysqli_error($this->con));
        }
        else{
            $_SESSION['delete_message']="Item deleted successfully";
            header("Location:allreservation.php");
            return $result;
        }
    }
}
