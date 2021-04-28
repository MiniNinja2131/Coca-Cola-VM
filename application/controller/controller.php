<?php
    // Create the controller class for the MVC design pattern
    class Controller {
	    // Declare public variables for the controller class
	    public $load;
	    public $model;
	
	    // Create functions for the controller class
	    function __construct($pageURI = null){
		    $this->load = new Load(); 
			$this->model = new Model();
		    // Determine what page you are on
		    $this->$pageURI();
	    }
		
        // Home page function
	    function home(){
			$this->load->view('viewCocaColaVM');
	    }

		// Fetch only the homepage data from database
		function getHomeJson(){
			$data = $this->model->dbReadHome();
			echo json_encode($data);
		}

		// Fetch only the model data from database
		function getModelJson(){
			$data = $this->model->dbReadModel();
			echo json_encode($data);
		}

		// Fetch all the data from database	for the website
		function getJson(){
			$data = $this->model->dbRead();
			echo json_encode($data);
		}
		
		// Create a table (homepage and modelpage) and insert the data to the database
		function dbCreate(){
			$data = $this->model->dbCreate();
			$this->load->view('viewMessage', $data);
		}

		// Load all the data fetched from the database and display onto webpage
		function dbRead(){
			$this->load->view('viewMessage', $this->getJson());
		}

		// Load homepage data fetched from the database and display onto webpage
		function dbReadHome(){
			$this->load->view('viewMessage', $this->getHomeJson());
		}

		// Load modelpage data fetched from the database and display onto webpage
		function dbReadModel(){
			$this->load->view('viewMessage', $this->getModelJson());
		}
		
		// Delete the selected table in the database
		function dbDelete(){
			$data = $this->model->dbDelete();
			$this->load->view('viewMessage', $data);
		}
	}
?> 