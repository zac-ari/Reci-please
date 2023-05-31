<!DOCTYPE html>
<html lang="en">
<head>
<title>Dummy</title>
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

    .add-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 4%;
        right: -2%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #000000;
    }

    .add-button:hover {
        background-color: rgba(197, 62, 8, 1);
    }

    a {
        text-decoration: none;
    }
    </style>
   
    <!-- JavaScript -->
    <script>
        // Fetch recipe data from the API
        fetch("Put API call or XHTML ref etc")                                      //*************IMPORTANT READ HERE*******************/
        //xmlhttp.open("GET", "http://localhost:8000/api/Recipe",true);
        //xmlhttp.send();
            .then(response => response.json())
            .then(data => {
                // Get the recipe container elements
                const recipeContainers = document.querySelectorAll(".recipe-container");

                // Iterate over the recipe containers and populate them with data
                recipeContainers.forEach((container, index) => {
                    const recipe = data[index];

                    // Update the recipe title
                    const titleElement = container.querySelector(".recipe-title");
                    titleElement.textContent = recipe.title;

                    // Update the recipe method
                    const methodElement = container.querySelector(".recipe-method");
                    methodElement.textContent = recipe.method;

                    // Update the review method
                    const reviewElement = container.querySelector(".recipe-review");
                    reviewElement.textContent = recipe.review;

                    // Set the recipe link href
                    const recipeLink = container.querySelector(".recipe-link");
                    recipeLink.href = "DummyDataBase";
                });
            })
            .catch(error => {
                console.error("Error fetching recipe data:", error);
            });
    </script>
</head>

<body>

    <div class="container-fluid p-0">
        
        <!--Background image-->
        <img src="Images/pastafull.jpg">
        
        <!--Button to return to user home page-->
        <a href="UserHomepage" class="logout-button">Home</a>  
        
        <!--Button to add recipe to user page (via slot selection page) will only be present if you navigate from selecting a recipe to add (i.e not if you select from your menu)-->
        <a href="RecipeSelection" class="add-button">Add to page</a>
        
        <!--Shows the display as a template but needs SQL database commands to provide inputs-->
        <div class="text-container1">
            <h1 class="text-center">Recipe View</h1>
            <hr class="my-4">
            <p class="lead text-center"><b class="recipe-title"></b></p>
            <hr class="my-4">
            <p class="lead text-center"><b class="recipe-method"></b></p>
            <div class="text-center">
            <p class="lead text-center"><b class="recipe-review"></b></p>
            <hr class="my-4">
            
            <!--Add a review section present if you select a recipe from your user homepage and needs action on submit to update SQL data base-->
            <h3>Add a Review</h3>
            <div class="rating">
                <label for="star1" title="1 star">1&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star2" title="2 stars">2&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star3" title="3 stars">3&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star4" title="4 stars">4&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star5" title="5 stars">5&#9733;</label>
                <input type="radio" id="star5" name="rating" value="5" />
            </div>
            <form>
                <div class="form-group">
                <label for="review">Write a review:</label>
                <textarea class="form-control" id="review" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
              
            </form>
            </div>
        
    </div>

</body>
</html>