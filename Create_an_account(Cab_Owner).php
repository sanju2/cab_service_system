<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style-create-account.css">
        <script>
             function validateForm() {
                var x = document.forms["cabownerform"]["fname"].value;
                if (x == "") {
                    alert("First Name must be filled out");
                    return false;
                }
                var y = document.forms["cabownerform"]["lname"].value;
                if (y == "") {
                    alert("Last Name must be filled out");
                    return false;
                }
                var z = document.forms["cabownerform"]["address"].value;
                if (z == "") {
                    alert("Address must be filled out");
                    return false;
                    
                    
                }
                var r = document.forms["cabownerform"]["uname"].value;
                if (r == "") {
                    alert("Username must be filled out");
                    return false;
                }
                var p = document.forms["cabownerform"]["password"].value;
                if (p == "") {
                    alert("Password must be filled out");
                    return false;
                }
            }
            function ValidateEmail()
            {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(cabownerform.email.value))
                {
                    return (true)
                }
                alert("You have entered an invalid email address!")
                return (false)
            }
            function phonenumber(pnu)
            {
                var phoneno = /^\d{10}$/;
                if ((pnu.value.match(phoneno))
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

                if (NIC.length != 10) {
                    message1.innerHTML = "Length must be 10 characters";
                } else {
                    message1.innerHTML = "Length is good";
                }
            }

        </script>
    </head>
    <body>
        <div class="body-content">
            <div class="module">
                <h1>Sign Up(Cab Owner)</h1>
                <form action="controller.php" method="post" enctype="multipart/form-data" autocomplete="off" name="cabownerform">
                    
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
                        <input type="text" placeholder="NIC" name="nic" required/>
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
                        <input type="text" placeholder="Phone No" name="pnu" required/>
                    </div>
                   <input type="submit" value="Register" name="CabOwnerRegister" class=" btn"/> 
                </form>
                <p>click hear to <a href="Log-In.php">login</a></p>
                <p><a href="index.php"> Going to Home Page</a></p>
            </div>
            
        </div> 
            
    </body>
</html>
