<?php 

    class Product
    {
        protected $db;

        public function __construct(DBController $db)
        {
            if(!isset($db->conn))
            {
                return null;
            }
            else    
                {
                    $this->db = $db;
                }
        }

        /**Get All Products under Category -- Hot Deals */
        public function GetHotDeals()
        {
            $sql = "SELECT * FROM product WHERE hotdeal = 1";
            $results = $this->DbQuery($sql);
            $resultsArray = array();

            while($row = mysqli_fetch_assoc($results))
            {
                $resultsArray[] = $row;
            }

            return $resultsArray;

        }

        /**Get All Products under Category -- Latest */
        public function GetLatestProducts()
        {
            $sql = "SELECT * FROM product WHERE latest = 1";
            $results = $this->DbQuery($sql);
            $resultsArray = array();

            while($row = mysqli_fetch_assoc($results))
            {
                $resultsArray[] = $row;
            }
            return $resultsArray;

        }

        /**Get All Products under Category -- Coming soon */
        public function GetComingSoonProducts()
        {
            $sql = "SELECT * FROM product WHERE coming_soon = 1";
            $results = $this->DbQuery($sql);
            $resultsArray = array();

            while($row = mysqli_fetch_assoc($results))
            {
                $resultsArray[] = $row;
            }
            return $resultsArray;

        }







        /** DBQuery
         * This method provides a shorthand for performing database queries
         * 
         */
        protected function DbQuery($sql)
        {
            $results = $this->db->conn->query($sql);
            return $results;
        }

    }