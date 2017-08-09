
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<?php
   $host        = "host = ec2-79-125-125-97.eu-west-1.compute.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7vpp251p4l9tg";
   $credentials = "user = baialgsjdhvmxy password=57161bba2de05428b22372402d30d2e1f002c39a358e2b2b89cb8b1678342150";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      CREATE TABLE cafes
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT   ,
      CITY           TEXT   ,
      LOCATION_LAT	BIGINT  ,
      location_lon  BIGINT 	,
      created_at    REAL    ,
      updated_at    REAL);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>


?>

<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: premumhome.php");
}
?>


<style type="text/css">
    
html, #map-canvas {
        height: 80%;
        margin: 0px;
        padding: 0px
      }
</style>
<style> 
input[type=text] {
    width: 40%;
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
input[type=password] {
    width: 40%;
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
    
    <li class="menu-item current-menu-item"><a href="index.php">login</a></li>
    <li class="menu-item"><a href="home.php">Guest Login</a></li>
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
                
                <center> <h4 class="post-title"><a href="#"> Login Details </a></h4></center>
                    <div class="clear"></div>
                </div>
                 <div>

                        <h1 align="center">Enter Details </h1>
                        <form action="" method="post">
                        <table width="100%"  cellspacing="5" cellpadding="5" >
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>UserName :</center></label></td>
                                <td colspan="2"><input id="name" name="username" placeholder="username" type="text"></td>
                            </tr>
                            <tr>
                                <td width="250" height="35" align="right"><label class="post-title"><center>Password :</center></label></td>
                                <td colspan="2"><input id="password" name="password" placeholder="**********" type="password"></td>
                            </tr>
                            <tr>
                                <td height="47"></td>
                                <td height="47"><input name="submit" type="submit" value=" Login "></td>
                            </tr>
                        </table>
                    
        </form>
        <br><br>
        </div>
</div>

    <br><br><br><br>

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