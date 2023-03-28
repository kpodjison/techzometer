<?php

class Cart{
    protected $db;

    public function __construct(DBController $db)
    {
        if(!isset($db->conn))
        {
            return null;
        }
        else{
            $this->db= $db;
        }
    }

    public function addToCart(){
        $item = '';
       if($_SERVER['REQUEST_METHOD'] === 'POST')
       {
         if(isset($_POST['buy_now']))
         {
            $item = $_POST['item_id'];
            $uuid = $_SESSION['u_user'];
            $sql = "INSERT INTO cart(item_id,uuid) VALUES('$item','$uuid')";

            $results = $this->Dbquery($sql);
            if($results === TRUE)
            {
                $_SESSION['SuccessMsg'] = "Item Added to Cart Successfully";
            }
            else{
                $_SESSION['ErrorMsg'] = "Failed to Add Item to Cart";
            }

         }
       }  
    }

    public function getCart($uuid)
    {
       
 
            $sql = "SELECT * FROM cart WHERE uuid = '$uuid' ";
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