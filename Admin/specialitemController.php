<?php

class specialitemController
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
        $target_file="Specialitemimages/".basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $query = "INSERT INTO specialitem_tbl(Id,Itemname,Itemprice,Description,Image)VALUES('','$data[itemname]','$data[itemprice]','$data[description]','$target_file')";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {

            $_SESSION['insert_message'] = "item inserted successfully";
            header('Location:allspecialitem.php');
            return $result;


        }
    }

    public function alldata()
    {
        $query = "SELECT * FROM specialitem_tbl";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }
    public function alldata_by_id($data)
    {
        $query = "SELECT * FROM specialitem_tbl WHERE Id='$data'";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }

    public function edit_info($data)
    {
        $Query = "UPDATE specialitem_tbl SET  Itemname='$data[itemname]',Itemprice='$data[itemprice]',Description='$data[description]',Image='$data[img]' WHERE Id='$data[Id]'";
        $result = mysqli_query($this->con,$Query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            $_SESSION['update_message'] = "Item updated successfully";
            header('Location:allspecialitem.php');
            return $result;

        }
    }

    public function delete_info($data)
    {
        $query="DELETE FROM specialitem_tbl WHERE Id='$data'";
        $result=mysqli_query($this->con,$query);
        if(!$result){
            die("query can not be executed".mysqli_error($this->con));
        }
        else{
            $_SESSION['delete_message']="Item deleted successfully";
            header("location:allspecialitem.php");
            return $result;
        }
    }
}
