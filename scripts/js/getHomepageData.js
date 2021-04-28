$(document).ready(function() {
    //AJAX service request to get the main text data from the json data store
	$.getJSON('../Assignment/index.php/getModelsJSON', function(jsonObj) {
        console.log(jsonObj);

        //Assign the AJAX requested data in to approriate <div> tag wrapped in HTML
        //Start by making AJAX request for the selected object name and its description
        $('#homeTitleLeft').html(jsonObj.homepageModel[0].homeTitle);
        $('#homeDescriptionLeft').html(jsonObj.homepageModel[0].homeDescription);
        $('#toFantaModel').html(jsonObj.homepageModel[0].homeBtnText);

        $('#homeTitleCenter').html(jsonObj.homepageModel[1].homeTitle);
        $('#homeDescriptionCenter').html(jsonObj.homepageModel[1].homeDescription);
        $('#toOasisModel').html(jsonObj.homepageModel[1].homeBtnText);
        
        $('#homeTitleRight').html(jsonObj.homepageModel[2].homeTitle);
        $('#homeDescriptionRight').html(jsonObj.homepageModel[2].homeDescription);
        $('#toSchweppesModel').html(jsonObj.homepageModel[2].homeBtnText);
    });
});