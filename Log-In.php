<html>
    <head><title>C Cab Services(Login Page)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style-login.css" rel="stylesheet">
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["username"].value;
                if (x == "") {
                    alert("Name must be filled out");
                    return false;
                }
                var y = document.forms["myForm"]["password"].value;
                if (y == "") {
                    alert("Password must be filled out");
                    return false;
                }
            }

        </script>
    </head>
    <body style="background:url(img/C-Cab-Back.jpg);background-size:cover;">
        <div class="loginBox">
            <a href="index.php"><img src="img/C_Cab_Service.png" class="user"></a>
            <h2>Login Here</h2>
            <form name="myForm" method="post" action="controller.php" onsubmit="return validateForm()">
                <p>User Name</p>
                <input type="text" name="username" placeholder="">
                <p>Password</p>
                <input type="password" name="password">
                <input type="submit" name="login" value="Login">
                <center><a href="Create_an_account(Customer).php">Sign Up</a></center>
                
            </form>
            <a href="index.php"> Going to Home Page</a><br>
            

        </div>
        <?php
        if (isset($_GET["ut"])) {
            ?>
            <font style="color: white; font-size: 35px;text-align: justify;"><?php
            if ($_GET["ut"] == "incorrect") {
                echo "Incorrect Details";
            } elseif ($_GET["ut"] == "banned") {
                echo "Account is banned";
            } else {
                echo "Account is under reviewing";
            }
            ?></font>
            <?php
        }
        ?>
    </body>
</html>