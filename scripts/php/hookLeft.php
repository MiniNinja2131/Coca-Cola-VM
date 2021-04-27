<?php
    // Specify the path to the thumbnail images
    $directory = '../../assets/gallery/gallerypageImages/columnLeft';
    // The .. mean that it gets out of that particular folder in our case if it exit scripts, it will find the gallery images therefore path = ../

    //Only load files with the following extentions
    $allowed_extensions = array('jpg', 'jpeg', 'gif', 'png', 'PNG');

    // An array used to separate the extension from each file
    $file_parts = array();

    // Response message
    $response = "";

    // Opens the directory to parse the images
    $dir_handle = opendir($directory);
    // Iterate through all the files in the directory we gave it
    while ($file = readdir($dir_handle)) {
        // First check for hidden files
        if(substr($file, 0, 1) != '.'){
            // Split each file name to extract the file extension
            $file_components = explode('.', $file);
            // Grab the extension token
            $extension = strtolower(array_pop($file_components));
            // Compare the file extension we retrieve with our allowed file extension
            if(in_array($extension, $allowed_extensions)){
                $response .= $file.'~';
                // PHP uses the . as a way to appending strings to the end

            }
        }
    }
    closedir($dir_handle);
    // Return response while removing the last ~ separator
    echo substr_replace($response, "", -1);
    ?>