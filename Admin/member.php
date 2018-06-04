<?php
session_start();
$message="";
if(isset($_SESSION['delete_message'])){
    $message=$_SESSION['delete_message'];
    unset($_SESSION['delete_message']);
}
$message="";
if(isset($_SESSION['save_message'])){
    $message=$_SESSION['save_message'];
    unset($_SESSION['save_message']);
}
include_once 'registrationController.php';
$con=new registrationController();

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->delete_data($id);
}
$mydata=$con->view_all_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>All admin members</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/tableview.css" type="text/css">
</head>
<body>
<a href="dashboard.php" class="btn btn-primary btn-xs pull-left"> Back to Home</a>
<div class="container" align="center">
    <h3 class="text-center text-success"><?php echo $message;?></h3>
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <a href="registration.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new member</a>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php
            while($all_info= mysqli_fetch_assoc($mydata)){
                ?>
                <tr>

                    <td><?php echo $all_info['Id']; ?></td>
                    <td><?php echo $all_info['Username']; ?></td>
                    <td><?php echo $all_info['Email']; ?></td>
                    <td><?php echo $all_info['Phone']; ?></td>
                    <td><?php echo $all_info['Password']; ?></td>


                    <td class="text-center"><a class='btn btn-info btn-xs' href="editmember.php?id=<?php echo $all_info['Id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="?delete=<?php echo $all_info['Id']; ?> class=" btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>