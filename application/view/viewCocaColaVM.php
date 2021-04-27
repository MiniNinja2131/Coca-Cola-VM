<!DOCTYPE html>
<html lang = "en">
    <head>
        <!-- Meta tags-->
        <meta charset="utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS -->
        <link rel = "stylesheet" href="scripts/css/style.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Icons -->

        <link rel = "stylesheet" type = "text/css" href = "scripts/css/x3dom.css">

        <!-- JavaScript/Scripts -->
        <script type = "text/javascript" src = "scripts/js/x3dom.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type = "text/javascript" src = "scripts/js/navigation.js"></script>
        <script type = "text/javascript" src = "scripts/js/carousel.js"></script>
        <script type = "text/javascript" src = "scripts/js/modelNavigation.js"></script>
        <script type = "text/javascript" src = "scripts/js/modelInteraction.js"></script>
        <script type = "text/javascript" src = "scripts/js/galleryCreation.js"></script>

        <!-- Fancybox (Optional functionality imported) -->
        <script type="text/javascript" src="scripts/fancybox-2.1.7/lib/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="scripts/fancybox-2.1.7/source/jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="scripts/fancybox-2.1.7/source/jquery.fancybox.css" media="screen">
        <link rel="stylesheet" type="text/css" href="scripts/fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.css">
        <script type="text/javascript" src="scripts/fancybox-2.1.7/source/helpers/jquery.fancybox-buttons.js"></script>
        <link rel="stylesheet" type="text/css" href="scripts/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.css">
        <script type="text/javascript" src="scripts/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.js"></script>
        <script type="text/javascript" src="scripts/fancybox-2.1.7/lib/jquery.mousewheel.pack.js"></script>

        <title> Coca Cola Web 3D Application </title>
    </head>

    <body id = "bodyColour">
        <!-- Logo of Coca Cola text -->
        <div class = "logo">
            <div class = "logoTextTop">
                <h1> 1oca </h1>
                <h2> Cola </h2>
                <h3> Journey </h3>
            </div>
            <p> Refreshing the world, one story at a time </p>
        </div>

        <div class = "row no-gutters">
            <!-- Two column; one = navigation bar, two = content of website (homepage, model, gallery etc) -->
            <div class = "col-auto">
                <!-- Side Navigation bar -->
                <div class = "wrapper">
                    <nav id = "sidebar">
                        <ul class = "components">
                            <li class = "nav-item">
                                <a id = "navHome" class = "nav-link active" href = "#"> Home </a>
                            </li>

                            <li>
                                <a href = "#aboutSubmenu" data-toggle = "collapse" aria-expanded = "false" class = "dropdown-toggle"> About </a>
                                <ul class="collapse" id = "aboutSubmenu">
                                    <li class = "nav-item">
                                        <a id = "navStatement" class="nav-link" href = "#"> Statement of Originality </a>
                                    </li>

                                    <li class = "nav-item">
                                        <a id = "navReferences" class = "nav-link" href = "#"> References </a>
                                    </li>
                                </ul>
                            </li>

                            <li class = "nav-item">
                                <a id = "navModel" class = "nav-link" href = "#"> 3D Model </a>
                            </li>

                            <li class = "nav-item">
                                <a id = "navGallery" class = "nav-link" href = "#"> Gallery </a>
                            </li>
                        </ul>

                        <div class = "socialMediaContainer">
                            <!-- Social media icon -->
                            <a href = "https://www.linkedin.com/company/the-coca-cola-company"> <i class = "socialMediaIcon fab fa-linkedin"></i></a>
                            <a href = "https://twitter.com/cocacola_gb"> <i class = "socialMediaIcon fab fa-twitter-square"></i></a>
                            <a href = "https://www.facebook.com/cocacolaGB/"> <i class = "socialMediaIcon fab fa-facebook-square"></i></a>
                            <a href = "https://www.youtube.com/channel/UCMGIUY-GcVFSovaHUKUmdug"> <i class = "socialMediaIcon fab fa-youtube-square"></i></a>
                            <a href = "https://www.instagram.com/cocacolaeu/?hl=en"> <i class = "socialMediaIcon fab fa-instagram-square"></i></a>
                        </div>
                    </nav>

                    <!-- Side navigation button (collapse/open) -->
                    <div id = "navBtnBar">
                        <nav class = "navbar navbar-expand-lg navbar-light">
                            <div class = "container-fluid">
                                <button type = "button" id = "sidebarCollapse" class = "navButton">
                                    <i class = "fas fa-align-left"></i>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Start of the Single Page Application (SPA) -->
            <div class = "col">
                <!-- Start of Home page -->
                <div id = "home" class = "main_contents">
                    <!-- Image carousel -->
                    <div id = "imageCarousel" class = "carousel slide carousel-fade" data-ride = "carousel">
                        <!-- Image indication at the bottom -->
                        <ol class = "carousel-indicators">
                            <li data-target = "#imageCarousel" data-slide-to = "0" class = "active"></li>
                            <li data-target = "#imageCarousel" data-slide-to = "1"></li>
                            <li data-target = "#imageCarousel" data-slide-to = "2"></li>
                            <li data-target = "#imageCarousel" data-slide-to = "3"></li>
                            <li data-target = "#imageCarousel" data-slide-to = "4"></li>
                        </ol>
        
                        <div class = "carousel-inner">
                            <!-- First  image in carousel -->
                            <div class = "carousel-item active" data-interval = "2500">
                                <div class = "caraImg1"></div>
                                <div class = "carouselImgContainer">
                                    <h1> Coca Cola Energy </h1>
                                    <p> Caffeine from naturally-derived sources, guarana extracts and B vitamins, and completely taurine-free </p>
                                </div>
                            </div>
        
                            <!-- Second image in carousel -->
                            <div class = "carousel-item" data-interval = "2500">
                                <div class = "caraImg2"> </div>
                                <div class = "carouselImgContainer">
                                    <h1> Diet Coke </h1>
                                    <p> It’s more refreshing, great tasting and contains just 1kcal per 330ml. </p>
                                </div>
                            </div>
        
                            <!-- Third image in carousel -->
                            <div class = "carousel-item" data-interval = "2500">
                                <div class = "caraImg3"></div>
                                <div class = "carouselImgContainer">
                                    <h1> Fuze Tea </h1>
                                    <p> Mango Camomile infused iced tea </p>
                                </div>
                            </div>

                            <!-- Forth image in carousel -->
                            <div class = "carousel-item" data-interval = "2500">
                                <div class = "caraImg4"></div>
                                <div class = "carouselImgContainer">
                                    <h1> Lilt </h1>
                                    <p> Inspired by the flavours of the Caribbean, Lilt is a sparkling soft drink that contains real pineapple and grapefruit juice for a totally tropical taste. </p>
                                </div>
                            </div>

                            <!-- Fifth image in carousel -->
                            <div class = "carousel-item" data-interval = "2500">
                                <div class = "caraImg5"></div>
                                <div class = "carouselImgContainer">
                                    <h1> Roses </h1>
                                    <p> Established in 1867, Rose's was the world's first concentrated fruit drink. </p>
                                </div>
                            </div>
                        </div>
        
                        <!-- Control for the carousel -->
                        <a href = "#imageCarousel" class = "carousel-control-prev" role = "button" data-slide = "prev">
                            <span class = "sr-only"> Previous arrow </span>
                            <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
                        </a>
        
                        <a href = "#imageCarousel" class = "carousel-control-next" role = "button" data-slide = "next">
                            <span class = "sr-only"> Next arrow </span>
                            <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
                        </a>
                    </div> <!-- End of Image carousel in home page -->

                    <!-- Fanta product info at home page -->
                    <div class = "productInfoContainer">
                        <div class = "row no-gutters">
                            <div class = "col">
                                <div class = "card img-narrow">
                                    <a id = "productImg" href = "assets/gallery/gallerypageImages/columnMid/fantaSlanted.png" title = "Fanta">
                                        <img class = "card-img-top img-fluid img-thumbnail" src = "assets/gallery/homepageCarousel/fanta.jpg" alt = "" />
                                    </a>

                                    <div class = "card-body">
                                        <div id = "homeTitleLeft" class = "card-title productText"> Fanta </div>
                                        <div id = "homeDescriptionLeft" class = "card-subtitle productText"> Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free. </div>
                                        <div id = "toFantaModel" class = "btn btn-primary btn-responsive"> Find out more </div>
                                    </div>
                                </div>
                            </div>  
        
                            <!-- Oasis product info at home page -->
                            <div class = "col">
                                <div class = "card img-narrow">
                                    <a id = "productImg" href = "#" title = "Oasis">
                                        <img class = "card-img-top img-fluid img-thumbnail" src = "assets/gallery/homepageCarousel/oasis.jpg" alt = "" />
                                    </a>

                                    <div class = "card-body">
                                        <div id = "homeTitleCenter" class = "card-title productText"> Oasis Summer Fruits </div>
                                        <div id = "homeDescriptionCenter" class = "card-subtitle productText"> The UK's number one on-the-go juice drink, this time with your favourite summer fruits. </div>
                                        <div id = "toOasisModel" class = "btn btn-primary btn-responsive"> Find out more </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Schweppes product info at home page -->
                            <div class = "col">
                                <div class = "card img-narrow">
                                    <a id = "productImg" href = "#" title = "Schweppes">
                                        <img class = "card-img-top img-fluid img-thumbnail" src = "assets/gallery/homepageCarousel/schweppes.jpg" alt = "" />
                                    </a>

                                    <div class = "card-body">
                                        <div id = "homeTitleRight" class = "card-title productText"> Schweppes Indian Tonic Water </div>
                                        <div id = "homeDescriptionRight" class = "card-subtitle productText"> The classic mixer full of effervescence and quinine. Perfect for pairing with your favourite gin for a crisp, refreshing G&T. </div>
                                        <div id = "toSchweppesModel" class = "btn btn-primary btn-responsive"> Find out more </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="iframe-container">
                        <iframe frameborder = "0" src="https://www.youtube.com/embed/kaS1mp2TWWg?" allowfullscreen> </iframe>
                    </div>
                </div> <!-- End of Home page -->

                <!-- Start of Statement of Originality -->
                <div id = "statement" class = "main_contents">
                    <div id = "statementText"> These web pages are submitted as part requirement for the degree of Candidate number: 185754 at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged. </div>
                </div> <!-- End of Statement of Originality -->

                <!-- Start of References -->
                <div id = "references" class = "main_contents">
                </div> <!-- End of Statement of References -->

                <!-- Start of 3D Model -->
                <div id = "model" class = "main_contents">
                    <div class = "card text-left">
                        <div class = "card-header">
                            <ul class = "nav nav-tabs card-header-tabs modelInteraction">
                                <li class = "nav-item">
                                    <a id = "navCoke" class = "nav-link active" href = "#"> X3D Models </a>
                                </li>

                                <li class = "nav-item dropdown">
                                    <a class = "nav-link dropdown-toggle" href = "#" id = "navbardrop" data-toggle = "dropdown"> Viewport </a>
                                    <div class = "dropdown-menu">
                                        <a class="dropdown-item" href = "#" onclick = "cameraFront()"> Front </a>
                                        <a class = "dropdown-item" href = "#" onclick = "cameraBack()"> Back </a>
                                        <a class = "dropdown-item" href = "#" onclick = "cameraLeft()"> Left </a>
                                        <a class = "dropdown-item" href = "#" onclick = "cameraRight()"> Right </a>
                                        <a class = "dropdown-item" href = "#" onclick = "cameraTop()"> Top </a>
                                    </div>
                                </li>

                                <li class = "nav-item">
                                    <a id = "navCoke" class = "nav-link" href = "#" onclick = "wireFrame();"> Wireframe Mode </a>
                                </li>
                            </ul>
                        </div>

                        <!-- 3D model -->
                        <div class = "card-body">
                            <div>
                                <div id = "x3dModelTitleFanta" class = "card-title drinksText"></div>
                                <div id = "x3dModelTitleOasis" class = "card-title drinksText"></div>
                                <div id = "x3dModelTitleSchweppes" class = "card-title drinksText"></div>

                                <button type = "button" class = "btn btn-danger btn-responsive" onMouseUp = "fantaScene(); fantaDescription();"> Fanta Model </button>
                                <button type = "button" class = "btn btn-danger btn-responsive" onMouseUp = "oasisScene(); oasisDescription();"> Oasis Model </button>
                                <button type = "button" class = "btn btn-danger btn-responsive" onMouseUp = "schweppesScene(); schweppesDescription();"> Schweppes Model </button>
                                <div class = "3dModel">
                                    <x3d id = "wire">
                                        <scene render = "true" bboxsize = "-1,-1,-1" pickmode = "idBuf" dopickpass = "true">
                                            <Switch whichChoice = "0" id = 'SceneSwitch'>
                                                <transform>
                                                    <inline render = "true" bboxcenter = "0,0,0" bboxsize = "-1,-1,-1" load = "true" nameSpaceName = "model" mapDEFToID = "true" onclick = "animateModel();" url = "assets/FantaModel/x3d/fantaModel.x3d"></inline>
                                                </transform>
                                                <transform>
                                                    <inline render = "true" bboxcenter = "0,0,0" bboxsize = "-1,-1,-1" load = "true" nameSpaceName = "model" mapDEFToID = "true" onclick = "animateModel();" url = "assets/OasisModel/x3d/oasisModel.x3d"></inline>
                                                </transform>
                                                <transform>
                                                    <inline render = "true" bboxcenter = "30,30,0" bboxsize = "-1,-1,-1" load = "true" nameSpaceName = "model" mapDEFToID = "true" onclick = "animateModel();" url = "assets/SchweppesModel/x3d/schweppesModel.x3d"></inline>
                                                </transform>
                                            </Switch>
                                        </scene>
                                    </x3d>
                                </div>
                                <div id = "x3dCreationMethodFanta" class = "card-text drinksText"> This X3D model of the Fanta can has been created in Maya, imported to 3DS max and then exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online </div>
                                <div id = "x3dCreationMethodOasis" class = "card-text drinksText"> This X3D model of the Oasis bottle has been created in 3DS Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online </div>
                                <div id = "x3dCreationMethodSchweppes" class = "card-text drinksText"> This X3D model of the Schweppes bottle has been created in 3DS Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hold the nutritional value of each drink and the advertisement -->
                    <div class = "row">
                        <!-- Text regarding the nutrition value of the drinks -->
                        <div class = "col-sm-4">
                            <div class = "card text-left">
                                <div class = "card-header nutritious-header">
                                    <ul class = "nav nav-tabs card-header-tabs">
                                        <li class = "nav-item">
                                            <a class = "nav-link active" href = "#"> Nutrition Value </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <!-- Nutrious data for each drink (fanta, oasis, schweppes)-->
                                <div class = "card-body">
                                    <div id = "fantaNutritionText">
                                        <div class = "card-title nutritionFantaTitle drinksText"> <h2>Fanta</h2> </div>
                                        <div class = "card-subtitle nutritionFantaSubtitle drinksText"> <Strong><p><Strong> Information </Strong> per 100mL <br> 
                                            <Strong> Energy </Strong> 81kJ/19kcal <br/>
                                            <Strong> Fat </Strong> 0g <br/>
                                            Of which 0g <br/>
                                            saturates <br/>

                                            <Strong> Carbohydrate </Strong> 4.6g <br/>
                                            Of which 4.6g <br/>
                                            sugars <br/>

                                            <Strong>Protein </Strong> 0g <br/>

                                            <Strong> Salt </Strong> 0g <br/></p></Strong>
                                        </div>

                                        <div class = "card-text nutritionFantaDescription drinksText"> <h2> Ingredients </h2> <p> 
                                            Carbonated Water, Sugar, Orange Juice from Concentrate (3.7%), 
                                            Citrus Fruit from Concentrate (1.3%), Citric Acid, Vegetable Extracts (Carrot, Pumpkin), 
                                            Sweeteners (Acesulfame K, Sucralose), Preservative (Potassium Sorbate), Malic Acid, 
                                            Acidity Regulator (Sodium Citrate), Stabiliser (Guar Gum), Natural Orange Flavourings 
                                            with Other Natural Flavourings, Antioxidant (Ascorbic Acid).</p>
                                        </div>
                                    </div>

                                    <div id = "oasisNutritionText">
                                        <div class = "card-title nutritionOasisTitle drinksText"> <h2> Oasis Summer Fruits </h2> </div>
                                        <div class = "card-subtitle nutritionOasisSubtitle drinksText"> <Strong><p><Strong> Information </Strong> per 100ml <br> 
                                            <Strong> Energy </Strong> 74kJ/17kcal <br/>
                                            <Strong> Fat </Strong> 0g <br/>
                                            Of which 0g <br/>
                                            saturates <br/>
                                        
                                            <Strong> Carbohydrate </Strong> 4.1g <br/>
                                            Of which 4.1g <br/>
                                            sugars <br/>
                                    
                                            <Strong>Protein </Strong> 0g <br/>
                                            <Strong> Salt </Strong> 0.08g <br/></p></Strong>
                                        </div>

                                        <div class = "card-text nutritionOasisDescription drinksText"> <h2> Ingredients </h2> <p> 
                                            Water, Sugar, Fruit Juices From Concentrates 5% (Apple 1.7%, Strawberry 1.5%, Redcurrant 1.2%, Cherry 0.6%), 
                                            Citric Acid, Natural Berry Flavouring with Other Natural Flavourings, Fruit and Vegetable Concentrates 
                                            (Blueberry, Blackcurrant, Carrot, Apple, Hibiscus), Stabiliser (Polyphosphates), Acidity Regulator (Sodium Citrate), 
                                            Preservatives (Potassium Sorbate, Sodium Benzoate), Sweeteners (Aspartame, Acesulfame K). Contains a Source of Phenylalanine.</p> 
                                        </div>
                                    </div>

                                    <div id = "schweppesNutritionText">
                                        <div class = "card-title nutritionSchweppesTitle drinksText"> <h2> Schweppes Indian Tonic Water </h2> </div>
                                        <div class = "card-subtitle nutritionSchweppesSubtitle drinksText"> <Strong><p><Strong> Information </Strong> per 100ml <br> 
                                            <Strong> Energy </Strong> 89kJ/21kcal <br/>
                                            <Strong> Fat </Strong> 0g <br/>
                                            Of which 0g <br/>
                                            saturates <br/>
                                        
                                            <Strong> Carbohydrate </Strong> 4.9g <br/>
                                            Of which 4.9g <br/>
                                            sugars <br/>
                                    
                                            <Strong>Protein </Strong> 0g <br/>
                                            <Strong> Salt </Strong> 0g <br/></p></Strong> 
                                        </div>

                                        <div class = "card-text nutritionSchweppesDescription drinksText"> <h2> Ingredients </h2> <p> 
                                            Carbonated Water, Sugar, Citric Acid, Flavourings Including Quinine, Sweetener (Sodium Saccharin)</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class = "col-sm-8">
                            <div class="iframe-container">
                                <iframe frameborder = "0" src="https://www.youtube.com/embed/kaS1mp2TWWg?" allowfullscreen> </iframe>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of Statement of 3D Model page -->

                <!-- Start of Gallery -->
                <div id = "gallery" class = "main_contents">
                    <div class = "container-fluid">
                        <div class = "galleryRow">
                            <div class = "column">
                                <div class = "galleryImagesLeft" id = "galleryImagesLeft"></div>
                            </div>

                            <div class = "column">
                                <div class = "galleryImagesMid" id = "galleryImagesMid"></div>
                            </div>

                            <div class = "column">
                                <div class = "galleryImagesRight" id = "galleryImagesRight"></div>
                            </div>
                        </div>
                    </div>                                               
                </div> <!-- End of Statement of Gallery -->                

                <!-- Start of Footer -->
                <nav id = "footerColor" class = "navbar navbar-expand-sm footer">
                    <div class = "container-fluid">   
                        <div class = "navbar-text float-left social">
                            <p class = "footerText"><a href = "#"> Privacy Policy </a> | <a href = "#"> Cookie Policy </a> | <a href = "#"> Terms of use | <a href = "#"> Contact </p>
                        </div>

                        <div class = "navbar-text float-right copyright">
                            <p class = "footerText"><span class = "footerText align-baseline"> &copy 2021 3D Apps Assignment | <a href = "javascript:changeLook()"> Restyle </a> | <a href = "javascript:changeBack()"> Reset </a></span></p>
                        </div>
                    </div>
                </nav> <!-- End of Footer -->
            </div> <!-- End of the Single Page Application (SPA) -->
        </div>
    </body>
</html>