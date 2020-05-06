<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>C Cab Service System(Feedback)</title>
        <link rel="stylesheet" href="Resourses/boostrap/bootstrap.min.css">
        <script src="Resourses/js/jquery-3.3.1.min.js"></script>
        <script src="Resourses/js/popper.min.js"></script>
        <script src="Resourses/js/bootstrap.min.js"></script>
        <link href="Resourses/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
        <link href="css/style-feedbaack.css" rel="stylesheet">
    </head>

    <body background="img/feed123.jpg">
        <!--feedback-->
        <div class="fed">
            <div class="main">
                <div class="info">Give Your Feedback!</div>
                <form action="controller.php" method="post" name="form" class="form-box">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
                    <label for="email">Email ID</label><br>
                    <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
                    <label for="phone">Phone</label><br>
                    <input type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
                    <label for="message">Message</label><br>
                    <textarea name="msg" class="msg-box" placeholder="Enter Your Message Here..." required></textarea><br>
                    <input type="submit" name="feedback" value="Send" class="sub-btn">
                    <a href="index.php" style="color: black;"> Going to Home Page</a>
                </form>
            </div>
        </div>
    </body>
</html>