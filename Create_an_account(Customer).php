
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style-create-account.css">
        <script>
            function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                if (x == "") {
                    alert("First Name must be filled out");
                    return false;
                }
                var y = document.forms["myForm"]["lname"].value;
                if (y == "") {
                    alert("Last Name must be filled out");
                    return false;
                }
                var z = document.forms["myForm"]["address"].value;
                if (z == "") {
                    alert("Address must be filled out");
                    return false;
                }
                var r = document.forms["myForm"]["uname"].value;
                if (r == "") {
                    alert("Username must be filled out");
                    return false;
                }
                var p = document.forms["myForm"]["password"].value;
                if (p == "") {
                    alert("Password must be filled out");
                    return false;
                }
            }
            function ValidateEmail()
            {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
                {
                    return (true)
                }
                alert("You have entered an invalid email address!")
                return (false)
            }
            function validPhone()
            {
                var phoneno =document.getElementById("pnu").value;
                if (true)
                {
                    return true;
                } else
                {
                    alert("message");
                    return false;
                }
            }
            function validateNIC()
            {
                var nic = document.getElementById('nic');
                var mesg = document.getElementById('message1');

                if (NIC.length != 14) {
                    message1.innerHTML = "Length must be 14 characters";
                } else {
                    message1.innerHTML = "Length is good";
                }
            }

        </script>
    </head>
    <body>
        <div class="body-content">
            <div class="module">
                <h1>Sign Up(Customer)</h1>
                <form name="myForm" action="controller.php" method="post" enctype="multipart/form-data" autocomplete="off" onsubmit="return validateForm()">

                    <div class="resbox">
                        <i class="icon-user"></i>
                        <input type="text" placeholder="First Name" name="fname" required/>
                    </div>

                    <div class="resbox">
                        <i class="icon-user"></i>
                        <input type="text" placeholder="Last Name" name="lname" required/>
                    </div>

                    <div class="resbox">
                        <input type="text" placeholder="Address" name="address" required/>
                    </div>

                    <div class="resbox">
                        <i class="icon-user"></i>
                        <input type="text" placeholder="NIC" name="nic" maxlength="10" required/>
                    </div>

                    <div class="resbox">
                        <i class="icon-user"></i>
                        <input type="email" placeholder="Email" name="email" required/>
                    </div>

                    <div class="resbox">
                        <input type="text" placeholder="User Name" name="uname" required/>
                    </div>

                    <div class="resbox">
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>

                    <div class="resbox">
                        <input type="text" placeholder="Phone No" name="pnu" id="pnu" maxlength="10" required/>
                    </div>

                    <input type="submit" value="Register" name="Register" class=" btn"/> 

                </form>

                <p>click hear to <a href="Log-In.php">login</a></p>
                <p><a href="index.php"> Going to Home Page</a></p>

            </div>

        </div> 

    </body>
</html>
