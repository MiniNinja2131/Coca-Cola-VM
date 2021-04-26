<?php
    // Includes the following files and the path is relative to where this file is currently located
    require 'view/load.php';
    require 'model/model.php';
    require 'controller/controller.php';
    // Fetch the 3dapp/lab7/.. etc
    $pageURI =$_SERVER['REQUEST_URI'];
    $pageURI = substr($pageURI,strrpos($pageURI,'index.php')+10);
    if(!$pageURI)
        new Controller('home');
    else
        new Controller($pageURI);
?>