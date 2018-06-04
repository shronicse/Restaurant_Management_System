<?php
include_once '../reservationController.php';
$con=new reservationController();
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->delete_info($id);
}
$mydata=$con->alldata();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All reservation Item</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/tableview.css" type="text/css">
</head>
<body>
<a href="../index.php" class="btn btn-primary btn-xs pull-left"> Back to Home</a>
<div class="container" align="center">
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <tr>
                <th>ID</th>
                <th>Order Date</th>
                <th>Number Of Person</th>
                <th>Order Time</th>
                <th>Phone No</th>
                <th>Item Name</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php
            while($all_info= mysqli_fetch_assoc($mydata)){
                ?>
                <tr>

                    <td><?php echo $all_info['Id']; ?></td>
                    <td><?php echo $all_info['Order_date']; ?></td>
                    <td><?php echo $all_info['Person_no']; ?></td>
                    <td><?php echo $all_info['Order_time']; ?></td>
                    <td><?php echo $all_info['Phone_number']; ?></td>
                    <td><?php echo $all_info['Itemname']; ?></td>

                    <td><a href="?delete=<?php echo $all_info['Id']; ?> "class=" btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>