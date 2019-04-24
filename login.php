<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="login.css">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Quicksand|Eagle+Lake|Permanent+Marker" rel="stylesheet">
	
	<title>Login or Sign Up | Bistro</title>

</head>
<body>
    
    <div class="head">

        <div id="logo">
            
            <a href="bistro.html"><img title="Home" src="Bistro-logo.png" height="100px" width="100px;" style="border-radius: 50%;"></a>

        </div>
        
        <div class="head1">
            
            <div class="home about"><a href="about.html">About Us</a>
                <div id="contact"><a href="contact.php">Contact</a></div>
            </div>
            <div class="home"><a href="gallery.html">Gallery</a></div>
            <div class="home"><a href="menu.html">Menu</a></div>
            <div class="home"><a href="Restaurant Finder and Food Delivery App_v12.1.6_apkpure.com.apk">Get The App</a></div>

        </div>

    </div>

    <div class="loginsignup" align="center">

        <div class="login">

            <h1>Login</h1>

            <form action="login1.php" method="post">
            
                <table style="margin-top: 50px;" align="center">
                    
                    <tr>                        
                        
                        <th class="namepass" scope="row" width="150px;">USERNAME</th>
                        <td width="250px"><input class="form-control input-lg" size="40px" type="text" placeholder="Enter Username" name="username" required></td>

                    </tr>

                    <tr>
                        
                        <th class="namepass" scope="row" width="150px;">PASSWORD</th>
                        <td width="250px"><input class="form-control input-lg" size="40px" type="password" placeholder="Enter Password" name="password" required></td>

                    </tr>

                </table>

                <input class="button" style="margin-top: 20px;" type="submit" value="Login" name="signIn">

            </form>

        </div>

        <div class="signup">

            <h1>Sign Up</h1>

            <form action="signup.php" method="post">
            
                <table>
                    
                    <tr>
                        
                        <th class="namepass" width="150px">Name</th>
                        <td width="250px"><input class="form-control input-lg" type="text" placeholder="Enter UserName" name="username" required></td>

                    </tr>

                    <tr>
                        
                        <th class="namepass" width="150px">Password</th>
                        <td width="250px"><input class="form-control input-lg" type="password" placeholder="Enter Password" name="password" required></td>

                    </tr>

                    <tr>
                        
                        <th class="namepass" width="150px">Email</th>
                        <td width="250px"><input class="form-control input-lg" type="email" placeholder="Enter Email" name="email" required></td>

                    </tr>

                </table>

                <input class="button" style="margin-top: 20px;" type="submit" value="Submit">

            </form>

        </div>

    </div>

    <div id="marquee">

        <marquee scrollamount="20"><b>Copyright @ Bistro Restaurant(TM)</b></marquee>

    </div>

    <div class="footer">
        
        <a href="bistro.html"><img src="Bistro-logo.png" title="Home" alt="Zomato" height="75px" width="75px" style="margin-top: 30px; margin-left: 70px; border-radius: 5px;"></a><br><br><hr>

        <div class="foot">

            <div id="footer2" class="col">
                <ul>
                    <b><li>About Bistro</li></b>
                    <li></li>
                    <a href="about.html"><li>About Us</li></a>
                    <a href="gallery.html"><li>Gallery</li></a>
                    <a href="menu.html"><li>Menu</li></a>
                    <a href="#support"><li>Contact</li></a>
                </ul>
            </div>

            <div id="footer1" class="col">
                <ul>
                    <b><li>Our Branches</li></b>
                    <li></li>
                    <li>Dwarka</li>
                    <li>Janakpuri</li>
                    <li>Vasant Vihar</li>
                    <li>South Extention</li>
                    <li>Tilak Nagar</li>
                    <li>Greater Noida</li>
                </ul>
            </div>

            <div id="footer3" class="col">
                <ul>
                    <b><li></li></b>
                    <li></li>
                    <li>Ghaziabad</li>
                    <li>Gurugram</li>
                    <li>Lajpat Nagar</li>
                    <li>Ambedhkar Nagar</li>
                    <li>Noida Sector 15, 18, 22</li>
                </ul>
            </div>

        </div>

    </div>

</body>
</html>