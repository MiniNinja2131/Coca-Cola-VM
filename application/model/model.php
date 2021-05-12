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
                // Code inspired and adapted from Vase_VM
                $this->dbhandle->exec("CREATE TABLE homepageModel (id INTEGER PRIMARY KEY, homeTitle TEXT, homeDescription TEXT, homeBtnText TEXT, youtubeLink TEXT)");
                $this->dbhandle->exec(
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText, youtubeLink) VALUES (0,'Fanta', 'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.','Find out more', 'https://www.youtube.com/embed/kaS1mp2TWWg?');" .
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText, youtubeLink) VALUES (1,'Oasis Summer Fruits', 'The UKs number one on-the-go juice drink, this time with your favourite summer fruits.','Find out more', 'NULL');" .
                "INSERT INTO homepageModel (id, homeTitle, homeDescription, homeBtnText, youtubeLink) VALUES (2,'Schweppes Indian Tonic Water', 'The classic mixer full of effervescence and quinine. Perfect for pairing with your favourite gin for a crisp, refreshing G&T.','Find out more', 'NULL');");

                $this->dbhandle->exec("CREATE TABLE modelpageModel (id INTEGER PRIMARY KEY, x3dCreationMethod TEXT, brand TEXT, info TEXT, infoData  TEXT, energy TEXT, energyData TEXT, fat TEXT, fatData TEXT, ofWhichFat TEXT, saturateFat TEXT, carbohydrate TEXT, carbohydrateData TEXT, ofWhichCarb TEXT, sugar TEXT, protein TEXT, proteinData TEXT, salt TEXT, saltData TEXT, nutritionText TEXT, youtubeLink TEXT)");
                $this->dbhandle->exec(
                "INSERT INTO modelpageModel (id, x3dCreationMethod, brand, info, infoData, energy, energyData, fat, fatData, ofWhichFat, saturateFat, carbohydrate, carbohydrateData, ofWhichCarb, sugar, protein, proteinData, salt, saltData, nutritionText, youtubeLink) VALUES (0, 'This X3D model of the Fanta can has been created in Maya, imported to 3DS max and then exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Fanta', 'Information', 'per 100mL', 'Energy', '81kJ/19kcal', 'Fat', '0g', 'Of which 0g', 'saturates', 'Carbohydrate', '4.6g', 'Of which 4.6g', 'sugars', 'Protein', '0g', 'Salt', '0g', 'Carbonated Water, Sugar, Orange Juice from Concentrate (3.7%), Citrus Fruit from Concentrate (1.3%), Citric Acid, Vegetable Extracts (Carrot, Pumpkin), Sweeteners (Acesulfame K, Sucralose), Preservative (Potassium Sorbate), Malic Acid, Acidity Regulator (Sodium Citrate), Stabiliser (Guar Gum), Natural Orange Flavourings with Other Natural Flavourings, Antioxidant (Ascorbic Acid).', 'https://www.youtube.com/embed/ywbEgyqIkdw?');" .
                "INSERT INTO modelpageModel (id, x3dCreationMethod, brand, info, infoData, energy, energyData, fat, fatData, ofWhichFat, saturateFat, carbohydrate, carbohydrateData, ofWhichCarb, sugar, protein, proteinData, salt, saltData, nutritionText, youtubeLink) VALUES (1, 'This X3D model of the Oasis bottle has been created in 3DS Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Oasis Summer Fruits', 'Information', 'per 100mL', 'Energy', '74kJ/17kcal', 'Fat', '0g', 'Of which 0g', 'saturates', 'Carbohydrate', '4.1g', 'Of which 4.1g', 'sugars', 'Protein', '0g', 'Salt', '0.08g', 'Water, Sugar, Fruit Juices From Concentrates 5% (Apple 1.7%, Strawberry 1.5%, Redcurrant 1.2%, Cherry 0.6%), Citric Acid, Natural Berry Flavouring with Other Natural Flavourings, Fruit and Vegetable Concentrates (Blueberry, Blackcurrant, Carrot, Apple, Hibiscus), Stabiliser (Polyphosphates), Acidity Regulator (Sodium Citrate), Preservatives (Potassium Sorbate, Sodium Benzoate), Sweeteners (Aspartame, Acesulfame K). Contains a Source of Phenylalanine.', 'https://www.youtube.com/embed/KIf1bbzFLeM?');" .
                "INSERT INTO modelpageModel (id, x3dCreationMethod, brand, info, infoData, energy, energyData, fat, fatData, ofWhichFat, saturateFat, carbohydrate, carbohydrateData, ofWhichCarb, sugar, protein, proteinData, salt, saltData, nutritionText, youtubeLink) VALUES (2, 'This X3D model of the Schweppes bottle has been created in 3DS Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online', 'Schweppes Indian Tonic Water', 'Information', 'per 100mL', 'Energy', '89kJ/21kcal', 'Fat', '0g', 'Of which 0g', 'saturates', 'Carbohydrate', '4.9g', 'Of which 4.9g', 'sugars', 'Protein', '0g', 'Salt', '0g', 'Carbonated Water, Sugar, Citric Acid, Flavourings Including Quinine, Sweetener (Sodium Saccharin).', 'https://www.youtube.com/embed/NN_QZ6LV8LM?');");            
                return "Data inserted successfully inside model.sqlite file"; 
            }
            catch (PDOEXception $e) {
                print new Exception($e->getMessage());
            }
            $this->dbhandle = NULL;
        }

        public function dbReadHome(){
            try {
                //Get the database as an object
                $sql = 'SELECT * FROM homepageModel';
                $stmt = $this->dbhandle->query($sql);
                        
                //Set up an array to return the results to the view
                $result = null;
                
                //Set up a variable to index each row of the array
                $i = 0;
                
                //Use a while loop to loop through the rows
                while ($data = $stmt->fetch()){
                    //Write the database contents to the results array for sending back to the view
                    $result['homepageModel'][$i]['homeTitle'] = $data['homeTitle'];
                    $result['homepageModel'][$i]['homeDescription'] = $data['homeDescription'];
                    $result['homepageModel'][$i]['homeBtnText'] = $data['homeBtnText'];
                    $result['homepageModel'][$i]['youtubeLink'] = $data['youtubeLink'];
                    
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

        public function dbReadModel(){
            try {
                //Get the database as an object
                $sql = 'SELECT * FROM modelpageModel';
                $stmt = $this->dbhandle->query($sql);
                        
                //Set up an array to return the results to the view
                $result = null;
                
                //Set up a variable to index each row of the array
                $i = 0;
                
                //Use a while loop to loop through the rows
                while ($data = $stmt->fetch()){
                    //Write the database contents to the results array for sending back to the view
                    $result['modelpageModel'][$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                    $result['modelpageModel'][$i]['brand'] = $data['brand'];
                    $result['modelpageModel'][$i]['info'] = $data['info'];
                    $result['modelpageModel'][$i]['infoData'] = $data['infoData'];
                    $result['modelpageModel'][$i]['energy'] = $data['energy'];
                    $result['modelpageModel'][$i]['energyData'] = $data['energyData'];
                    $result['modelpageModel'][$i]['fat'] = $data['fat'];
                    $result['modelpageModel'][$i]['fatData'] = $data['fatData'];
                    $result['modelpageModel'][$i]['ofWhichFat'] = $data['ofWhichFat'];
                    $result['modelpageModel'][$i]['saturateFat'] = $data['saturateFat'];
                    $result['modelpageModel'][$i]['carbohydrate'] = $data['carbohydrate'];
                    $result['modelpageModel'][$i]['carbohydrateData'] = $data['carbohydrateData'];
                    $result['modelpageModel'][$i]['ofWhichCarb'] = $data['ofWhichCarb'];
                    $result['modelpageModel'][$i]['sugar'] = $data['sugar'];
                    $result['modelpageModel'][$i]['protein'] = $data['protein'];
                    $result['modelpageModel'][$i]['proteinData'] = $data['proteinData'];
                    $result['modelpageModel'][$i]['salt'] = $data['salt'];
                    $result['modelpageModel'][$i]['saltData'] = $data['saltData'];
                    $result['modelpageModel'][$i]['nutritionText'] = $data['nutritionText'];
                    $result['modelpageModel'][$i]['youtubeLink'] = $data['youtubeLink'];
                    
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

        public function dbRead(){
            try {
                //Get the database as an object
                $sql = 'SELECT * FROM homepageModel';
                $stmt = $this->dbhandle->query($sql);
                        
                //Set up an array to return the results to the view
                $result = null;

                //Set up a variable to index each row of the array
                $i = 0;

                while ($data = $stmt->fetch()){
                    //Write the database contents to the results array for sending back to the view
                    $result['homepageModel'][$i]['homeTitle'] = $data['homeTitle'];
                    $result['homepageModel'][$i]['homeDescription'] = $data['homeDescription'];
                    $result['homepageModel'][$i]['homeBtnText'] = $data['homeBtnText'];
                    $result['homepageModel'][$i]['youtubeLink'] = $data['youtubeLink'];
                    
                    //increment the row index
                    $i++;
                }

                //Get the database as an object
                $sql = 'SELECT * FROM modelpageModel';
                $stmt = $this->dbhandle->query($sql);
                        
                //Set up a variable to index each row of the array
                $i = 0;
                
                //Use a while loop to loop through the rows
                while ($data = $stmt->fetch()){
                    //Write the database contents to the results array for sending back to the view
                    $result['modelpageModel'][$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                    $result['modelpageModel'][$i]['brand'] = $data['brand'];
                    $result['modelpageModel'][$i]['info'] = $data['info'];
                    $result['modelpageModel'][$i]['infoData'] = $data['infoData'];
                    $result['modelpageModel'][$i]['energy'] = $data['energy'];
                    $result['modelpageModel'][$i]['energyData'] = $data['energyData'];
                    $result['modelpageModel'][$i]['fat'] = $data['fat'];
                    $result['modelpageModel'][$i]['fatData'] = $data['fatData'];
                    $result['modelpageModel'][$i]['ofWhichFat'] = $data['ofWhichFat'];
                    $result['modelpageModel'][$i]['saturateFat'] = $data['saturateFat'];
                    $result['modelpageModel'][$i]['carbohydrate'] = $data['carbohydrate'];
                    $result['modelpageModel'][$i]['carbohydrateData'] = $data['carbohydrateData'];
                    $result['modelpageModel'][$i]['ofWhichCarb'] = $data['ofWhichCarb'];
                    $result['modelpageModel'][$i]['sugar'] = $data['sugar'];
                    $result['modelpageModel'][$i]['protein'] = $data['protein'];
                    $result['modelpageModel'][$i]['proteinData'] = $data['proteinData'];
                    $result['modelpageModel'][$i]['salt'] = $data['salt'];
                    $result['modelpageModel'][$i]['saltData'] = $data['saltData'];
                    $result['modelpageModel'][$i]['nutritionText'] = $data['nutritionText'];
                    $result['modelpageModel'][$i]['youtubeLink'] = $data['youtubeLink'];
                    
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

        function dbDelete() {
            $this->dbhandle->exec("DROP TABLE homepageModel");
            $this->dbhandle->exec("DROP TABLE modelpageModel");
            return "homepageModel and modelpageModel table successfully deleted from inside model.sqlite file";
        }
    }
?>