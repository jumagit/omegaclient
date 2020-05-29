<?php

include "check_if_logged_in.php";

require "../includes/db.php";
header('Content-Type: application/json');

    $products = count_val('products');
    $categories = count_val('categories');
    $order_item = count_val('order_item');
    $orders = count_val('orders');

     $feed_back = [$products, $orders,$order_item,$categories];
// IMPORTANT, output to json
echo json_encode($feed_back);
//var_dump($feed_back);
















?>