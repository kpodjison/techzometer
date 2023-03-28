<?php

$root = __DIR__."/";
require($root."DBController.php");
require($root."cart.php");
require($root."product.php");


$db = new DBController();
$cart = new Cart($db);
$product = new Product($db);

$resultArray = array();


if($_SERVER['REQUEST_METHOD'] === "GET")
{
    if(isset($_GET['action']))
    {
        $action = $_GET['action'];
    }


    if( $action == "getcart" )
    {
        $uuid = $_GET['uid'];
        $resultArray = $cart->getCart($uuid);
    }
    else if($action == "gethotdeals")
        {
            $resultArray = $product->GetHotDeals();
        }
    


    echo json_encode($resultArray);
    exit;
}
