<?php
include_once('../dbconn.php');
include_once('../function/controller.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $postData = file_get_contents('php://input');

    // Check if the POST data is not empty
    if (!empty($postData)) {
        session_start();
        $arr = array();
        $postDataArray = json_decode($postData, true);
        extract($postDataArray);
        if (!isset($_SESSION['uid'])) {
            $_SESSION['prv_page'] = "detail.php?product_id=" . $product_id;
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
                'fk_product_id' => $product_id,
                'quantity' => $qty,
                'fk_ppd_id' => $product_price_id,
                'fk_user_id' => $_SESSION['uid']
            );
            $query = generateInsertQuery('cart', $product_details, $con);
            if (insert($query, $con)) {
                // successfully added to cart table

            } else {
                // show failed to add cart
                
            }
            $_SESSION['cart'][] = $product_details;
            $data['data'] = $_SESSION['cart'];
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        }
    }
}

if (isset($_REQUEST['addToCart'])) {
    session_start();
    print_r($_REQUEST);
    extract($_REQUEST);
    $arr = array();
    if (!isset($_SESSION['uid'])) {
        $_SESSION['prv_page'] = "details.php?product_id=" . $product_id;
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
