   <?php

// 1. Open database connection
require ('db.php');

// 2. Do a query
$query  = "SELECT initial_location, destination, date, price "; 
$query .= "FROM routline";
$result = mysqli_query($connection,$query);

if (!$result) {
    die("query is wrong");
}

    
            
// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["initial_location"] . "</td>";
    echo "<td>" . $row["destination"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td><a href='rd.php?id=" . $row["id"] ."'>Cheak</a></td>";
    echo "</tr>";
}
    
   
// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);
?>
<!doctype html>
<!--[if IE 7]>    <html class="ie7" > <![endif]-->
<!--[if IE 8]>    <html class="ie8" > <![endif]-->
<!--[if IE 9]>    <html class="ie9" > <![endif]-->
<!--[if IE 9]>    <html class="ie10" > <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!--> <html lang="en-US"> <!--<![endif]-->
		<head>
				<!-- META TAGS -->
				<meta charset="UTF-8" />
				<meta name="viewport" content="width=device-width" />
				<!-- Title -->
				<title>Bus Information</title>
                <link href='http://fonts.useso.com/css?family=Open+Sans+Condensed:300,400,600,800,700' rel='stylesheet' type='text/css'>

            <!-- Style Sheet-->
				<link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/bootstrap.css">
				<link rel="stylesheet" href="css/responsive.css">
                <link rel="stylesheet" href="css/flexslider.css">

               <!-- favicon -->
				<link rel="shortcut icon" href="images/favicon.png">

<link rel="stylesheet" href="css/matrix-style.css" />
				
				<!--[if lt IE 9]>
						<script src="js/html5shiv.js"></script>
						<link rel="stylesheet" href="css/ie.css">
				<![endif]-->
		</head>
		<body>
                <!-- HEADER TOP -->
                <div id="top"></div>
                <div class="header-one">
                    <div class="headertop-wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="span5 clearfix">
                                    <div class="lang pull-right">
                                        <span>Select a language:<a href="#">English</a></span>
                                    </div>
                                </div>
                                <div class="span4 srch">
                                    <form>
                                        <input type="submit" value="">
                                        <input type="text" name="search" placeholder="Search">
                                    </form>
                                </div>
                                <div class="span3">
                                    <div class="social-nav">
                                        <a href="#" class="facebook "></a>
                                        <a href="#" class="twitter" ></a>
                                        <a href="#" class="google"></a>
                                        <a href="#" class="rss"></a>
                                    </div>
                                    <a href="login.php" class="sign-in" id="login-link">Sign Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HEADER IOP -->


                <!-- HEADER -->
                <div class="header-wrapper">
                	<div class="container">
                    	<div class="row">
                        
                        	<!-- Logo -->
                            <div class="span4">
                            	<div class="logo">
                                	<a href="index.php"><img src="Images/logo.png" alt="Logo"></a>
                                </div>
                            </div>
                        	<!-- Logo -->
                            
                            <!--top Menu -->
                            <div class="span8">
                            	<div class="top-menu">
                                	<ul>
                                		<li><a href="#">About US</a></li>
                                		<li><a href="#">News</a></li>
                                		<li><a href="#">Serbice</a></li>
                                		<li><a href="#">Recruiment</a></li>
                                		<li><a href="#">Media</a></li>
                                		<li><a href="#" class="last">Support</a></li>
                                	</ul>
                                </div>
                            </div>
                            <!--top Menu -->
                        
                        </div>
                    </div>
                </div>
                <!-- HEADER -->

                <!-- Main Navigation -->
                <div class="nav-wrapper">
                	<div class="container">
                    	<div class="row">
                        	<div class="span12">
                            
                            	<nav>
                                    <ul>
                                        <li><a href="index.php">Home </a>
                                        	<ul class="clearfix">
                                                <li><a href="login.php">Home 2</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="travel_grid.php">Travel</a>
                                        	<ul class="clearfix">
                                                <li><a href="travel_grid.php">Travel Grid</a></li>
                                                <li><a href="travel_list.php">Travel list</a></li>
                                                <li><a href="travel_detail.php">Travel Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Holidays</a></li>
                                        <li>
                                            <a href="#">Flights</a>
                                            <ul class="clearfix">
                                                <li><a href="#">Camera</a></li>
                                                <li><a href="#">Notebook </a></li>
                                                <li><a href="#">Tablet </a> </li>
                                                <li><a href="#">Television </a> </li>
                                                <li><a href="#">Smart Phone </a> </li>
                                                <li><a href="#">Projection </a> </li>
                                            </ul>
                                        </li>
                                        <li><a href="routline.php">Cars</a></li>
                                        <li><a href="#">Vacations</a></li>
                                        <li><a href="#">Guide Book</a></li>
                                        <li><a href="#">Hot Deal</a></li>
                                        <li><a href="booking.php">Booking</a>
                                        	<ul class="clearfix">
                                                <li><a href="confirm.php">Confirmation</a></li>
                                            </ul>
                                        </li>
                                        <li  class="last"><a href="contact.php">Contact</a></li>
                                    </ul>
                                </nav>

                                <div class="responsive_nav">
                                    <ul>
                                        <li class="open">
                                            <a href="index.php">HOME</a>
                                            <ul>
                                                <li><a href="index.php">Home </a></li>
                                                <li><a href="#">Hotels</a></li>
                                                <li><a href="#">Holidays</a></li>
                                                <li><a href="#">Flights</a> </li>
                                                <li><a href="#">Camera</a></li>
                                                <li><a href="#">Notebook </a></li>
                                                <li><a href="#">Tablet </a> </li>
                                                <li><a href="#">Television </a> </li>
                                                <li><a href="#">Smart Phone </a> </li>
                                                <li><a href="#">Projection </a> </li>
                                                <li><a href="routline.php">Cars</a></li>
                                                <li><a href="#">Vacations</a></li>
                                                <li><a href="#">Guide Book</a></li>
                                                <li><a href="#">Hot Deal</a></li>
                                                <li><a href="#">Cruise</a></li>
                                                <li class="last"><a href="#">Promotion</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Navigation -->

				<!-- Crum -->
                <div class="crum-wrapper">
                	<div class="container">
                    	<div class="row">
                        	<div class="span12">
                            	<a href="index.php">Home</a>
                                <span class="crum">Routline</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Crum-->
            
                <!-- Grid page -->
                <div class="content booking_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="span12 booking clearfix">
                                <div class="top">
                                    <h2>Routline</h2>
                                    <h3>Chengdu-Yaan</h3>
                                    <div class="stars">
                                        <a href="#" class="active"></a>
                                        <a href="#" class="active"></a>
                                        <a href="#" class="active"></a>
                                        <a href="#"></a>
                                        <a href="#"></a>
                                    </div>
                                </div>
                                
            <div class="bottom clearfix">                    
        <table class="table table-bordered table-striped with-check">
            <thead>
                <tr>
                <th>Start Place</th>
                <th>End Place</th>
                 <th>Date</th>
                <th>Distance</th>
                <th>Price</th>   
            </thead>

<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["initial_location"] . "</td>";
    echo "<td>" . $row["destination"] . "</td>";
     echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["date"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
}
    
?>
    
</table>
  </div>
                            </div>
                        </div>
                    </div>
                </div>       
    
<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>
            <!-- Scripts -->
				<script src="js/jquery-1.7.1.min.js"></script>
				<script src="js/jquery.flexslider.js"></script>
                <script src="js/jquery.flexslider-min.js"></script>
                <script src="js/jquery.elastislide.js"></script>
                <script src="js/jquery.carouFredSel-6.0.4-packed.js"></script>
                <script src="js/jcarousellite_1.0.1.js"></script>
                <script src="js/jquery.zweatherfeed.js"></script>
                <script src="js/jquery.simpleWeather-2.3.min.js"></script>
                <script src="js/jquery.cycle.all.js"></script>
                <script src="js/jquery-ui.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/jquery.isotope.min.js"></script>
                <script src="js/jquery.tinyscrollbar.min.js"></script>
                <script>
                    function goToByScroll(id){
                        $ = jQuery;
                        $('html,body').animate({scrollTop: $("#"+id).offset().top},3000);
                    }
                </script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.scrollbar1').tinyscrollbar();
                    });
                </script>
                <script src="js/custom.js"></script>		
    
    </body>
</html>

