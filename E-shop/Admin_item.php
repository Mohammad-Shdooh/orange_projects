<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin_item_style.css">
</head>
<body>
    
    <html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OCC Extranet App cards demo">
    <meta name="author" content="Samaritan's Purse International Relief">
    <title>app tiles</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
   
</head>

<body>
    <div class="flexbox-container">

    <a href="AddCategory.php?name=AddCategory">
            <div class="app-card" id="document-resources-card-color">
                <div class="image-container" id="document-resources-icon"></div>
                <div class="text-container">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <p class="title">category</p>
                            </div>
                            <div class="back">
                                <p class="description">you can add & delete category from here.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Add product -->
        <a href="Admin_AddItem.php?name=Admin_AddItem">
            <div class="app-card" id="home-card-color">
                <div class="image-container" id="home-icon"></div>
                <div class="text-container">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <p class="title">Add product</p>
                            </div>
                            <div class="back">
                                <p class="description">click here to fill the form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

      
        <!-- Show product  -->
        <a href="Admin_showProduct.php">
            <div class="app-card" id="drop-off-location-management-card-color">
                <div class="image-container" id="drop-off-location-management-icon"></div>
                <div class="text-container">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <div class="flipper">
                            <div class="front">
                                <p class="title">Show product</p>
                            </div>
                            <div class="back">
                                <p class="description">you can edit and delete any product you choose.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>

     

</body>

</html>
</body>
</html>