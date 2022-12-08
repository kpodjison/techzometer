<?php

    class DBController
    {
        //DB connection properties
        protected $host = "localhost";
        protected $user = "root";
        protected $psw = "";
        protected $db_name = "techzomerter";

        //connection object
        public $conn = null;
        
        //mysql object
        public $mysql = null;

        //constructor
        public function __construct()
        {
            $this->mysqli = new mysqli(
                $this->host,
                $this->user,
                $this->psw,
                $this->db_name
            );

            $this->conn = mysqli_connect(
                $this->host,
                $this->user,
                $this->psw,
                $this->db_name
            );

            if($this->conn->connect_error)
            {
                echo "Fail".$this->conn->connect_error;
            }
            else
                {
                    // echo "DB Connection successful";
                }
            
        }

        //function to close db connection
        public function closeConnection()
        {
            if($this->conn != null)
            {
                $this->conn->close();
                $this->conn = null;
            }
        }

        //Destructor
        public function __destruct()
        {
            $this->closeConnection();
        }

    }