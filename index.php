<html><head>
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
		        <p>Welcome to our website. Please pick which college you'd like to attend, and what degree you plan to receive below.</p>
				
				<div class="dropdown">
				  <button class="degree btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    Select Degree
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    <li><a href="#">Associate</a></li>
				    <li><a href="#">Bachelor</a></li>
				    <li><a href="#">Master</a></li>
				    <li><a href="#">Doctor</a></li>
				  </ul>
				</div>
				
				<div class="dropdown">
				  <button class="college btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Select College/University
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
				<?php
				$servername = "localhost:3306";
				$username = "38330ff9f647";
				$password = "ec882b9d859eddd1";
				$dbname = "codecrusaders";
				$conn = new mysqli($servername, $username, $password,$dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				$sql = 'SELECT * from college;';
				
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					$results = 0;
					while($row = mysqli_fetch_assoc($result)) {
						echo('<li><a href = "#">' . $row["name"] . '</li>');
					}
				}
				
				?>
				  </ul>
				</div>

				<div class="btn-group submit" role="group" aria-label="...">
				  <button type="button" class="btn btn-default">Submit</button>
				</div>
				<div id = "Results" style = "padding-top: 15px; padding-bottom: 5px;"></div>
				
		      </div>

		    </div> <!-- /container -->
		
			<footer class="footer">
			      <div class="container">
			        <p class="text-muted">© Code Crusaders 2015</p>
			      </div>
			    </footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>
		<script src="lib/js/dropdowns-enhancement.js"></script>
		<script>
		var SelectedCollege = null;
		var SelectedDegree = null;
		$('.dropdown-menu li a').click(function(){
			    var Clicked = $(this).text();
			    if(!(Clicked == "Associate" || Clicked == "Bachelor" || Clicked == "Master" || Clicked == "Doctor")){
			    $(".college.btn:first-child").html($(this).text() + ' <span class="caret"></span>');
			    SelectedCollege = Clicked;
			}else{
			    $(".degree.btn:first-child").html($(this).text() + ' <span class="caret"></span>');
				SelectedDegree = Clicked;
			}
		});

		$( ".submit" ).click(function() {
			  if (SelectedCollege != null && SelectedDegree != null){
			  	if(SelectedDegree == "Associate"){
			  		SelectedDegree = "Associates";
			  	}
			  	if(SelectedDegree == "Bachelor"){
			  		SelectedDegree = "Bachelors";
			  	}
			  	if(SelectedDegree == "Master"){
			  		SelectedDegree = "Masters";
			  	}
			  	if(SelectedDegree == "Doctor"){
			  		SelectedDegree = "Doctoral";
			  	}
			        var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", 'Results.php?degree=' + SelectedDegree + '&college=' + SelectedCollege, false);
				xmlhttp.send();

				if(xmlhttp.responseText == "0 Results"){
				document.getElementById("Results").innerHTML = (xmlhttp.responseText);
				}else{
				    document.getElementById("Results").innerHTML = ("$" + xmlhttp.responseText)
				    }
				}else{
				if (SelectedCollege == null && SelectedDegree != null){
				document.getElementById("Results").innerHTML = '<span style = "color: red;">Please select a college.</span>';
				}
				if (SelectedDegree == null && SelectedCollege != null){
				document.getElementById("Results").innerHTML = '<span style = "color: red;">Please select a degree.</span>';
				}
				if (SelectedDegree == null && SelectedCollege == null){
				document.getElementById("Results").innerHTML = '<span style = "color: red;">Please select a college and degree.</span>';
				}
			}

		  		});
		</script>

	
	

</body></html>