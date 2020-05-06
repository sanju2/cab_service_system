<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System</title>
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis|Open+Sans:600" rel="stylesheet">

        <style>
            body {

                font-family: 'Dosis', sans-serif;
                font-family: 'Open Sans', sans-serif;
                height: 100%;
                width: 100%; 
                color:#222;
            }
        </style>
    </head>


    <body>


        <!--navigation bar-->
        <?php include_once("navBar.php"); ?>


        <!--image slider-->
        <div class="row">

            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/IS1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/IS2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/IS3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="my-3">C Cab Service</h3>
                <p>A best cab website in the srilanka.</p>
                <!--login add krnna-->
                <h3 class="my-3">We can give quick and safty service for you</h3>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <p><b>It Shows the Our Progress</b></p>
                <h3 class="my-3">Downloads Our App<br>--It is under developing--</h3>
                <p>It is easy to connect with us</p>

            </div>
        </div>
        <hr class="my-4" style="width:75%;margin:0 auto;padding-top: 2rem;">
        <!--welcome section-->
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="lead" style="font-style: italic;font-weight: bold;">Safty and quick service</h1>
                </div>
                <hr style="border-top: 2px solid #b4b4b4; width:95%;margin-top: .3rem;margin-bottom: 1rem;">
                <div class="col-12">
                    <p class="lead">The pioneer in shaping the cab/taxi service industry in Sri Lanka, C Cabs is Sri Lanka’s Number one cab/taxi service provider occupying 70% of the market share in the industry today. Thus providing complete bouquet of end to end transportation solutions through its fleet of 400 cars varying in a wide range of luxury to semi luxury cars.</p>
                </div>
            </div>
        </div>  

        <!--three column section-->
        <div class="container-fluid padding">
            <div class="row text-center padding" style="align:center">
                <div class="col-xs-12 col-sm-6 col-md-4" style="text-align:left;">
                    <img src="img/car.png">
                    <h3>Our Service</h3>
                    <p>Quick service</p>
                    <p>Safety and relaibale service.</p>
                    <p>24 hours cab service.</p>
                    <p>If you need you can get a driver.</p>
                    <p>We will give insurance service.</p>
                    <p>If you want buy luxury or semi-luxury vehicles.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <img src="img/driver_index.jpg" width="100%" height="70%">
                    <h3>You are Driver!!! You can Join with us</h3>
                    <p>High salery and benifits</p>
                    <a href="Create_an_account(driver).php" class="alert-link">Drivers register here</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="img/home_cars.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">We have lot of cars</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="car-select" class="btn btn-success">see our cars</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4" style="border-top:1px solid #d5d5d5;width:75%;margin-top:.8rem;margin-bottom:1rem;">
        </div>

        <!--two column section-->
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-md-12 col-lg-6">
                    <h2>You have a car,you can give us</h2>
                    <p>Trust the vehicle safety</p>
                    <p>we give the insurance for your vehicle</p>
                    <p>monthly pay your money</p>
                    <p>we can granted for your vehicle</p>
                    <p>you can see your vehicle every months</p>
                    <p>you can see your vehicle every months</p>
                    <p>you can register for rent your vehicle</p>
                    <br>
                    <a href="Create_an_account(Cab_Owner).php" class="alert-link">Cab Owner Register</a>
                </div>
                <div class="col-lg-6">
                    <img src="img/cab_owner_index.jpg" class="img-fluid">
                </div>
            </div>
        </div>

        <hr class="my-4" style="border-top:1px solid #d5d5d5;width:75%;margin-top:.8rem;margin-bottom:1rem;">  

        <!--fixed background-->
        <figure>
            <div class="fixed-wrap">
                <div id="fixed">
                </div>
            </div>
        </figure>

        <!--two column section-->
        <div class="container-fluid padding">
            <div class="row padding">
                <div class="col-lg-6">
                    <h2>our vision</h2>
                    <p>To be the preferred cab/taxi service provider mainly in Colombo and immediate suburbs among the cab users and within the corporate client by providing excellent, quality and on time service by closely monitoring the day to day operations, immediately addressing client complaints and maintaining high standard of customer orientation.</p>

                    <h2>our mission</h2>
                    <p>Whilst our well maintained variety of fleet and highly professional chauffeurs ensuring the comfort & safety of our rides, our valued customers matter most to us. C Cabs has set high standards in order to achieve our vision by enduring strict regulations and policies to ensure discipline and honesty among our staff members. All our chauffeurs are screened through a thorough selection process with necessary background checks. Our hard working employees are the key to our success and that’s why we set the foundation by providing recurrent training sessions from all our chauffeurs to Contact Centre staff.</p>

                    <br>
                    <a href="services.html" class="btn btn-primary" style="background-color: #6648b1;border:1px solid #563d7c;">Learn more</a>
                </div>
                <div class="col-lg-6">
                    <img src="img/twocl2.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <br/>    

        <!--map section-->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.945896655725!2d81.08097395!3d6.9813981499999995!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2slk!4v1544633123124" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <hr class="my-4">  

        <!--connect-->
        <div class="container-fluid padding" style="align-items: center;">
            <div class="row text-center padding" >
                <div class="col-12">
                    <h2>Connect With Us</h2>
                </div>
                <div class="col-12 social padding">
                    <div class="row container" style="align: center;margin: 5px 2px;padding: 20px;font-size: 22px;">
                        <div class="col-3 social"><a href="#" class="fa fa-facebook fa-4x" style="text-decoration:none;"></a></div>
                        <div class="col-3 social "><a href="#" class="fa fa-twitter fa-4x" style="text-decoration:none"></a></div>
                        <div class="col-3 social "><a href="#" class="fa fa-google fa-4x" style="text-decoration:none"></a></div>
                        <div class="col-3 social "><a href="#" class="fa fa-instagram fa-4x" style="text-decoration:none;"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">

        <!--footer-->
        <footer style="background:#3f3f3f;color: #d5d5d5;padding-top: 2rem;">
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="img/C_Cab_Service.PNG" style="width:25%;height:35%">
                        <hr class="light">
                        <p>0775094902</p>
                        <p>ccabservice910@gmail.com</p>
                        <p>N0:18,Station Road,Badulla</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light"> 
                        <h5>Our hours(24 Hours Online Service)</h5>
                        <hr class="light">
                        <p>Monday to Saturday : 9am - 5pm</p>
                        <p>Saturday: 10am -4pm</p>
                    </div>
                    <div class="col-md-4">
                        <hr class="light"> 
                        <h5>contact to us</h5>
                        <hr class="light">
                        <p>Lasantha : 0775094902</p>
                        <p>Niwanthi : 0779807320</p>
                        <p>Chamantha : 0779741412</p>
                        <p>Pavithra : 0711244156</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100s">
                        <h5>&copy; CCab.com 2k19</h5>
                    </div>
                </div>
            </div> 
        </footer>


    </body>
</html>