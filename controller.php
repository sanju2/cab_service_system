<?php
session_start();
include("DB.php");

class controller extends DB {

    function sendMail($email) {



        require 'PHPMailerAutoload.php';
        require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'C Cab Service');
        $mail->addAddress($email);     // Add a recipient
        $mail->addReplyTo(EMAIL);


        $mail->AddEmbeddedImage('img/C_Cab_Service.png', 'logo');
        //$mail->addAttachment('/img/C_Cab_Service.png', 'logo.png');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "Wellcome to C Cab";
        $mail->Body = '<div style="borger:2px solid red;">Thank You Connect with us<b></br>C Cab</b></div>';
        $mail->AltBody = "You are successfully registration for C Cab Service";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return FALSE;
            //header("location:index.php");
        } else {
        	//header("location:s-register.php");
            echo 'Message has been sent';
            return TRUE;
            //header("location:index.php");
        }
//header("location:index.php");
        //return 0;
    }

 function sendMailReview($name,$email,$phone,$msg) {



        require 'PHPMailerAutoload.php';
        require 'credential.php';

        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom(EMAIL, 'C Cab Service');
        $mail->addAddress($email);     // Add a recipient
        $mail->addReplyTo(EMAIL);


        $mail->AddEmbeddedImage('img/C_Cab_Service.png', 'logo');
        //$mail->addAttachment('/img/C_Cab_Service.png', 'logo.png');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "$name Left A Review";
        $mail->Body = '<div style="borger:2px solid red;">'.$msg.'<b></br>C Cab</b></div>';
        $mail->AltBody = "contact $phone";

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return FALSE;
            //header("location:index.php");
        } else {
        	//header("location:s-register.php");
            echo 'Message has been sent';
            return TRUE;
            //header("location:index.php");
        }
//header("location:index.php");
        //return 0;
    }
    function saveData($table, $data) {

        $query = "insert into $table values('" . implode("','", array_values($data)) . "')";
        $r = mysqli_query($this->con, $query);



        if ($r) {
            //man add kree
            echo 'success';
            //header("location:s-register.php");
            
        } else {
            echo 'failed';
        }
    }

    function findMaxId($table, $field) {
        $res = mysqli_query($this->con, "select $field from $table");

        $max = 0;
        while ($row = mysqli_fetch_array($res)) {
            if ($max < $row["$field"]) {
                $max = $row["$field"];
            }
        }

        return $max;
    }

    function login($username, $password) {

        $res = mysqli_query($this->con, "select * from login where username='$username' and password='$password' ");
        $b = false;
        $st = null;
        while ($row = mysqli_fetch_array($res)) {
            $b = true;
            $ul = null;
            $st = $row["status"];
            $ul = $row["usertype"];
        }

        if ($b) {
            if ($st == "active") {
                $_SESSION["user"] = $username;
                if ($ul == "customer") {
                    header("location:car-select.php");
                } elseif ($ul == "admin") {
                    header("location:admin-details.php");
                } elseif ($ul == "driver") {
                    header("location:index.php?ut=driver");
                } else {
                    header("location:cab_owner_details.php");
                }
            } elseif ($st == "banned") {
                header("location:Log-In.php?ut=banned");
            } else {
                header("location:Log-In.php?ut=pending");
            }
        } else {
            header("location:Log-In.php?ut=incorrect");
        }
    }

    function viewData($table) {
        $res = mysqli_query($this->con, "select * from $table");

        $arr = array();
        while ($row = mysqli_fetch_array($res)) {
            $arr[] = $row;
        }
        return $arr;
    }
	
	

    function viewDataBy($table, $key, $value) {
        $res = mysqli_query($this->con, "select * from $table where $key='$value'");

        $arr = array();
        while ($row = mysqli_fetch_array($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

    function viewDataByCar($table, $key, $value) {


        $res = mysqli_query($this->con, "select * from $table where $key='$value'");


        while ($row = mysqli_fetch_array($res)) {
            $red = $row["Reg_No"];
            $model = $row["Model"];
            $status = $row["Status"];
            $seat = $row["Seating_capacity"];
            $img = $row["image"];
            $cab_price = $row["cab_owner_price"];
            $customer_price = $row["rent_price"];
            ?>
            <div style="margin: auto;width:600px;height:auto;padding-top: 8px">

                <div style="float:left;padding-bottom: 8px" >

                    <img src="<?php echo $img; ?>" width="380px" height="210px">
                </div>

                <div style="float:right">

                    <h4>Model :<?php echo $model; ?></h4>
                    <p>Status :<?php echo $status; ?></p>
                    <h4>Seating Capacity :<?php echo $seat; ?></h4>
                    <button type="button" value="" name="btn" onclick="window.location = 'pay.php';">Booking Now</button>

                </div>
            </div>
            <?php
        }
    }

    function viewMultiData($table1, $table2) {
        $res = mysqli_query($this->con, "select * from $table1,$table2 where $table1.id=$table2.userId");

        $arr = array();
        while ($row = mysqli_fetch_array($res)) {
            $arr[] = $row;
        }
        return $arr;
    }

    function changeStatus($u, $st) {
        $res = mysqli_query($this->con, "update login set status='$st' where username='$u'");
        header("location:admin-details.php");
    }
 function updateCar($p, $st) {
        $res = mysqli_query($this->con, "update vehical set availability='$st' where Plate_No='$p'");
       // header("location:admin-details.php");
    }
}

$obj = new controller();


if (isset($_POST["feedback"])) {
   
    $obj->sendMailReview($_POST["name"],$_POST["email"],$_POST["phone"],$_POST["msg"]);

}

if (isset($_GET["act"])) {
    $obj->changeStatus($_GET["u"], $_GET["status"]);
}

//customer registration
if (isset($_POST["Register"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["address"], $_POST["nic"], $_POST["email"], $_POST["pnu"]);
    $obj->saveData("customer", $arr);


    $id = $obj->findMaxId("customer", "id");

    $log = array($id, $_POST["uname"], $_POST["password"], "customer", "pending");
    $obj->saveData("login", $log);

    $obj->sendMail($_POST["email"]);
}
//driver registration
if (isset($_POST["DriverRegister"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["dob"], $_POST["address"], $_POST["nic"], $_POST["lcno"], $_POST["email"], $_POST["pnu"]);
    $obj->saveData("Driver", $arr);


    $id = $obj->findMaxId("Driver", "id");

    $log = array($id, $_POST["uname"], $_POST["password"], "Driver", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}
//cabowner registration
if (isset($_POST["CabOwnerRegister"])) {

    $arr = array(0, $_POST["fname"], $_POST["lname"], $_POST["address"], $_POST["nic"], $_POST["email"], $_POST["pnu"]);
    $obj->saveData("cab_owner", $arr);


    $id = $obj->findMaxId("cab_owner", "id");

    $log = array($id, $_POST["uname"], $_POST["password"], "cab_owner", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}
//admin registration
if (isset($_POST["AdminRegister"])) {

    $arr = array(0, $_POST["name"], $_POST["address"], $_POST["nic"], $_POST["email"]);
    $obj->saveData("admin", $arr);


    $id = $obj->findMaxId("admin", "id");

    $log = array($id, $_POST["uname"], $_POST["password"], "admin", "pending");
    $obj->saveData("login", $log);
    $obj->sendMail($_POST["email"]);
}




if (isset($_GET["payment"])) {
    if (isset($_POST["type"])) {
        $p = $_POST["type"];
    } else {
        $p = "onhand";
    }
    if (isset($_POST["driver"])) {
        $d = $_POST["driver"];
    } else {
        $d = $_GET["driver"];
    }
	
	$Plate_No=$_GET["Plate_No"];

    $arr = array(0, "2012-12-12", "5", $p, $_GET["rent"], "0", $_SESSION["user"], "0", "0", $d);
    $obj->saveData("payment", $arr);


    $id = $obj->findMaxId("payment", "id");
	
	$arr2=array(0,0,19,47,"2012-12-12",$Plate_No);
	 $obj->saveData("hire", $arr2);
	  $id = $obj->findMaxId("hire", "id");
	 $obj->updateCar($Plate_No,"not avilable");
	 //$obj->sendMail($_POST["email"]);
	  
	  }








//car registration
if (isset($_POST["CarRegister"])) {

    $img = $_FILES["image"]["tmp_name"];
    $name = $_FILES["image"]["name"];
    $path = "Uploads/" . $name;
    if (move_uploaded_file($img, $path)) {
        $arr = array(0, $_POST["plateno"], $_POST["model"], $_POST["type"], $_POST["status"], $_POST["chassyno"], $_POST["seatingcapacity"], $_POST["nokm"], $path,6, 150,200,"avilable");
        $obj->saveData("vehical", $arr);
    }
}


if (isset($_POST["login"])) {

    $obj->login($_POST["username"], $_POST["password"]);
}



if (isset($_GET["brand"])) {

    $obj->viewDataByCar("vehical", "model", $_GET["brand"]);
}
?>