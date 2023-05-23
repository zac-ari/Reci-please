	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>Recipe View</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Below is the bootstrap and Css used in labs it may need refinement/not sure what is needed -->

	<!--Bootstrap CSS-->
	<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1
	T" crossorigin="anonymous">

	<!--Custom CSS-->
	<style>
		body {
			margin: 0;
			padding: 0;
		}

		.text-container1 {
			background-color: rgba(255, 255, 255, 0.6);
			padding: 30px;
			position: absolute;
			top: 25%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		.text-container1 h1,
		.text-container1 p {
			color: #000000;
		}

		.text-container2 {
			background-color: rgba(193, 233, 201, 0.8);
			padding: 30px;
			position: absolute;
			top: 75%;
			left: 17.5%;
			width: 25%;
			transform: translate(-50%, -50%);
			border-radius: 20px;
			cursor: pointer;
			transition: all 0.3s ease;
			text-align: center;
		}

		.text-container2:hover {
			background-color: rgba(193, 233, 201, 1);
		}

		.text-container2 h1,
		.text-container2 p {
			color: #333333;
		}

		.text-container3 {
			background-color: rgba(243, 202, 174, 0.8);
			padding: 30px;
			position: absolute;
			top: 75%;
			left: 50%;
			width: 25%;
			transform: translate(-50%, -50%);
			border-radius: 20px;
			cursor: pointer;
			transition: all 0.3s ease;
			text-align: center;
		}

		.text-container3:hover {
			background-color: rgba(243, 202, 174, 1);
		}

		.text-container3 h1,
		.text-container3 p {
			color: #333333;
		}

		.text-container4 {
			background-color: rgba(196, 195, 219, 0.8);
			padding: 30px;
			position: absolute;
			top: 75%;
			left: 82.5%;
			width: 25%;
			transform: translate(-50%, -50%);
			border-radius: 20px;
			cursor: pointer;
			transition: all 0.3s ease;
			text-align: center;
		}

		.text-container4:hover {
			background-color: rgba(196, 195, 219, 1);
		}

		.text-container4 h1,
		.text-container4 p {
			color: #333333;
		}

		img {
			position: absolute;
			width: 100%;
			height: 50%;
			opacity: 0.6;
		}

		.login-button {
			background-color: rgba(197, 62, 8, 0.8);
			padding: 10px 20px;
			position: absolute;
			top: 4%;
			left: 3.5%;
			transform: translate(-50%, -50%);
			border-radius: 20px;
			cursor: pointer;
			transition: all 0.3s ease;
			color: #000000;
		}

		.login-button:hover {
			background-color: rgba(197, 62, 8, 1);
		}

		a {
			text-decoration: none;
		}
		
	</style>
	</head>
	<body>

		<div class="container-fluid p-0">
			
			<!--Background Image-->
			<img src="pasta.gif">
			
			<!--Button to Sign in (also leads to register if youe not a member)-->
			<a href="Login.html" class="login-button">Sign in</a>
			
			<!--Welcome Display-->
			<div class="text-container1">
				<a href="User Homepage.html"><!--Needs to be removed only there as a way to bypass the login-->
				<h1 class="display-4 text-center">Welcome to Reci-Please</h1>
				<hr class="my-4">
				<p class="lead text-center">A place you can store and share you family recipes</p>
			</div>
			

			<!--Sample recipes, requires pull from database-->
			<div class="text-container2">
				<a href="Login.html">
				<h1 class="display-4 text-center">Traditional Carbonara</h1>
				<hr class="my-4">
				<p class="lead text-center">Made the authentic Italian way with only pasta, pecorino cheese, black pepper and guan charlies</p>
			</div>
			
			<div class="text-container3">
				<a href="Login.html">
				<h1 class="display-4 text-center">Japanese Curry</h1>
				<hr class="my-4">
				<p class="lead text-center">Rich and creamy Japanese curry with a modern twist</p>
			</div>
			
			<div class="text-container4">
				<a href="Login.html">
				<h1 class="display-4 text-center">Apricot Chicken</h1>
				<hr class="my-4">
				<p class="lead text-center">A family delight, home cooked recipe from my childhood</p>
			</div>
		</div>

	</body>
	</html>