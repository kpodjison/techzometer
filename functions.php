<?php

require_once "./backend/DBController.php";
require_once "./backend/product.php";

$db = new DBController();
$product = new Product($db);

$hot_deals = $product->GetHotDeals();


