<!DOCTYPE html>

	<head>
		<title>Degree Calculator</title>
		<link rel="stylesheet" href="lib/css/bootstrap.min.css">
		<link href="lib/css/navbar-fixed-top.css" rel="stylesheet">
		<link href="lib/css/sticky-footer-navbar.css" rel="stylesheet">
		<link href="lib/css/styles.css" rel="stylesheet">

		<meta name="author" content="Tanner McKamey, Ryan Lemons, Griff Hagen, Nicholas Bentley">
	</head>
	
	<body>

		    <!-- Fixed navbar -->
		    <nav class="navbar navbar-default navbar-fixed-top">
		      <div class="container">
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">Degree Calculator</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="#">Home</a></li>
		            <li><a href="#about">About</a></li>
		            <li><a href="#contact">Contact</a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
		    </nav>

		    <div class="container">

		      <!-- Main component for a primary marketing message or call to action -->
		      <div class="jumbotron">
		        <h1>Degree Calculator</h1>
		        <p>Welcome to our website. Please pick which college you'd like to attend, and what agree you plan to receive below.</p>
				
				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Select Degree
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">Associate </a></li>
				    <li><a href="#">Bachelor</a></li>
				    <li><a href="#">Master</a></li>
				    <li><a href="#">Doctor</a></li>
				  </ul>
				</div>
				
				<div class="dropdown">
				  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Select College/University
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
				    <li><a href="#">Pellissippi State Community College</a></li>
				    <li><a href="#">Roane State Community College: Clinton</a></li>
				  </ul>
				</div>

				<div class="btn-group" role="group" aria-label="...">
				  <button type="button" class="btn btn-default">Submit</button>
				</div>
				
		      </div>

		    </div> <!-- /container -->
		
			<footer class="footer">
			      <div class="container">
			        <p class="text-muted">Place sticky footer content here.</p>
			      </div>
			    </footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>

	</body>
	
</html>
