
<?php
session_start();
include_once 'specialitemController.php';
$con=new specialitemController();
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $con->delete_info($id);
}
$mydata=$con->alldata();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Food Item</title>
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
    <div class="row col-md-6 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <a href="addspecialitem.php" class="btn btn-primary btn-xs pull-right"><b>+</b> Insert New Special Item</a>
            <tr>
                <th>ID</th>
                <th>Food Item Name</th>
                <th>Food Item Price</th>
                <th>Description</th>
                <th>Item images</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <?php
            while($all_info= mysqli_fetch_assoc($mydata)){
                ?>
                <tr>

                    <td><?php echo $all_info['Id']; ?></td>
                    <td><?php echo $all_info['Itemname']; ?></td>
                    <td><?php echo $all_info['Itemprice']; ?></td>
                    <td><?php echo $all_info['Description']; ?></td>
                    <td><?php echo $all_info['Image']; ?></td>


                    <td class="text-center"><a class='btn btn-info btn-xs' href="editspecialitem.php?id=<?php echo $all_info['Id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="?delete=<?php echo $all_info['Id']; ?> "class=" btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>