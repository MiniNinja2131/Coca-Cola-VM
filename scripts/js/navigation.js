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
    $('#deeperLearning').hide();
	$('#model').hide();
    $('#gallery').hide();

	$('#navHome').click(function(){
        $('#home').show();
        $('#statement').hide();
        $('#deeperLearning').hide();
        $('#model').hide();
        $('#gallery').hide();	  
	});

	$('#navStatement').click(function(){
        $('#home').hide();
        $('#statement').show();
        $('#deeperLearning').hide();
        $('#model').hide();
        $('#gallery').hide();	  
	});

    $('#navDeeperLearning').click(function(){
        $('#home').hide();
        $('#statement').hide();
        $('#deeperLearning').show();
        $('#model').hide();
        $('#gallery').hide();	  
	});

    $('#navModel').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#deeperLearning').hide();
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
        $('#fantaYT').show();
        $('#oasisYT').hide();
        $('#schweppesYT').hide();
        $('#gallery').hide();
	});

    $('#navGallery').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#deeperLearning').hide();
        $('#model').hide();
        $('#gallery').show();	  
	});

    $('#toFantaModel').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#deeperLearning').hide();
        $('#model').show();
        fantaScene();
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

    $('#toOasisModel').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#deeperLearning').hide();
        $('#model').show();
        oasisScene();
        $("#x3dModelTitleFanta").hide();
        $("#x3dModelTitleOasis").show();
        $("#x3dModelTitleSchweppes").hide();

        $("#x3dCreationMethodFanta").hide();
        $("#x3dCreationMethodOasis").show();
        $("#x3dCreationMethodSchweppes").hide();

        $("#fantaNutritionText").hide();
        $("#oasisNutritionText").show();
        $("#schweppesNutritionText").hide();
        $('#gallery').hide();
    });

    $('#toSchweppesModel').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#deeperLearning').hide();
        $('#model').show();
        schweppesScene();
        $("#x3dModelTitleFanta").hide()
        $("#x3dModelTitleOasis").hide();
        $("#x3dModelTitleSchweppes").show();

        $("#x3dCreationMethodFanta").hide();
        $("#x3dCreationMethodOasis").hide();
        $("#x3dCreationMethodSchweppes").show();

        $("#fantaNutritionText").hide();
        $("#oasisNutritionText").hide();
        $("#schweppesNutritionText").show();
        $('#gallery').hide();
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

        $('#fantaYT').show();
        $('#oasisYT').hide();
        $('#schweppesYT').hide();
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

        $('#fantaYT').hide();
        $('#oasisYT').show();
        $('#schweppesYT').hide();
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

        $('#fantaYT').hide();
        $('#oasisYT').hide();
        $('#schweppesYT').show();
    }); 
}