<?php
include_once("controller.php");
?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System(View More)</title>
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        
        
        <style>
            h1{
            font-weight: bold;
        }
        </style>

    </head>

    <body style="font-family: 'Poppins', sans-serif;color:#222;">
        <!--navigation bar-->
        <center><h1>More Account Info</h1></center>

        <?php
        $id = $_GET["id"];
        $table = $_GET["table"];
        $data = $obj->viewDataBy($table, "id", $id);
        $fn = null;
        foreach ($data as $row) {
            $fn = $row["First_Name"];
            $ln = $row["Last_Name"];
            $email = $row["Email"];
            $phoneno = $row["Phone_No"];
        }
        ?>   

        <form>
            <table class="table table-white" style="font-size: 20px;font-weight: bold;">
                <tr>
                    <td scope="col">First Name</td>
                    <td><input type="text" value="<?php echo $fn; ?>" ></td>
                </tr>

                <tr>
                    <td scope="col">Last Name</td>
                    <td><input type="text" value="<?php echo $ln; ?>" ></td>
                </tr>

                <tr>
                    <td scope="col">User Name</td>
                    <td><input type="text" value="<?php echo $email; ?>" ></td>
                </tr>

                <tr>
                    <td scope="col">Password</td>
                    <td><input type="text" value="<?php echo $phoneno; ?>" ></td>
                </tr>


            </table>

            <a href="admin-details.php" class="btn btn-success">Back</a>



        </form>



    </body>
</html>