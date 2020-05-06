<?php
include_once("controller.php");

if (!isset($_SESSION["user"])) {
    header("location:Log-In.php");
}
?>


<head>
    <meta charset="utf-8">

    <title>C Cab Service System(Admin Details)</title>
    <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
    <script src="Resourses/js/jquery-3.3.1.min.js"></script>
    <script src="Resourses/js/popper.min.js"></script>
    <script src="Resourses/js/bootstrap.min.js"></script>



    <style>
        body{

        }
        h1{
            font-weight: bold;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 20px;
            text-align: left;
        } 
        th {
            background-color: #588c7e;
            color: white;

        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>

<body>
    <!--navigation bar-->
<center><h1>Admin Details Page</h1></center>
<a href="index.php" class="alert-link" style="font-size: 25px;">Going to home page</a>

<table>
    <tr>
        <th>User Id</th> 
        <th>First Name</th> 
        <th>Last Name</th>
        <th>NIC</th>
        <th>E mail</th>
        <th>Phone No</th>
        <th>User Type</th>
        <th>Status</th>
        <th>Action</th>

    </tr>

    <?php
    $table = ["customer", "cab_owner", "driver"];
    foreach ($table as $key => $value) {
        $data = $obj->viewMultiData($value, "login");
        foreach ($data as $row) {
            $Customer_id = $row["id"];
            $C_First_Name = $row["First_Name"];
            $C_Last_Name = $row["Last_Name"];
            $C_NIC = $row["NIC"];
            $C_Email = $row["Email"];
            $Phone_No = $row["Phone_No"];
            $status = $row["status"];
            $username = $row["username"];
            ?>

            <tr>
                <td><?php echo $Customer_id; ?></td> 
                <td><?php echo $C_First_Name; ?></td> 
                <td><?php echo $C_Last_Name; ?></td> 
                <td><?php echo $C_NIC; ?></td> 
                <td><?php echo $C_Email; ?></td> 
                <td><?php echo $Phone_No; ?></td> 
                <td><?php
                    if ($value == "cab_owner") {
                        echo "Cab Owner";
                    } else {
                        echo $value;
                    }
                    ?></td> 
                <td><?php echo $status; ?></td> 
                <td><?php if ($status == "pending") { ?><button class="btn btn-danger" onclick="window.location = 'controller.php?act=statusChange&u=<?php echo $username; ?>&status=banned'">banned</button><?php } ?><button class="btn btn-<?php
                    if ($status == 'pending' || $status == 'banned') {
                        echo 'success';
                    } else if ($status == 'active') {
                        echo 'danger';
                    }
                    ?>" onclick="window.location = 'controller.php?act=statusChange&u=<?php echo $username; ?>&status=<?php
                                                                                                                                                                                                                               if ($status == 'active') {
                                                                                                                                                                                                                                   echo 'banned';
                                                                                                                                                                                                                               } else {
                                                                                                                                                                                                                                   echo 'active';
                                                                                                                                                                                                                               }
                                                                                                                                                                                                                               ?>'"><?php
                                                                                                                                                                                                                                   if ($status == "pending" || $status == "banned") {
                                                                                                                                                                                                                                       echo "Active";
                                                                                                                                                                                                                                   } else if ($status == "active") {
                                                                                                                                                                                                                                       echo "banned";
                                                                                                                                                                                                                                   }
                                                                                                                                                                                                                                   ?></button><button class="btn btn-info" onclick="window.location = 'viewMore.php?id=<?php echo $Customer_id; ?>&table=<?php echo $value; ?>'">View</button></td> 
            </tr> 

            <?php
        }
    }
    ?>

</table>
</body>
</html>