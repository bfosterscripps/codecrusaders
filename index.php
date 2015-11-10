<!DOCTYPE html>
	<head>
		<title>Wireframe: Test</title>
		<link rel="stylesheet" href="lib/css/bootstrap.min.css">
		<link rel="stylesheet" href="lib/css/dropdowns-enhancement.css">
	</head>
	<body>
		<div class="page-header" >
			<h1><small>Test</small></h1>
		</div>

		

		
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
		<div class="btn-group">
			<button data-toggle="dropdown" class="btn btn-default dropdown-toggle college">Pellissippi<span class="caret"></span></button>
				<ul class="dropdown-menu">
				<?php
				$servername = "localhost:8889";
				$username = "root";
				$password = "root";
				$dbname = "college";

				$conn = new mysqli($servername, $username, $password,$dbname);

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				$sql = 'SELECT * from college;';
				
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					$results = 0;
					while($row = mysqli_fetch_assoc($result)) {
						echo('<li>
						<input type="radio" id = "' . $row["name"] . $row["id"] .'" name="college" value="' . $row["id"] . '" checked="">
						<label for="' . $row["name"] . $row["id"] . '" >' . $row["name"] . '</label>
						</li>');
					}
				}
				
				?>
				
				</ul>
		</div>
		
		<div class="btn-group" role="group" aria-label="...">
			<button type="button" class="btn btn-default submit">Submit</button>
		</div>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="lib/js/bootstrap.min.js"></script>
		<script src="lib/js/dropdowns-enhancement.js"></script>
		<script>
		$( ".submit" ).click(function() {

			  var degree = document.getElementsByClassName("btn btn-default dropdown-toggle degree")[0].firstChild.textContent;
			  var college = document.getElementsByClassName("btn btn-default dropdown-toggle college")[0].firstChild.textContent;
  			window.location = 'Results.php?degree=' + degree + '&college=' + college;
  		});
		</script>
	</body>
</html>
