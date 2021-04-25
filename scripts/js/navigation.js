/* Used for the side navigation bar */
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    selectPage();
});

/* Navigation for a Single Page Application */
function selectPage() {
    /* Home page */
	$('#home').show();
    $('#statement').hide();
    $('#references').hide();
	$('#model').hide();
    $('#gallery').hide();

	$('#navHome').click(function(){
        $('#home').show();
        $('#statement').hide();
        $('#references').hide();
        $('#model').hide();
        $('#gallery').hide();	  
	});

	$('#navStatement').click(function(){
        $('#home').hide();
        $('#statement').show();
        $('#references').hide();
        $('#model').hide();
        $('#gallery').hide();	  
	});

    $('#navReferences').click(function(){
        $('#home').hide();
        $('#statement').hide();
        $('#references').show();
        $('#model').hide();
        $('#gallery').hide();	  
	});

    $('#navModel').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#references').hide();
        $('#model').show();
        $("#x3dModelTitleFanta").show();
        $("#x3dModelTitleOasis").hide();
        $("#x3dModelTitleSchweppes").hide();

        $("#x3dCreationMethodFanta").show();
        $("#x3dCreationMethodOasis").hide();
        $("#x3dCreationMethodSchweppes").hide();

        $("#fantaNutritionText").show();
        $("#oasisNutritionText").hide();
        $("#schweppesNutritionText").hide();
        $('#gallery').hide();

	});

    $('#navGallery').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#references').hide();
        $('#model').hide();
        $('#gallery').show();	  
	});
}

function fantaDescription(){
    $("button").click(function(){
        $("#x3dModelTitleFanta").show();
        $("#x3dModelTitleOasis").hide();
        $("#x3dModelTitleSchweppes").hide();

        $("#x3dCreationMethodFanta").show();
        $("#x3dCreationMethodOasis").hide();
        $("#x3dCreationMethodSchweppes").hide();

        $("#fantaNutritionText").show();
        $("#oasisNutritionText").hide();
        $("#schweppesNutritionText").hide();
    }); 
}

function oasisDescription(){
    $("button").click(function(){
        $("#x3dModelTitleFanta").hide();
        $("#x3dModelTitleOasis").show();
        $("#x3dModelTitleSchweppes").hide();

        $("#x3dCreationMethodFanta").hide();
        $("#x3dCreationMethodOasis").show();
        $("#x3dCreationMethodSchweppes").hide();

        $("#fantaNutritionText").hide();
        $("#oasisNutritionText").show();
        $("#schweppesNutritionText").hide();
    }); 
}

function schweppesDescription(){
    $("button").click(function(){
        $("#x3dModelTitleFanta").hide();
        $("#x3dModelTitleOasis").hide();
        $("#x3dModelTitleSchweppes").show();

        $("#x3dCreationMethodFanta").hide();
        $("#x3dCreationMethodOasis").hide();
        $("#x3dCreationMethodSchweppes").show();

        $("#fantaNutritionText").hide();
        $("#oasisNutritionText").hide();
        $("#schweppesNutritionText").show();
    }); 
}