
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

<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */		
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
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
                    
	<ul class="sf-menu"><li class="menu-item "><a href="index.php">Home</a></li>
	<li class="menu-item current-menu-item"><a href="offers.php">Offers</a></li>
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
        <div class="col-6" id="post-container" >
            <div class="wrap-col" >
                 
            <!-- Start Post Item -->
            <div class="post" >
                <div class="post-margin" >
                <center> <h4 class="post-title"><a href="#"> Offers</a></h4></center>
                    <div class="clear"></div>
                </div>
                        
<hr>
                <h6><a href="#">Mc Donalds</a></h6>
                <img width="290" height="130" src="img/mcd.png"  />                
                Free Burger on Orders above Rs. 319 (Online Order)
<hr>
                <h6><a href="#">Dominos</a></h6>
                <img width="290" height="130" src="img/Dominos_pizza.png" />    
                Dominos is giving Gift Vouchers both in Physical and Electronic 
<hr>
                <h6><a href="#">papa jhons pizza </a></h6>
                <img width="290" height="130" src="img/pj.png"  />  
                You can mail this Electronic Voucher code to your loved ones.
<hr>
                <h6><a href="#">pizza hut</a></h6>
                <img width="290" height="130" src="img/ph.png"  />         
                visit and get more exciting offers
<hr>           
           
            <div class="clear"></div>
            </div>
            <!-- End Post Item -->
          <div class="container zerogrid">
	           <div class="col-12" id="post-container">
            <div class="wrap-col">
                 
            <!-- Start Post Item -->
            <div class="post">
             </div>
             </div>
            </div>        
          </div>  
    <!-- Start Featured Carousel -->
    <div class="container zerogrid">
        <div class="list_carousel">
        <ul id="featured-posts">
            <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">Mc Donalds</a></h6>
                <span><i class="fa fa-clock-o"></i> still live</span>
            </div>
            <div class="featured-image">
            <img width="290" height="130" src="img/mcd.png"  />                
            <div class="post-icon">  
                </div>
            </div>                       
            <div class="post-margin">
                <p>Free Burger on Orders above Rs. 319 (Online Order)</p>
            </div>
            </li>
            <li class="first carousel-item">
            <div class="post-margin">
                <h6><a href="#">Dominos</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2018</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/Dominos_pizza.png" />    
                    
                    
            </div>
                        
            <div class="post-margin">
                <p>Dominos is giving Gift Vouchers both in Physical and Electronic </p>
            </div>
        </li>
                <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">papa jhons pizza </a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2018</span>
            </div>
            
                        <div class="featured-image">
            <img width="290" height="130" src="img/pj.png"  />  
            </div>
            <div class="post-margin">
                <p>
                    You can mail this Electronic Voucher code to your loved ones.
                </p>
            </div>
        </li>
            <li class="last carousel-item">
            <div class="post-margin">
                <h6><a href="#">pizza hut</a></h6>
                <span><i class="fa fa-clock-o"></i> December 13, 2018</span>
            </div>
            <div class="featured-image">
            <img width="290" height="130" src="img/ph.png"  />         
                   
            </div>
                       
            <div class="post-margin">
                <p>visit and get more exciting offers</p>
            </div>
        </li>
                
        </ul>
        
        <div class="clear"></div>
            
            <div class="carousel-controls">
                <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
                <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
              <div class="clear"></div>
            </div>
      </div>
    </div>
    <!-- Start Featured Carousel -->
    
    	
    
   
                 
   <!-- End Widget -->
<div class="clear"></div></div>    <div class="clear"></div>
</div></div>        <!-- End Sidebar -->
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	

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