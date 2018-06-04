<?php
class Controller
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
        $query = "INSERT INTO fooditem_tbl(Itemname,Itemprice,Description)VALUES('$data[itemname]','$data[itemprice]','$data[description]')";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            $_SESSION['insert_message'] = "item inserted successfully";
            header('Location:fooditem.php');
            return $result;

        }
    }

    public function alldata()
    {
        $query = "SELECT * FROM fooditem_tbl";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }
    public function alldata_by_id($data)
    {
        $query = "SELECT * FROM fooditem_tbl WHERE Id='$data'";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }

    public function edit_info($data)
    {
        $Query = "UPDATE fooditem_tbl SET  Itemname='$data[itemname]',Itemprice='$data[itemprice]',Description='$data[description]' WHERE Id='$data[Id]'";
        $result = mysqli_query($this->con,$Query);
             if (!$result) {
                 die("query can not be executed" . mysqli_error($this->con));
             } else {
                 $_SESSION['update_message'] = "Item updated successfully";
                 header('Location:fooditem.php');
                 return $result;

             }
             }

    public function delete_info($data)
    {
        $query="DELETE FROM fooditem_tbl WHERE Id='$data'";
        $result=mysqli_query($this->con,$query);
        if(!$result){
            die("query can not be executed".mysqli_error($this->con));
        }
        else{
            $_SESSION['delete_message']="Item deleted successfully";
            header("Location:fooditem.php");
            return $result;
        }
    }
}
