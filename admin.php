
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<style type="text/css">
    
html, #map-canvas {
        height: 80%;
        margin: 0px;
        padding: 0px
      }
</style>
<style> 
input[type=text] {
    width: 60%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: azure;
    background-image: url('search-icon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
input[type=double] {
    width: 60%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: azure;
    background-image: url('search-icon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
  
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpR9iTHMEZZ75Ojwe-0uO-wko1JFhhdg0&callback=initMap">
    </script>
  <script src="map.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>NearByLocation</title>

<link rel='stylesheet' id='reset-css'  href='css/reset.css' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='css/orbit.css' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='css/color/green.css' type='text/css' media='all' />
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/jquery-1.10.2.min.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel-6.2.1-packed.js'></script>
<script type='text/javascript' src='js/hoverIntent.js'></script>
<script type='text/javascript' src='js/superfish.js'></script>
<script type='text/javascript' src='js/orbit.min.js'></script>
 <script src="js/css3-mediaqueries.js"></script>
</head>

<body class="home blog">

	<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">
                   
                    <a href="#">
                   <!-- <img src="images/logo.png" id="logo" style="height: 50px" /> -->
                   <font size="7" style=" font-family: 'Montserrat', sans-serif; text-transform:uppercase; font-weight:700; line-height:1.4em; color:#555555;"> Near By Location </font>
                    </a>
                    
					<!-- Navigation Menu -->
                    
	<ul class="sf-menu">
    <li class="menu-item"><a href="index.php">Home</a></li>
    <li class="menu-item current-menu-item"><a href="insert.php">Admin</a></li>
	<li class="menu-item"><a href="offers.pgp">Offers</a></li>
    <li class="menu-item"><a href="about.php">About us</a></li>
</ul>	
                    <!-- End Navigation Menu -->
                   
                    <div class="clear"></div>
                    
            </div>
			</div>
        </div>
    <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->

    <!-- Start Main Container -->
    <div class="container zerogrid">
    
        <!-- Start Posts Container -->
        <div class="col-12" id="post-container" >
            <div class="wrap-col" >
                 
            <!-- Start Post Item -->
 <div class="post" >
                <div class="post-margin" >
                
                <center> <h4 class="post-title"><a href="#">Users</a></h4></center>
                    <div class="clear"></div>
                </div>
                 <div>

                        <h1 align="center">Add User</h1>
                        <form action="admin.php" method="post">
                        <table width="100%"   cellspacing="1" cellpadding="1" >
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>name</center></label></td>
                                <td><input type="text" name="name" size="40"/ required="required"></td>
                            </tr>
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>Password</center></label></td>
                                <td><input type="text" name="password" size="40"/  required="required"></td>
                            </tr>
                            <tr>
                                <td height="38" align="right" width="250"><label class="post-title"><center>type</center></label> </td>
                                <td><input type="double" name="type" size="40"/  required="required"></td>
                            </tr>
                            <tr>

                                <td height="47"></td>
                                <td height="47"><input id="button" type="submit" name="submit" value="create"/></td>
                            </tr>
                       
                        </form>
                         </table>

        </div>
        </div>

            <div class="post" >
                <div class="post-margin" >
                
                <center> <h4 class="post-title"><a href="#"> Map locations </a></h4></center>
                    <div class="clear"></div>
                </div>
                 <div>

                        <h1 align="center">Enter Details </h1>
                        <form action="insert.php" method="post">
                        <table width="100%"   cellspacing="1" cellpadding="1" >
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>place name</center></label></td>
                                <td><input type="text" name="name" size="40"/ required="required"></td>
                            </tr>
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>city</center></label></td>
                                <td><input type="text" name="city" size="40"/  required="required"></td>
                            </tr>
                            <tr>
                                <td height="38" align="right" width="250"><label class="post-title"><center>location latitude</center></label></td>
                                <td><input type="double" name="location_lat" size="40"/  required="required"></td>
                            </tr>
                            <tr>
                                <td height="38" align="right" width="250"><label class="post-title"><center>location longitude</center></label></td>
                                <td><input type="double" name="location_lon" size="40"/  required="required"></td>
                            </tr>
                            <tr>
                                <td height="38" align="right" width="250"><label class="post-title"><center>created at</center></label></td>
                                <td><input type="date" name="created_at" size="40"/></td>
                            </tr>
                            <tr>

                                <td height="47"></td>
                                <td height="47"><input id="button" type="submit" name="submit" value="create"/></td>
                            </tr>
                       

                    
                        </form>
                         </table>
        </div>
            <?php include 'adminlogic.php' ?>
</div>

   <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">  
            <!-- Footer Copyright -->
            <p>Copyrigh &copy; 2017 @ All Rights Reserved.</p>
            <!-- End Footer Copyright -->
            
            <!-- Footer Logo -->
            <a href="#">
                   <!-- <img src="images/logo.png" id="logo" style="height: 50px" /> -->
                   <font style="position: absolute;right: 0px;
" size="5" style=" font-family: 'Montserrat', sans-serif; text-transform:uppercase; font-weight:700; line-height:1em; "> Near By Location &nbsp</font>
                    </a>

            <!-- End Footer Logo -->
        
        <div class="clear"></div>
        </div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>