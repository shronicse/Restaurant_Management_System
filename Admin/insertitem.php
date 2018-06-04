
<?php
include_once 'Controller.php';
    if(isset($_POST['btn'])){
       $mycon=new Controller();
       $data=$mycon->insertItem($_POST);
}
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

    <title>Insert item</title>
</head>
<body>
<a href="dashboard.php" class="btn btn-primary btn-xs pull-left"> Back to Home</a>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5>Add New Item</h5>
            <form class="" method="post" action="insertitem.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Food Item Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <input type="text" class="form-control" name="itemname"  placeholder="Enter your Food Item Name" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Food Item Price</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="itemprice"  placeholder="Enter your Food Item Price" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Description</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="" class="form-control" name="description"   placeholder="Enter your Short Description" required/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" name="btn"  id="btn" class="btn btn-primary btn-lg btn-block login-button">Insert Item<button>
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

