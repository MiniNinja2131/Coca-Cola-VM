<?php
    class Model{
        // Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
        public $dbhandle;
        
        // Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
        public function __construct(){
            // Set up the database source name (DSN)
            $dsn = 'sqlite:./db/model.db';
            
            // Then create a connection to a database with the PDO() function
            try {	
                // Change connection string for different databases, currently using SQLite
                $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                                                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                            PDO::ATTR_EMULATE_PREPARES => false,
                                                            ));

            }
            catch (PDOEXception $e) {
                //echo "I'm sorry, Danny. I'm afraid I can't connect to the database!";
                // Generate an error message if the connection fails
                print new Exception($e->getMessage());
            }
        }
        
        public function dbCreate()
        {
            try{
                $this->dbhandle->exec("CREATE TABLE homepageModel (id INTEGER PRIMARY KEY, homeTitle TEXT, homeDescription TEXT, homeBtnText TEXT)");
                $this->dbhandle->exec(
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText) VALUES (0,'Fanta', 'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.','Find out more');" .
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText) VALUES (1,'Oasis Summer Fruits', 'The UKs number one on-the-go juice drink, this time with your favourite summer fruits.','Find out more');" .
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText) VALUES (2,'Schweppes Indian Tonic Water', 'The classic mixer full of effervescence and quinine. Perfect for pairing with your favourite gin for a crisp, refreshing G&T.','Find out more');");
                return "Data inserted successfully inside models.sqlite file"; 
            }
            catch (PDOEXception $e) {
                print new Exception($e->getMessage());
            }
            $this->dbhandle = NULL;
        }

        public function dbRead(){
            try {
            
                //Get the database as an object
                $sql = 'SELECT * FROM homepageModel';
                $stmt = $this->dbhandle->query($sql);
                        
                //Set up an array to return the results to the view
                $result = null;
                
                //Set up a variable to index each row of the array
                $i=0;
                
                //Use a while loop to loop through the rows
                while ($data = $stmt->fetch()){
                    
                    //Write the database contents to the results array for sending back to the view
                    $result['homepageModel'][$i]['homeTitle'] = $data['homeTitle'];
                    $result['homepageModel'][$i]['homeDescription'] = $data['homeDescription'];
                    $result['homepageModel'][$i]['homeBtnText'] = $data['homeBtnText'];
                    
                    //increment the row index
                    $i++;
                }
                
            }
            catch (PDOEXception $e) {
                print new Exception($e->getMessage());
            }
            //Close the database connection
            $this->dbhandle = NULL;
            
            //Send the response back to the view
            return $result;
        }
        
        public function dbGetData(){
            try{
                // Prepare a statement to get all records from the Model_3D table
                $sql = 'SELECT * FROM homepageModel';
                // Use PDO query() to query the database with the prepared SQL statement
                $stmt = $this->dbhandle->query($sql);
                // Set up an array to return the results to the view
                $result = null;
                // Set up a variable to index each row of the array
                $i=-0;
                // Use PDO fetch() to retrieve the results from the database using a while loop
                // Use a while loop to loop through the rows	
                while ($data = $stmt->fetch()) {
                    // Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
                    // echo '</br>' . $data['x3dModelTitle'];
                    // Write the database conetnts to the results array for sending back to the view
                    $result[$i]['homeTitle'] = $data['homeTitle'];
                    $result[$i]['homeDescription'] = $data['homeDescription'];
                    $result[$i]['homeBtnText'] = $data['homeBtnText'];
                    //increment the row index
                    $i++;
                }
            }
            catch (PD0EXception $e) {
                print new Exception($e->getMessage());
            }
            // Close the database connection
            $this->dbhandle = NULL;
            // Send the response back to the view
            return $result;
        }

        function dbDelete() {
            $this->dbhandle->exec("DROP TABLE models");
            return "Models table successfully deleted from inside models.sqlite file";
        }
    }
?>