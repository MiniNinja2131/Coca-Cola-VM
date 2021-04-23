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
        $('#gallery').hide();	  
	});

    $('#navGallery').click(function(){
        $('#home').hide()
        $('#statement').hide();
        $('#references').hide();
        $('#model').hide();
        $('#gallery').show();	  
	});

    /* To be added
	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide(); 
	});*/
}