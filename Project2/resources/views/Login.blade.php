<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
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
		width: 25%;
		height: 60%;
        padding: 1% 1%;
		text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text-container1 h1,
    .text-container1 p {
        color: #000000;
    }

    img {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0.6;
    }

    .logout-button {
        background-color: rgba(197, 62, 8, 0.8);
		width: 5%;
		text-align: center;
        padding: 1% 1%;
        position: absolute;
        top: 5%;
        left: 5%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .logout-button:hover {
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
        <img src="Images/pastafull.jpg">
        
		<!--Button to go back to homepage (login not user)-->
        <a href="Homepage" class="logout-button">Back</a>  

		<!--Enter details to login, action on login button required to confirm there is a users that matches in database-->
        <div class="text-container1">
            <h1 class="text-center">Log In</h1>
            <hr class="my-4">
            <form id="loginForm" action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <hr class="my-4">
            </form>
        </div>
        
        <script>
            document.getElementById("loginForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Get the entered email and password
                var Email = document.getElementById("email").value;
                var Password = document.getElementById("password").value;

                // Make an API request to check the credentials
                fetch("http://localhost:8000/api/User/login?", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        Email: Email,
                        Password: Password
                    })
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the API
                    if (data.success) {
                        // Login successful, update the userID
                        var userID = data.UserID;
                        console.log("Login successful");
                        console.log("User ID:", userID);
                        // Replace the following line with your desired action
                        window.location.href = "http://localhost:8000/UserHomepage?userID=" + userID;
                    } else {
                        // Login failed, display an error message
                        console.log("Login failed: " + data.error);
                        // Replace the following line with your desired error handling
                        alert("Login failed: here" + data.error);
                    }
                })
                .catch(error => {
                    // Handle any errors that occurred during the API request
                    console.log("Error: " + error);
                    // Replace the following line with your desired error handling
                    alert("An error occurred while processing the request");
                });
            });
        </script>


		<!--Button to go to registration-->
		<form action="Register" method="post">
            
			<div class="form-group">
			<p class="lead text-center">Not a member? Register now.</p>
			<button type="submit" class="btb btb-primary">Register</button>
			<hr class="my-4">
		</form>
		
		<!--Button for password reset-->
		<form action="PasswordReset" method="post">
            
			<div class="form-group">
			<p class="lead text-center">Forgot Password?</p>
			<button type="submit" class="btb btb-primary">Reset Password</button>
		</form>
		</div>   
    </div>
</body>
</html>