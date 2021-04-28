$(document).ready(function() {
    // AJAX service request to get the main text data from the json data store
	$.getJSON('../Assignment/index.php/getModelJson', function(jsonObj) {
        console.log(jsonObj);

        //Assign the AJAX requested data in to approriate <div> tag wrapped in HTML (Fanta model page)
        $('#x3dCreationMethodFanta').html('<p>' + jsonObj.modelpageModel[0].x3dCreationMethod + '</p>');
        $('.nutritionFantaTitle').html('<h2>' + jsonObj.modelpageModel[0].brand + '</h2>');
        $('.nutritionFantaSubtitle').html('<Strong><p><Strong>' + jsonObj.modelpageModel[0].info + '</Strong> ' 
            + jsonObj.modelpageModel[0].infoData + '<br>'
            + '<Strong>' + jsonObj.modelpageModel[0].energy + '</Strong> ' + jsonObj.modelpageModel[0].energyData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[0].fat + '</Strong> ' + jsonObj.modelpageModel[0].fatData + '<br/>'
            + jsonObj.modelpageModel[0].ofWhichFat + '<br/>'
            + jsonObj.modelpageModel[0].saturateFat + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[0].carbohydrate + '</Strong> ' + jsonObj.modelpageModel[0].carbohydrateData + '<br/>'
            + jsonObj.modelpageModel[0].ofWhichCarb + '<br/>'
            + jsonObj.modelpageModel[0].sugar + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[0].protein + '</Strong> ' + jsonObj.modelpageModel[0].proteinData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[0].salt+ '</Strong> ' + jsonObj.modelpageModel[0].saltData + '<br/>'
        );
        $('.nutritionFantaDescription').html('<h2> Ingredients </h2> <p>' + jsonObj.modelpageModel[0].nutritionText + '</p>');

        $('#fantaYT').html('<iframe frameborder = "0" src = ' + jsonObj.modelpageModel[0].youtubeLink + 'allowfullscreen></iframe>');
        
        // (Oasis model page)
        $('#x3dCreationMethodOasis').html('<p>' + jsonObj.modelpageModel[1].x3dCreationMethod + '</p>');
        $('.nutritionOasisTitle').html('<h2>' + jsonObj.modelpageModel[1].brand + '</h2>');
        $('.nutritionOasisSubtitle').html('<Strong><p><Strong>' + jsonObj.modelpageModel[1].info + '</Strong> ' 
            + jsonObj.modelpageModel[1].infoData + '<br>'
            + '<Strong>' + jsonObj.modelpageModel[1].energy + '</Strong> ' + jsonObj.modelpageModel[1].energyData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[1].fat + '</Strong> ' + jsonObj.modelpageModel[1].fatData + '<br/>'
            + jsonObj.modelpageModel[1].ofWhichFat + '<br/>'
            + jsonObj.modelpageModel[1].saturateFat + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[1].carbohydrate + '</Strong> ' + jsonObj.modelpageModel[1].carbohydrateData + '<br/>'
            + jsonObj.modelpageModel[1].ofWhichCarb + '<br/>'
            + jsonObj.modelpageModel[1].sugar + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[1].protein + '</Strong> ' + jsonObj.modelpageModel[1].proteinData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[1].salt+ '</Strong> ' + jsonObj.modelpageModel[1].saltData + '<br/>'
        );
        $('.nutritionOasisDescription').html('<h2> Ingredients </h2> <p>' + jsonObj.modelpageModel[1].nutritionText + '</p>');

        $('#oasisYT').html('<iframe frameborder = "0" src = ' + jsonObj.modelpageModel[1].youtubeLink + 'allowfullscreen></iframe>');

        // (Schweppes model page)
        $('#x3dCreationMethodSchweppes').html('<p>' + jsonObj.modelpageModel[2].x3dCreationMethod + '</p>');
        $('.nutritionSchweppesTitle').html('<h2>' + jsonObj.modelpageModel[2].brand + '</h2>');
        $('.nutritionSchweppesSubtitle').html('<Strong><p><Strong>' + jsonObj.modelpageModel[2].info + '</Strong> ' 
            + jsonObj.modelpageModel[2].infoData + '<br>'
            + '<Strong>' + jsonObj.modelpageModel[2].energy + '</Strong> ' + jsonObj.modelpageModel[2].energyData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[2].fat + '</Strong> ' + jsonObj.modelpageModel[2].fatData + '<br/>'
            + jsonObj.modelpageModel[2].ofWhichFat + '<br/>'
            + jsonObj.modelpageModel[2].saturateFat + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[2].carbohydrate + '</Strong> ' + jsonObj.modelpageModel[2].carbohydrateData + '<br/>'
            + jsonObj.modelpageModel[2].ofWhichCarb + '<br/>'
            + jsonObj.modelpageModel[2].sugar + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[2].protein + '</Strong> ' + jsonObj.modelpageModel[2].proteinData + '<br/>'
            + '<Strong>' + jsonObj.modelpageModel[2].salt+ '</Strong> ' + jsonObj.modelpageModel[2].saltData + '<br/>'
        );
        $('.nutritionSchweppesDescription').html('<h2> Ingredients </h2> <p>' + jsonObj.modelpageModel[2].nutritionText + '</p>');

        $('#schweppesYT').html('<iframe frameborder = "0" src = ' + jsonObj.modelpageModel[2].youtubeLink + 'allowfullscreen></iframe>');
    });
});