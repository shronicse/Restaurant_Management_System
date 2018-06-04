<?php
class registrationController
{
    public $con;

    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $password = "";
        $dbname = "restaurant_db";

        $this->con = mysqli_connect($host, $user, $password, $dbname);
        if (!$this->con) {
            die('database error') . mysqli_error($this->con);
        } else {
            return $this->con;
        }

    }

    public function save_info($data)
    {
        $query = "INSERT INTO login_tbl(Username,Email,Phone,Password) VALUES('$data[Name]','$data[Email]','$data[Phone]','$data[Password]') ";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {

            $_SESSION['save_message'] = "data saved successfully";
            header('Location:member.php');
            return $result;
        }
    }

    public function view_all_data()
    {
        $query = "SELECT * FROM login_tbl";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;
        }
    }


    public function view_all_data_by_id($id)
    {
        $query = "SELECT * FROM login_tbl WHERE Id=$id";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            return $result;

        }
    }

    public function update_info($data)
    {
        $query = "UPDATE login_tbl SET Username='$data[Username]',Email='$data[Email]',Phone='$data[Phone]',Password='$data[Password]' WHERE Id='$data[Id]' ";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            header('Location:member.php');
            $_SESSION['update_message'] = "data updated successfully";

        }
    }

    public function delete_data($data)
    {
        $query = "DELETE FROM login_tbl WHERE Id='$data'";
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            die("query can not be executed" . mysqli_error($this->con));
        } else {
            $_SESSION['delete_message'] = "data deleted successfully";
            header('Location:member.php');
        }
    }
}