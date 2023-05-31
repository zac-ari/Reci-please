<!DOCTYPE html>
<html lang="en">
<head>
<title>Reset Password</title>
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
         
        <!--Button to navigate back to homepage (login not user)--> 
        <a href="Homepage" class="logout-button">Back</a>   
		 
        <!--Request Password reset--> 
        <div class="text-container1"> 
            <h1 class="text-center">Password Reset</h1> 
            <hr class="my-4"> 
            <form id="reset-form" method="post"> 
        	    <div class="form-group"> 
                    <p>Please provide registered e-mail to reset password</p> 
            	    <label for="email">Email:</label> 
            	    <input type="email" class="form-control" id="email" name="email" required> 
			    </div> 
                <hr class="my-4"> 
                <button type="submit" class="btn btn-primary">Reset</button> 
                <hr class="my-4"> 
		    </form>	 
        </div> 
 
        <!-- Pop-up message container -->
        <div id="popup-container"></div>
    </div>    
        
    <script>
        const resetForm = document.getElementById('reset-form');
        const popupContainer = document.getElementById('popup-container');

        resetForm.addEventListener('submit', (event) => {
            event.preventDefault(); //Prevent the form from submitting
            const email = document.getElementById('email').value; //Get the email from the input field

            //Show the message
            const message = `${email} has been sent an email for password recovery`;
            popupContainer.innerText = message;
            popupContainer.classList.add('popup-show');

            // Hide the message after X seconds (currently 3)
            setTimeout(() => {
                popupContainer.classList.remove('popup-show');
            }, 3000);
        });
    </script>
    
    <!-- Styling for the pop up message -->
    <style>
        #popup-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 10px 20px;
            border: 2px solid #000000;
            border-radius: 10px;
            font-size: 1.2rem;
            visibility: hidden;
            opacity: 0;
        }

        #popup-container.popup-show {
            visibility: visible;
            opacity: 1;
        }
    </style>

</body>


</html>