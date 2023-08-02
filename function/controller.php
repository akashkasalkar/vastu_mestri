<?php
function getQueryResult($conn, $sql)
{
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

function generateInsertQuery($table, $data, $conn)
{
    if (empty($data)) {
        return false;
    }
    $columns = [];
    $values = [];
    foreach ($data as $column => $value) {
        $columns[] = "`" . $column . "`";
        $values[] = "'" . mysqli_real_escape_string($conn, $value) . "'";
    }
    $columns_str = implode(", ", $columns);
    $values_str = implode(", ", $values);
    $insertQuery = "INSERT INTO `$table` ($columns_str) VALUES ($values_str);";
    return $insertQuery;
}

function insert($query, $conn)
{
    if (mysqli_query($conn, $query)) {
        return true; // Query executed successfully
    } else {
        return false; // Query execution failed
    }
}
