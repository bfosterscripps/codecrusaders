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
			<button data-toggle="dropdown" class="btn btn-default dropdown-toggle degree">Associate<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li>
						<input type="radio" id="asso_id" name="degree" value="1" checked="">
						<label for="asso_id">Associate</label>
					</li>
					<li>
						<input type="radio" id="bach_id" name="degree" value="2">
				  		<label for="bach_id">Bachelor</label>
				 	</li>
					<li>
						<input type="radio" id="mast_id" name="degree" value="3">
				  		<label for="mast_id">Master</label>
				 	</li>
					<li>
						<input type="radio" id="doct_id" name="degree" value="4">
				  		<label for="doct_id">Doctor</label>
				 	</li>
				</ul>
		</div>
		
		<p>Select a College:</p>
		<div class="btn-group">
			<button data-toggle="dropdown" class="btn btn-default dropdown-toggle college">Pellissippi State Community College<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li>
						<input type="radio" id="pell_id" name="college" value="1" checked="">
						<label for="pell_id">Pellissippi State Community College</label>
					</li>
					<li>
						<input type="radio" id="roane_id" name="college" value="2">
				  		<label for="roane_id">Roane State Community College: Clinton</label>
				 	</li>
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

			  var degree = document.getElementsByClassName("btn btn-default dropdown-toggle degree")[0];
			  var college = document.getElementsByClassName("btn btn-default dropdown-toggle college")[0];
  				alert("You've chosen the degree: " + degree.firstChild.textContent + "\n at: " + college.firstChild.textContent + ".");  

		});
		</script>
	</body>
</html>
