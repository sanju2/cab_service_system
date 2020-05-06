
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/nav-stylesheet.css" rel="stylesheet">
    </head>

    <body>

        <!--navbar code -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="font: italic bold 20px/22px Georgia, serif;">
            <a class="navbar-brand" href="index.php"><img src="img/C_Cab_Service.PNG" style="width:30%;height:40%"></a>  

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="car-select.php">Our Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Feedback</a>
                    </li>
                    <li class="text-right align-text-bottom">

                        welcome : <?php
                        if (isset($_SESSION["user"])) {
                            echo $_SESSION["user"];
                        } else {
                            echo "User";
                        }
                        ?> &nbsp; 
                        <?php
                        if (isset($_SESSION["user"])) {
                            echo "<a href='Log-out.php'>Log Out</a>";
                        } else {
                            echo "<a href='Log-In.php'>Login</a>||<a href='Create_an_account(Customer).php'>Register</a>";
                        }
                        ?>

                    </li>

                </ul>
            </div>
        </nav>


    </body>
</html>