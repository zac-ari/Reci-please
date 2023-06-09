<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Recipe</title>
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
        width: 80%;
        height: 80%;
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
    
    <!--Background image-->
    <img src="Images/pastafull.jpg">
    
    <!--Button to return to user home page-->
    <a href="UserHomepage" class="logout-button">Home</a>  
    
    <!--User can add recipe action needs to load to database-->
    <div class="text-container1">
        <h1 class="text-center">Add Your Recipe</h1>
        <hr class="my-4">
        <form id="recipeForm" action="#" method="post">
        <div class="form-group">
            <input type="hidden" name="RecipeID">
            <label for="Title">Title:<br></label>
            <input type="text" class="form-control" id="Title" name="Title" required>
            <hr class="my-4">
            <label for="Description">Description:<br></label>
            <textarea class="form-control" id="Description" name="Description" rows="1" cols="80" required></textarea>
            <hr class="my-4">
            <label for="Ingredients">Ingredients:<br></label>
            <textarea class="form-control" id="Ingredients" name="Ingredients" rows="4" cols="80" required></textarea>
            <hr class="my-4">
            <label for="Method">Method:<br></label>
            <textarea class="form-control" id="Method" name="Method" rows="6" cols="135" required></textarea>
            <hr class="my-4">
          </div>
          <button type="submit" class="btn btn-primary">Add Recipe</button>
        </form>
      </div>  
</div>

<script>
    document.getElementById("recipeForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        // Submit the form data asynchronously using fetch API
        fetch("http://localhost:8000/api/Recipe/addrecipe", {
            method: this.method,
            body: new FormData(this)
        })
        .then(response => {
            if (response.ok) {
                // Display success message
                alert("Recipe submitted successfully");
                // Redirect to UserHomepageJS
                window.location.href = "http://localhost:8000/UserHomepageJS?userID=20";
            } else {
                // Display error message
                alert("Failed to submit recipe");
            }
        })
        .catch(error => {
            // Display error message
            alert("Failed to submit recipe");
            console.error(error);
        });
    });
</script>

</body>
</html>