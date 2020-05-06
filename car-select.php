<?php include("controller.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System(Car Select)</title>
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style-select-car.css" rel="stylesheet">

        <script>
            function SearchVehicle() {
                var brand = document.getElementById("search").value;
                var xhr = new XMLHttpRequest();

                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        document.getElementById("show").innerHTML = xhr.responseText;


                    }
                }
                xhr.open("GET", "controller.php?brand=" + brand, true);

                xhr.send(null);
                return false;


            }

        </script>  

    </head>

    <body>




        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>
        
        <!--car search button-->
        <form class="form-inline my-2 my-lg-0" style="align-content: center;">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="SearchVehicle()">Search</button>
        </form>
        <!--car select code-->
        <div class="um" id="show">
            <?php
            $data = $obj->viewData("vehical");
            foreach ($data as $row) {
                $reg= $row["Reg_No"];
                $model = $row["Model"];
                $status = $row["Status"];
                $seat = $row["Seating_capacity"];
                $img = $row["image"];
                $cab_price = $row["cab_owner_price"];
                $customer_price = $row["rent_price"];
				
                $Plate_No = $row["Plate_No"];
				  $availability = $row["availability"];
				
                ?>
                <div class="row" style="width: 50%; margin: 0 auto; margin-bottom: 40px;">
                    <div class="col-md-7" >
                        <img src="<?php echo $img; ?>" width="380px" height="210px">
                    </div>
                    <div class="col-md-5">
					<input type="text" id="Plate_No" value="<?php echo $Plate_No;?>" hidden>
                        <h4>Model :<?php echo $model; ?></h4>
                        <p>Status :<?php echo $status; ?></p>
                        <p>Price /h :<?php echo $customer_price; ?></p>
                        hours : <input type="number" id="hours_<?php echo $reg;?>" onkeyup="updatePrice(<?php echo $reg;?>,<?php echo $customer_price; ?>)"> 
                        <p style="margin-top: 6px;">price : <span id="price_<?php echo $reg;?>">0.00</span></p>
                        <h4>Seating Capacity :<?php echo $seat; ?></h4>
                        <!-- <button type="button" value="" name="btn" onclick="window.location = 'pay.php?reg=<?php echo $reg;?>&rent=<?php echo $customer_price;?>&hourse=hourse';">Booking Now</button> -->
                        <button type="button" value=""  class="btn btn-success" name="btn" onclick="goPaymentPage(<?php echo $reg;?>,<?php echo $customer_price; ?>)" <?php if($availability!="avilable"){echo "disabled";}?>>Booking Now</button>
                    </div>
                    <div style="margin-top: 20px; width: 100%; height: 2px; background: #d6d6d6;"></div>
                </div>
                <?php
            }
            ?>

        </div>
<script>
    function goPaymentPage(reg,rent){
		
        var hours = document.getElementById("hours_"+reg).value;
        var price = rent * hours
        var priceInUsdSence =  price * 100 / 178;
		
		var Plate_No=document.getElementById("Plate_No").value;
		//alert(Plate_No);
        window.location = 'pay.php?reg=' + reg + '&rent=' + rent+ '&Plate_No=' + Plate_No + '&price='+ priceInUsdSence;
    }

    function updatePrice(reg,rent){
        var hours = document.getElementById("hours_"+reg).value;
        var price = rent * hours
        document.getElementById("price_"+reg).innerHTML = price + ' LKR';
    }
</script>



    </body>
</html>
