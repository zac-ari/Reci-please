<!DOCTYPE html>
<html lang="en">
<head>
<title>Recipe View</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Below is the bootstrap and Css-->

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
        padding: 10px;
        position: absolute;
        top: 16%;
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
        padding: 10px;
        position: absolute;
        top: 45%;
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

    .text-container2 p {
        color: #333333;
    }

    .text-container2a {
        background-color: rgba(193, 233, 201, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 17.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container2a:hover {
        background-color: rgba(193, 233, 201, 1);
    }

    .text-container2a p {
        color: #333333;
    }

    .text-container2b {
        background-color: rgba(193, 233, 201, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 17.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container2b:hover {
        background-color: rgba(193, 233, 201, 1);
    }

    .text-container2b p {
        color: #333333;
    }

    .text-container3 {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 45%;
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

    .text-container3 p {
        color: #333333;
    }

    .text-container3a {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 50%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container3a:hover {
        background-color: rgba(243, 202, 174, 1);
    }

    .text-container3a p {
        color: #333333;
    }

    .text-container3b {
        background-color: rgba(243, 202, 174, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 50%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container3b:hover {
        background-color: rgba(243, 202, 174, 1);
    }

    .text-container3b p {
        color: #333333;
    }

    .text-container4 {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 45%;
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

    .text-container4 p {
        color: #333333;
    }

    .text-container4a {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 67%;
        left: 82.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container4a:hover {
        background-color: rgba(196, 195, 219, 1);
    }

    .text-container4a p {
        color: #333333;
    }

    .text-container4b {
        background-color: rgba(196, 195, 219, 0.8);
        padding: 10px;
        position: absolute;
        top: 89%;
        left: 82.5%;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .text-container4b:hover {
        background-color: rgba(196, 195, 219, 1);
    }

    .text-container4b p {
        color: #333333;
    }
    
    img {
        position: absolute;
        width: 100%;
        height: 100%;
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

    .register-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 12%;
        left: 3.5%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .register-button:hover {
        background-color: rgba(157, 150, 147, 0.8);
    }

    .add-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 4%;
        right: -4%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .add-button:hover {
        background-color: rgba(197, 62, 8, 1);
    }

    .search-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 12%;
        right: -3%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .search-button:hover {
        background-color: rgba(197, 62, 8, 1);
    }

    a {
        text-decoration: none;
    }
    
</style>

<!-- JavaScript -->
<script>
  // Function to fetch data from the API and update the recipe content
  function fetchRecipes() {
    fetch("Put API call or XHTML ref etc")                                      //*************IMPORTANT READ HERE*******************/
    //var xmlhttp = new XMLHttpRequest();
    //xmlhttp.open("GET", "http://localhost:8000/api/Recipe",true);             //Is GET the API name and can we pass data as needed?
    //xmlhttp.send();
      .then(response => response.json())
      .then(data => {
        // Update the recipe containers with the fetched data
        const containers = document.querySelectorAll(".recipe-container");
        containers.forEach((container, index) => {
          const recipe = data[index];
          container.querySelector("h4").textContent = recipe.title;
          container.querySelector("p").textContent = recipe.description;
          container.querySelector("a").href = "DummyDataBase/" + recipe.id;
        });
      })
      .catch(error => console.log(error));
  }

  // Call the fetchRecipes function when the page loads
  window.addEventListener("load", fetchRecipes);
</script>
</head>
<body>

<div class="container-fluid p-0">
    
    <!-- Background Image -->
    <img src="Images/pastafull.jpg">
    
    <!-- Button to Signout -->
    <a href="Homepage" class="login-button">Sign out</a>

    <!-- Button to add your own recipe to the database -->
    <a href="AddRecipe" class="add-button">Add your own recipe</a>

    <!-- Button to search the database -->
    <a href="Search" class="search-button">Search all recipes</a>
    
    <!-- Welcome and username pulled from the database -->
    <div class="text-container1">   
        <h1 class="display-4 text-center">Welcome <span id="username"></span></h1>
        <hr class="my-4">
        <p class="lead text-center">Welcome to your homepage, from here you can either
            add a recipe to your database, or you can search recipes 
            that you have previously added! Hope you enjoy using this product, muchos luvos - Zac and Ando</p>
    </div>
    
    <!-- Recipe containers for dynamically updating the content -->
    <div class="recipe-container text-container2">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container2a">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container2b">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>
    
    <div class="recipe-container text-container3">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container3a">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container3b">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>
    
    <div class="recipe-container text-container4">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container4a">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

    <div class="recipe-container text-container4b">
        <a href="#" class="recipe-link">
            <h4 class="display-4 text-center"></h4>
            <p class="lead text-center"></p>
        </a>
    </div>

</div>

</body>
</html>