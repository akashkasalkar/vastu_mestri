<?php
include_once('../dbconn.php');
include_once('../function/controller.php');

if (isset($_REQUEST['addToCart'])) {
    session_start();
    extract($_REQUEST);
    $arr = array();
    if (!isset($_SESSION['uid'])) {
        $temp = array(
            "error" => 101
        );
        array_push($arr, $temp);
        $data['data'] = $arr;
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array(); // Initialize an empty array for the cart
        }
        $product_details = array(
            'product_id' => $product_id,
            'qty' => $qty,
            'product_price_id' => $product_price_id,
        );
        $_SESSION['cart'][] = $product_details;
    }
}
