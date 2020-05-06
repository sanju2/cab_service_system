
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:Log-In.php");
}

$reg = $_GET["reg"];
$rent = $_GET["rent"];
$price = $_GET["price"];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System(payments)</title>
        <link href="css/style-pay.css" rel="stylesheet">
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
        <script>
            function f() {
                if (document.getElementById("type").value == "creditcard") {
                    document.getElementById("btn2").hidden = "";
                    document.getElementById("btn1").hidden = "hidden";
                } else {

                    document.getElementById("btn2").hidden = "hidden";
                    document.getElementById("btn1").hidden = "";
                }
            }
            function r() {
                if (document.getElementById("drive").value == "yes") {
                    alert("yes");
                } else {

                    alert("No");
                }
            }
            function savepayment() {
                var reg = document.getElementById("d1").innerHTML;
                var rent = document.getElementById("d2").innerHTML;

                var driver = document.getElementById("drive").value;


                // alert(reg);
                var xhr = new XMLHttpRequest();

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        alert(xhr.responseText);
                        // document.getElementById("show").innerHTML = xhr.responseText;


                    }
                }
                xhr.open("GET", "controller.php?reg=" + reg + "&rent=" + rent + "&driver=" + driver + "&payment=completed", true);

                xhr.send(null);
                return false;


            }


        </script>
        <?php

        function a() {

            echo 'ok';
        }
        ?>     
    </head>

    <body onload="f()" style="background-color: #DADBDB;">
        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>





        <!--body files(pay)-->

        <div class="wrapper">
            <div class="content">
                <h1 style="color:black;font-family: Arial, Helvetica, sans-serif;">You Can Pay Here</h1>
                <p style="color:black;font-size:25px;">Use credit card or bank slip.</p>
            </div>

            <div class="form">
                <form action="controller.php?reg=<?php echo $reg; ?>&rent=<?php echo $rent; ?>&payment=completed" method="post">


                    <div class="middle-form">

                        <div class="inner-form">
                            <div class="label" style="color:black">Select Payment Method</div>
                            <select name="type" onchange="f()" id="type">
                                <option value="creditcard">Credit Card</option>
                                <option value="onhand">On Hand(Bank Slip)</option>

                            </select>
                        </div>



                    </div>

                    <div class="middle-form">
                        <div class="inner-form">
                            <div class="label" style="color:black">Do You Want a Driver</div>
                            <select name="driver"  onchange="r()" id="drive">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>

                            </select>
                        </div>

                        <span id="d1" hidden><?php echo $reg; ?></span>
                        <span id="d2" hidden><?php echo $rent; ?></span>
                        <br>
                        <div class="inner-form" >
                            <input type="button" value="Pay" name="pay" class=" btn" id="btn1" onclick="savepayment()"/> 
                        </div>

                    </div>


                    <div class="middle-form" id="btn2">
                        <div class="inner-form">
                            <?php
                            require_once "stripe/init.php";

                            $stripeDetails = array(
                                "secretKey" => "sk_test_jaXjNcbn3pLsh7vkAKpvRwF8",
                                "publishableKey" => "pk_test_MFeBrFUlMk28oALP6FLXAXnw");

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
                            \Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

//foreach ($products as $productID => $attributes) {



                            echo '
                            </ul>
                            <br>
                            <form action="makePay.php?id=' . "123" . '" method="POST">
                              <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="' . $stripeDetails['publishableKey'] . '"
                                data-amount="' . $price . '"
                                data-name="' . $reg . '"
                                data-description="Widget"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                              </script>
                              
                            </form>
                        </div>
                    </div>
                </div>
            ';
// }
                            ?>
                        </div>

                    </div>    

                </form>
            </div>

        </div>
    </body>
</html>