<?php

?>
<!doctype html>
<html ng-app="todoApp">
  <head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" media="screen" href="css/login.css">
	  <!-- Custom Fonts -->
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="js/todo.js"></script>
    <link rel="stylesheet" href="todo.css">
  </head>
  <body>
		<div class="col-sm-8 col-sm-push-4">
		    <h2>{{ appInfo.name }}</h2>
		    <p>Copyright &copy; {{ appInfo.copyrightYears }} {{ appInfo.copyrightHolder }}</p>
		    <p>Version {{ appInfo.version }}</p>
		    <p class="text-danger">Unauthorized access to this system is prohibited.</p>
		</div>
		<div class="col-sm-4 col-sm-pull-8">
		    <form name="loginForm" novalidate>
		        <div class="form-group">
		            <label for="username">Username</label>
		            <input ng-model="username" type="text" id="username" name="username" class="form-control" placeholder="Enter username" autofocus="true" autocomplete="off" required>
		        </div>
		        <div class="form-group">
		            <label for="password">Password</label>
		            <input ng-model="password" type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
		        </div>
		        <div class="form-group">
		            <button class="btn btn-primary">Log In</button>
		        </div>
		    </form>
		</div>
	</body>
</html>
