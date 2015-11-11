<!DOCTYPE html>

	<head>
		<title>Project name</title>
		<link rel="stylesheet" href="lib/css/bootstrap.min.css">
		<link href="lib/css/navbar-fixed-top.css" rel="stylesheet">
		<link href="lib/css/sticky-footer-navbar.css" rel="stylesheet">
		<meta name="author" content="Tanner McKamey, Ryan Lemons, Griff Hagen, Nicholas Bentley">
	</head>
	
	<body>


		<p>Select a Degree:</p>
		<div class="btn-group">
			<button data-toggle="dropdown" class="btn btn-default dropdown-toggle degree">Associates<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li>
						<input type="radio" id="asso_id" name="degree" value="1" checked="">
						<label for="asso_id">Associates</label>
					</li>
					<li>
						<input type="radio" id="bach_id" name="degree" value="2">
				  		<label for="bach_id">Bachelors</label>
				 	</li>
					<li>
						<input type="radio" id="mast_id" name="degree" value="3">
				  		<label for="mast_id">Masters</label>
				 	</li>
					<li>
						<input type="radio" id="doct_id" name="degree" value="4">
				  		<label for="doct_id">Doctoral</label>
				 	</li>
				</ul>
		</div>
		
		<p>Select a College:</p>
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle college" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Dropdown
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
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
		
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-default submit">Submit</button>
		</div>
		<div id = "Results">
			
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>
		<script src="lib/js/dropdowns-enhancement.js"></script>
		<script>
		$( ".submit" ).click(function() {

			  var degree = document.getElementsByClassName("btn btn-default dropdown-toggle degree")[0].firstChild.textContent;
			  var college = document.getElementsByClassName("btn btn-default dropdown-toggle college")[0].firstChild.textContent;
			        var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", 'Results.php?degree=' + degree + '&college=' + college, false);
				xmlhttp.send();
				document.getElementById("Results").innerHTML = xmlhttp.responseText;
		  		});
		</script>
		
	</body>
	
</html>
