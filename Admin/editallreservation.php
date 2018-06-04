<?php
include_once 'Controller.php';
$id="";
$id=$_GET['id'];
$mycon=new Controller();
$all_result=$mycon->alldata_by_id($id);
$result=mysqli_fetch_assoc($all_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>edit reservation</title>
</head>
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5>Add New Item</h5>
            <form  action="item_edit_handler.php" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="Id" value=" <?php echo $result['Id'];?> "/>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Food Item Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <input type="text" class="form-control" name="itemname" value=" <?php echo $result['Itemname'];?> "/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Food Item Price</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="itemprice" value=" <?php echo $result['Itemprice'];?> "/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Description</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="" class="form-control" name="description"   value=" <?php echo $result['Description'];?> "/>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="submit" name="update" class="btn btn-primary btn-lg btn-block login-button">Update Item<button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

