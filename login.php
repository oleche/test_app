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

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
		<script src="js/consular.js"></script>
    <script src="js/todo.js"></script>
  </head>
  <body>
		<div class="container">
			<div class="row login_box">
			    <div class="col-md-12 col-xs-12" align="center">
		            <div class="line"><h3>12 : 30 AM</h3></div>
		            <div class="outter"><img src="img/logo-sm.png" width="150px"/></div>
		            <h1>Dashboard</h1>
			    </div>
		      
		        <div class="col-md-12 col-xs-12 login_control">

		                <div class="control">
		                    <div class="label">Email Address</div>
		                    <input type="text" class="form-control" value="admin@gmail.com"/>
		                </div>

		                <div class="control">
		                     <div class="label">Password</div>
		                    <input type="password" class="form-control" value="123456"/>
		                </div>
		                <div align="center">
		                     <button class="btn btn-orange">LOGIN</button>
		                </div>

		        </div>



		    </div>
		</div>
	</body>
</html>
