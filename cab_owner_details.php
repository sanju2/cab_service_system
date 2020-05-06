
<?php
include_once("controller.php");

if (!isset($_SESSION["user"])) {
    header("location:Log-In.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System(Cab-Owner-Details)</title>
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="style-select-car.css" rel="stylesheet">
    </head>

    <body>
        <!--navigation-->
        <?php include_once("navBar.php"); ?>
        <!--cab owner details page-->
        <ul class ="list-group">
            <li Class="list-group-item"> </li>
            <li Class="list-group-item"> </li>
            <li Class="list-group-item"> </li>
            <li Class="list-group-item"> </li>
        </ul>



    </body>
</html>
