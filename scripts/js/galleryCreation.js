// JavaScript Gallery Generator
// Handler executes when HTML DOM is ready
$(document).ready(function(){
    // Create the XMLHttpRequest object for communicating with the web server
    var xmlHttp = new XMLHttpRequest();

    // Stores newly generated gallery HTML code
    var htmlCode = "";

    // Temporarily stores server response while code is generated
    var response;
    // Setup the path to the PHP function that reads the image directory to find the thumbnail file names
    //var send = "../php/hook.php";
    var send = "scripts/php/hook.php";

    // Open the connection to the web server
    xmlHttp.open("GET", send, true);
    // Tell the server that the client has no outgoign message, i.e. we are sending nothing to the server
    xmlHttp.send(null);
    // Check we get a valid server response
    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4) {
            // Response handler
            alert(xmlHttp.responseText);
            // Tokenise the response from hook.php
            response = xmlHttp.responseText.split("~");

            // Loop round the response array of tokens, which are the image names
            for(var i=0; i<response.length; i++){
                // Continue to build the HTML code for the gallery
                htmlCode += '<a href = "' + 'assets/gallery/gallerypageImages/' + response[i] + '">';
                htmlCode += '<img class = "card-img-top img-thumbnail" src = "assets/gallery/gallerypageImages/' + response[i] + '"/>';
                htmlCode += '</a>';
            }
            // Return the HTML string to each of the 3 3D App element blocks (coke, sprite and dr pepper) gallery
            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});