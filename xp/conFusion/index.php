<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Ristorante Con Fusion</title>
	
	<!--Bootstrap-->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body> 
    <?php include ("includes/header.php"); ?>
    <!-- Modal code
    ============================================-->
    <!-- Connection -->
    <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login </h4>
            </div>
            <div class="modal-body">
                <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="email">Email</label>
                            <input type="email" class="form-control" id="email"
                                   name="email" placeholder="Email">                    
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="pass">Password</label>
                            <input type="password" class="form-control" id="pass"
                                   name="pass" placeholder="Password">                    
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="checkbox-inline">
                                <input type="checkbox" value="remember-me">
                                <span style="color:white;"> Remember Me</span>
                            </label>
                                
                            </div>                
                        </div>
                        <div class="form-group">
                        
                            <button type="submit" class="btn btn-info">Sign In</button>
                            <button type="button" class="btn btn-default btn-sm"
                       data-dismiss="modal">Cancel</button>
                        
                        </div>
                        </form>

            </div>
        </div>
        </div>
    </div>
    
    <!-- Reservation -->
    <div id="reservationModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Reservation Table </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-2">Number of Guests</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                            <input type="radio" class="form-control" id="1" name="guests" value="1">1</label>
                            <label class="radio-inline"><input type="radio" class="form-control" id="2" name="guests" value="2">
                            2</label>
                            <label class="radio-inline"><input type="radio" class="form-control" id="3" name="guests" value="3">
                            3</label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="4" name="guests" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="5" name="guests" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="6" name="guests" value="6">6
                            </label>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="date" class="col-sm-2">Section</label>
                        <div class="col-sm-10">
                            <div class="col-sm-5 btn btn-success">
                            Non smoking</div>
                           <div class="col-sm-5 btn btn-danger">Smoking</div>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="date" class="col-sm-2">Date and Time</label>
                        <div class="col-sm-10">
                            <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date"><span class="glyphicon glyphicon-calendar form-control-feedback">
                            </span></div>
                           <div class="col-sm-5"> <input type="time" class="form-control col-sm-5" id="time" name="date" placeholder="Time"><span class="glyphicon glyphicon-time form-control-feedback">
                            </span></div>
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-offset-2">
                        
                        <button type="submit" class="btn btn-primary">Reserve</button>
                        <button type="button" class="btn btn-default btn-sm"
                       data-dismiss="modal">Cancel</button>
                        
                    </div>
                </form>
                
                
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Warning::</strong> Please <a href="tel:+85212345678" style="color:black">call</a> us to reserve more than six guests.
                </div>
            
                </div>
            </div>
        </div>
    </div>
    
    <header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best
cuisines, and create a unique fusion experience. Our lipsmacking 
creations will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:40px;"></p>
                    <p> <a type="button" class="btn btn-warning" id ="#reserve">Reserve Table</a></p>
                    <!--<p> <a type="button" class="btn btn-warning" href="#reserve"  data-toggle="modal" data-target="#reservationModal">Reserve Table</a></p>-->
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        
        <!-- Carousel
        ========================================-->
        <div class="row row-content">
           <div class="col-xs-12">
            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                
                 
                
                 <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="img-responsive"
                         src="img/uthappizza.png" alt="Uthappizza">
                        <div class="carousel-caption">
                        <h2>Uthappizza  <span class="label label-danger">Hot</span> <span class="badge">$4.99</span></h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive"
                         src="img/buffet.png" alt="buffet">
                        <div class="carousel-caption">
                        <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                         
                <p>Featuring mouthwatering combinations with a choice of
 five different salads, six enticing appetizers, six main entrees and 
five choicest desserts. Free flowing bubbly and soft drinks. All for 
just $19.99 per person </p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                </div></div>
                        
                    <div class="item">
                         <img class="img-responsive"
                         src="img/alberto.png" alt="Alberto Somayya">
                        <div class="carousel-caption">
                         <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                        </div>
                    </div>
                    
                    <!-- Controls -->
                <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                    
                <div class="btn-group" id="carouselButtons">
                    <button class="btn btn-danger btn-xs" id="carousel-pause">
                	    <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
                    </button>
                    <button class="btn btn-danger btn-xs" id="carousel-play">
                	    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
                    </button>
                </div>
                </div>

            </div>

            </div>
       </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align="center">Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/uthappizza.png" alt="Uthappizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Uthappizza<span class="label label-danger">Hot</span> <span class="badge">$4.99</span></h2>
                        <p>A unique combination of Indian Uthappam (pancake) and
                          Italian pizza, topped with Cerignola olives, ripe vine
                          cherry tomatoes, Vidalia onion, Guntur chillies and
                          Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align="center">This Month's Promotions</h3>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="media">
                    <div class="pull-right media-middle" style="padding-top:30px;">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/buffet.png" alt="buffet">
                        </a>
                    </div>
                    <div class="media-body">
                <h2>Weekend Grand Buffet<span class="label label-danger">New</span></h2>
                <p>Featuring mouthwatering combinations with a choice of
 five different salads, six enticing appetizers, six main entrees and 
five choicest desserts. Free flowing bubbly and soft drinks. All for 
just $19.99 per person </p>
                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                </div></div>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align="center">Meet our Culinary Specialists</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="img/alberto.png" alt="Alberto Somayya">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide
                         International experience having worked closely with
                         whos-who in the culinary world, he specializes in
                          creating mouthwatering Indo-Italian fusion experiences.
                         </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
       <!-- <div class="row row-content">
            
            <div class="col-xs-12 col-sm-3" id="reserve" style="padding:40px;"><h3>Reserve a table</h3></div>
            <div  class="col-xs-12 col-sm-9">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label  class="col-sm-2">Number of Guests</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                            <input type="radio" class="form-control" id="1" name="guests" value="1">1</label>
                            <label class="radio-inline"><input type="radio" class="form-control" id="2" name="guests" value="2">
                            2</label>
                            <label class="radio-inline"><input type="radio" class="form-control" id="3" name="guests" value="3">
                            3</label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="4" name="guests" value="4">4
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="5" name="guests" value="5">5
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="form-control" id="6" name="guests" value="6">6
                            </label>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="date" class="col-sm-2">Date and Time</label>
                        <div class="col-sm-10">
                            <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date"><span class="glyphicon glyphicon-calendar form-control-feedback">
                            </span></div>
                           <div class="col-sm-5"> <input type="time" class="form-control col-sm-5" id="time" name="date" placeholder="Time"><span class="glyphicon glyphicon-time form-control-feedback">
                            </span></div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-2">
                    <div class="form-group">
                        
                            <button type="submit" class="btn btn-primary">Reserve</button>
                        
                    </div></div>
                </form>
            </div>
            <div  class="col-xs-12 col-sm-9 col-sm-offset-3">
                <div class="alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Warning::</strong> Please <a href="tel:+85212345678" style="color:black">call</a> us to reserve more than six guests.
                </div>
            </div>
        </div> -->
    </div>

    <?php include ("includes/footer.php"); ?>
	<!--jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $("#mycarousel").carousel( { interval: 2000 } );
                          $("#carousel-pause").click(function(){
                $("#mycarousel").carousel('pause');
            });
                        $("#carousel-play").click(function(){
                $("#mycarousel").carousel('cycle');
            });
            
           $("#reserve").modal ("toggle");
            
            $("#reserve").click(function(){
                
                $("#reservationModal").modal("show");
            });
            
             $("#reserve").click(function(){
                
                $("#reservationModal").modal("hide");
            });
        });
    </script>
    
    

</body>
</html>