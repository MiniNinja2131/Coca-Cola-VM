<?php
    // Create the controller class for the MVC design pattern
    class Controller {
	    // Declare public variables for the controller class
	    public $load;
	    public $model;
	
	    // Create functions for the controller class
	    function __construct($pageURI = null)
        {
		    $this->load = new Load(); 
			$this->model = new Model();
		    // Determine what page you are on
		    $this->$pageURI();
	    }
		
        // Home page function
	    function home(){
			$this->load->view('viewCocaColaVM');
	    }

		function getModelsJSON()
		{
			$data = $this->model->dbRead();
			echo json_encode($data);
		}
		
		function dbCreate()
		{
			$data = $this->model->dbCreate();
			$this->load->view('viewMessage', $data);
		}
		
		function dbRead()
		{
			$this->load->view('viewMessage', $this->getModelsJSON());
		}
		
		function dbDelete()
		{
			$data = $this->model->dbDelete();
			$this->load->view('viewMessage', $data);
		}
	}
?> 