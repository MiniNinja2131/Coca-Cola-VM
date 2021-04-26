<?php
    class Load{
        // Defaults to constructor as no specific constructor is defined
	    function view($file_name, $data = null){
            // Check for data
		    if(is_array($data)){
			    extract($data);
		    }
            // Include the view file with a .php extention to include the view as a php file
		    include $file_name . '.php';
	    }
    }
?>