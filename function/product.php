<?php
include_once('../dbconn.php');
include_once('../function/controller.php');

if (isset($_REQUEST['getSizeDetails'])) {
    $arr = array();
    $ppd_id = $_REQUEST['getSizeDetails'];
    $productQuery = "SELECT price, discount FROM product_price_details WHERE ppd_id = '$ppd_id'";
    $products = getQueryResult($con, $productQuery);
    foreach ($products as $item) {
        extract($item);
        $temp = array(
            "price" => $price, "discount" => $discount
        );
        array_push($arr, $temp);
    }
    $data['data'] = $arr;
    header('Content-Type: application/json');
    echo json_encode($data);
}
