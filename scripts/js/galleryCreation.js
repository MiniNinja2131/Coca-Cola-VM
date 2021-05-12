// JavaScript Gallery Generator
// Handler executes when HTML DOM is ready
$(document).ready(function(){
    // Create the XMLHttpRequest object for communicating with the web server
    var xmlHttpR = new XMLHttpRequest(); // Used for generating the first column in the gallery (right)
    var xmlHttpM = new XMLHttpRequest(); // Used for generating the second column in the gallery (middle)
    var xmlHttpL = new XMLHttpRequest(); // Used for generating the third column in the gallery (left)

    // Stores newly generated gallery HTML code
    var htmlCodeR = ""; // Used to insert into first column in the gallery
    var htmlCodeM = ""; // Used to insert into second column in the gallery
    var htmlCodeL = ""; // Used to insert into third column in the gallery

    // Temporarily stores server response while code is generated
    var responseR;
    var responseM;
    var responseL;

    // Setup the path to the PHP function that reads the image directory to find the thumbnail file names
    var sendR = "scripts/php/hookRight.php";
    var sendM = "scripts/php/hookMid.php";
    var sendL = "scripts/php/hookLeft.php";

    // Variable used to track how many times it had duplicated
    var j = 0;

    // Open the connection to the web server
    xmlHttpL.open("GET", sendL, true);
    // Tell the server that the client has no outgoign message, i.e. we are sending nothing to the server
    xmlHttpL.send(null);
    // Check we get a valid server response
    xmlHttpL.onreadystatechange = function(){
        // Request finished and response is ready
        if(xmlHttpL.readyState == 4) {
            // Tokenise the response from hook.php
            responseL = xmlHttpL.responseText.split("~");

            // Loop round the response array of tokens, which are the image names
            for(var i = 0; i < responseL.length; i++){
                // Continue to build the HTML code for the gallery
                htmlCodeL += '<img class = "card-img-top img-thumbnail" src = "assets/gallery/gallerypageImages/columnLeft/' + responseL[i] + '"/>';
            }
            // Return the HTML string to the left column in the gallery page attached to the id galleryImagesLeft
            document.getElementById('galleryImagesLeft').innerHTML = htmlCodeL;
        }
    }

    // Open the connection to the web server
    xmlHttpM.open("GET", sendM, true);
    // Tell the server that the client has no outgoign message, i.e. we are sending nothing to the server
    xmlHttpM.send(null);
    // Check we get a valid server response
    xmlHttpM.onreadystatechange = function(){
        // Request finished and response is ready
        if(xmlHttpM.readyState == 4) {
            // Tokenise the response from hook.php
            responseM = xmlHttpM.responseText.split("~");

            // Duplicate the the two images in the middle column as a way of demonstration 
            while(j != 4){
                // Loop round the response array of tokens, which are the image names
                for(var i = 0; i < responseM.length; i++){
                    // Continue to build the HTML code for the gallery
                    htmlCodeM += '<img class = "card-img-top img-thumbnail" src = "assets/gallery/gallerypageImages/columnMid/' + responseM[i] + '"/>';
                }
                j++;
            }
            // Return the HTML string to the left column in the gallery page attached to the id galleryImagesMiddle
            document.getElementById('galleryImagesMid').innerHTML = htmlCodeM;
        }
    }

    // Open the connection to the web server
    xmlHttpR.open("GET", sendR, true);
    // Tell the server that the client has no outgoign message, i.e. we are sending nothing to the server
    xmlHttpR.send(null);
    // Check we get a valid server response
    xmlHttpR.onreadystatechange = function(){
        // Request finished and response is ready
        if(xmlHttpR.readyState == 4) {
            // Tokenise the response from hook.php
            responseR = xmlHttpR.responseText.split("~");

            // Loop round the response array of tokens, which are the image names
            for(var i = 0; i < responseR.length; i++){
                // Continue to build the HTML code for the gallery
                htmlCodeR += '<img class = "card-img-top img-thumbnail" src = "assets/gallery/gallerypageImages/columnRight/' + responseR[i] + '"/>';
            }
            // Return the HTML string to the left column in the gallery page attached to the id galleryImagesRight
            document.getElementById('galleryImagesRight').innerHTML = htmlCodeR;
        }
    }
});