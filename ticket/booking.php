<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ticket Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	
    <div class="loader">
       <div>
        <img src="images/icons/preloader.gif" />
       </div>
    </div>
    
    <div class="container-fluid">
		<div class="row">
        	<div class="col-sm-5 left-wrapper">
            	<div class="event-banner-wrapper">
                	<div class="logo">
                        <h1>Stage</h1>
                    </div>
                
                	<h2>
                    Music<br>Concert Live
                    <span>10 April 2017, 8:00 PM</span>
                    </h2>
                    <p>More Templates <a href="http://www.cbc.com/" target="_blank" title="cbc">CBC</a> - Collect from <a href="http://www.cbc.com/" title="CBC" target="_blank">CBC</a></p>
                </div>
            </div>
            <div class="col-sm-7 right-wrapper">
            	<div class="event-ticket-wrapper">
                    
                    <div class="event-tab">
                
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="../book/index.php">Home</a></li>
                    <li role="presentation" class="active"><a href="#buyTicket" aria-controls="buyTicket" role="tab" data-toggle="tab">Buy Tickets</a></li>
                    <li role="presentation"><a href="../food/food.php" >Food</a></li>
                   
                    
                    <li role="presentation"><a href="../book/contact.php" >CONTACT</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="buyTicket">
                    	<div class="row">
                        	<div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="50000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">
                                        	Platinum
                                            <span>Standing<br>
                                        	1 Ticket for 1 person</span>
                                        </div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[1]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                            </div>
                                            <p class="price">Rs.50000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="40000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Gold<span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[2]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.40000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="25000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Silver <span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[3]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.25000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="20000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Diamond<span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[4]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.20000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="18000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Ruby<span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[5]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.18000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="15000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Pearl<span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[6]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[6]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.15000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="10000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Emerald<span>
                                        Standing<br>
                                        1 Ticket for 1 person</div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[7]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[7]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[7]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.10000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="col-md-6">
                            	<div class="ticketBox" data-ticket-price="5000">
                                	<div class="inactiveStatus"></div>
                                    
                                    <div class="row">
 			                       	<div class="col-xs-6">
            							<div class="ticket-name">Plaza<span>
                                        Standing<br>
                                        1 Ticket for 1 person</span></div>
            						</div>
                                    
                                    <div class="col-xs-6">
            							<div class="ticket-price-count-box">
                                            <div class="ticket-control">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[8]">
                                                          <span class="glyphicon glyphicon-minus"></span>
                                                      </button>
                                                  </span>
                                                  <input type="text" name="quant[8]" class="form-control input-number" value="0" min="0" max="10">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[8]">
                                                          <span class="glyphicon glyphicon-plus"></span>
                                                      </button>
                                                  </span>
                                                </div>
                                                
                                            </div>
                                            <p class="price">Rs.5000</p>
                                        </div>
            						</div>
                                    </div>
                                	
                                    
                                    <div class="ticket-description">
                                    	<p><strong>Please refer Venue Plan:</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="venue">
                    	<h4> Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,<br> sed do eiusmod<br> Pune 411058</h4><br>
                       
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="termCondition">
           				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                    </div>
                  </div>
                
                </div>
                
                	<div class="cart">
                <div class="row">
                    <div class="col-xs-6">
                        <p> 
                        	<span class="ticket-count">0</span> Tickets <span class="divider"></span> Total: Rs. <span class="total-amount">0</span></p>
                    </div>
                    <div class="col-xs-6">
                    	<div class="text-right">
                        	<a class="btn disabled" data-toggle="modal" data-target="#ticket-details">PROCEED</a>
                        </div>
                    </div>
                </div>
                </div>
                       
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal right fade" id="ticket-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Share your contact Details</h4>
      </div>-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        	<img src="images/icons/cancel.png">
        </button>
        <h4 class="modal-title">Your Tickets</h4>
      </div>
      <div class="modal-body">
        
        <div class="cart-information">
            	<div class="ticket-type"></div>
          		<ul>
	                <li>Tickets: <span class="ticket-count"></span></li>
                    <li>Price: <span class="ticket-amount"></span></li>
                    <hr>
                    <li>Total: <span class="total-amount"></span></li>
    			</ul>
            </div>
            
            <div class="contactForm">	
                <h3>Share your contact Details</h3>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your name">
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your Email ID">
                  </div>
                  
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Enter your Mobile No.">
                  </div>
                  
        		  <a type="submit" class="btn" href="#" data-toggle="modal" data-target="#logoutModal">Proceed to Payment</a>
                </form>
            </div>
        
        
        
      </div>
    </div>
  </div>
</div>
        
    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h5 class="modal-title" id="exampleModalLabel">Successful ticket purchase</h5>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="booking.php">OK</a>
        </div>
      </div>
    </div>
  </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/allscript.js"></script>
  </body>
</html>