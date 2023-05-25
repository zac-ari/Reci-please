<!--This is the same as recipe selection except atttempt to make one box with inline colour chages, on hover dosent work so has been removed everything else works (reduction of 25% of code)-->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Test Recipe Selection</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Below is the bootstrap and Css used in labs it may need refinement/not sure what is needed -->

<!--Bootstrap CSS-->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1
T" crossorigin="anonymous">

<!--Custom CSS containers may be able to be combines with colour and location specifications changed in line-->
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .Title {
        background-color: rgba(255, 255, 255, 0.6);
        padding: 10px;
        position: absolute;
        top: 16%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .Title h1,
    .Title p {
        color: #000000;
    }

    .Selection {
        padding: 8px;
        width: 25%;
        transform: translate(-50%, -50%);
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .Selection p {
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

    .search-button {
        background-color: rgba(197, 62, 8, 0.8);
        padding: 10px 20px;
        position: absolute;
        top: 4%;
        right: -5%;
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
</head>
<body>

    <div class="container-fluid p-0">
        <!--Background image-->
        <img src="pastafull.jpg">
        
        <!--Button to return home-->
        <a href="UserHomepage.html" class="login-button">Home</a>

        <!--Button to return to search page-->
        <a href="" class="search-button">Reaturn to Search</a>
        
        <!--Information to the user and instructions an action needs to be added to show the recipe selected not just the word "recipe selected"-->
        <div class="Title">   
            <h1 class="display-4 text-center">Reci-Please Store Recipe</h1>
            <hr class="my-4">
            <p class="lead text-center">Please seclect the location to store "recepe selected" and click confirm</p>
        </div>
        
        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(193, 233, 201, 0.8); position: absolute; top: 45%; left: 17.5%;">
            <form action="UserHomepage.html">
              <p class="display-4 text-center"><b>Add to Slot 1</b></p>
              <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
              <p class="lead text-center">Currently Traditional Cabonara</p>
              <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(193, 233, 201, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(193, 233, 201, 0.8); position: absolute; top: 67%; left: 17.5%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 2</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Traditional Cabonara</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(193, 233, 201, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(193, 233, 201, 0.8); position: absolute; top: 89%; left: 17.5%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 3</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Traditional Cabonara</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(193, 233, 201, 1);
                opacity: 1;
            }
        </style>
        
        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(243, 202, 174, 0.8); position: absolute; top: 45%; left: 50%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 4</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Japanese Curry</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(243, 202, 174, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(243, 202, 174, 0.8); position: absolute; top: 67%; left: 50%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 5</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Japanese Curry</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(243, 202, 174, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(243, 202, 174, 0.8); position: absolute; top: 89%; left: 50%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 6</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Empty</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(243, 202, 174, 1);
                opacity: 1;
            }
        </style>
        
        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(196, 195, 219, 0.8); position: absolute; top: 45%; left: 82.5%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 7</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Aproicot Chicken</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(196, 195, 219, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot(Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(196, 195, 219, 0.8); position: absolute; top: 67%; left: 82.5%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 8</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Apricot Chicken</p>
                <input type="submit" value="Select">
              </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(196, 195, 219, 1);
                opacity: 1;
            }
        </style>

        <!--Shows What is curently stored in this slot in the user homepage and if selected will replace recipe selected into the slot (Requires action button to execute SQL command to change datatbase)-->
        <div class="Selection" style="background-color: rgba(196, 195, 219, 0.8); position: absolute; top: 89%; left: 82.5%;">
            <form action="UserHomepage.html">
                <p class="display-4 text-center"><b>Add to Slot 9</b></p>
                <!--Needs to be replace with SQL command to pull information from this slot in user home page-->
                <p class="lead text-center">Currently Empty</p>
                <input type="submit" value="Select">
            </form>
        </div>

        <style>
            .Selection:hover {
                background-color: rgba(196, 195, 219, 1);
                opacity: 1;
            }
        </style>

    </div>
</body>
</html>