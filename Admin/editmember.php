
<?php
include_once 'registrationController.php';
 $id="";
 $id=$_REQUEST['id'];
$con= new registrationController();
$alldata=$con->view_all_data_by_id($id);
$result=mysqli_fetch_assoc($alldata);
?>

<!DOCTYPE html>
<head>
    <title>edit member</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <form action="member_edit_handler.php" method="post">
            <input type="hidden" class="ggg" name="Id" value="<?php echo $result['Id'];?>" >
            <input type="text" class="ggg" name="Username" value="<?php echo $result['Username'];?>" >
            <input type="email" class="ggg" name="Email" value="<?php echo $result['Email'];?>" >
            <input type="text" class="ggg" name="Phone" value="<?php echo $result['Phone'];?>">
            <input type="password" class="ggg" name="Password" value="<?php echo $result['Password'];?>">
            <div class="clearfix"></div>
            <input type="submit" value="Update" name="update">
        </form>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
