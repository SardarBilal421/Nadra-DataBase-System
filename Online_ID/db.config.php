<?php
    define('DNS','mysql:host=localhost;dbname=nadradatabasesystem');
    define('Username','root');
    define('Password','');
    define('Debugging',false);


        class Database{
             private $pdo;
            public function __construct(){
                try {
                    $this->pdo = new PDO(DNS,Username,Password);
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch (PDOException $e){
                    if(Debugging){
                        die("Error while Connecting to DataBase ". $e);

                    }else {
                        die("Error ! Pls Try Later ");
                    }
                }
            }
            public function UDI($qry){
                return $this->pdo->exec($qry);
            }
            public function Search($qry , $classRef){
                $result = $this->pdo->query($qry);
                if($result->rowCount()>0)
                {
                    $rows = $result->fetchAll(PDO::FETCH_CLASS,$classRef);
                    return $rows;
                }
                return null;
            }

        }

