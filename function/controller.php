<?php 
function getQueryResult($conn,$sql) {
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform the query
    $res = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$res) {
        die("Error executing query: " . mysqli_error($conn));
    }

    // Fetch the data from the result and store it in an array
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}
