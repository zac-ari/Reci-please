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
            <form action="UserHomepage" method="post">
              <div class="form-group">
                <label for="title">Title:<br></label>
                <input type="text" class="form-control" id="title" name="title" required>
                <hr class="my-4">
                <label for="summary">Summary:<br></label>
                <textarea class="form-control" id="summary" name="summary" rows="1" cols="80" required></textarea>
                <hr class="my-4">
                <label for="ingredients">Ingredients:<br></label>
                <textarea class="form-control" id="ingredients" name="ingredients" rows="4" cols="80" required></textarea>
                <hr class="my-4">
                <label for="method">Method:<br></label>
                <textarea class="form-control" id="method" name="method" rows="6" cols="135" required></textarea>
              </div>
              <hr class="my-4">
              <button type="submit" class="btn btn-primary">Add Recipe</button>
            </form>
          </div>  
    </div>

</body>
</html>