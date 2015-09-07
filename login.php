<?php

?>
<!doctype html>
<html ng-app="todoApp">
  <head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" media="screen" href="css/login.css">
	  <!-- Custom Fonts -->
	  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

    <script src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/consular.js"></script>
    <script src="js/login.js"></script>
  </head>
  <body onload="startTime()">
		<div class="container">
			<div class="row login_box">
			    <div class="col-md-12 col-xs-12" align="center">
	          <div class="line"><h3 id="clock">12 : 30 AM</h3></div>
	          <div class="outter"><img src="img/logo-sm.png" class="img-responsive"/></div>
	          <h1>Dashboard</h1>
			    </div>

		        <div class="col-md-12 col-xs-12 login_control">

	            <div class="control">
	                <div class="label">Email Address</div>
	                <input type="text" id="email" class="form-control" value=""/>
	            </div>

	            <div class="control">
	                 <div class="label">Password</div>
	                <input type="password" id="password" class="form-control" value=""/>
	            </div>
	            <div align="center">
	                 <button class="btn btn-orange">LOGIN</button>
	            </div>

		        </div>



		    </div>
		</div>
	</body>
</html>
