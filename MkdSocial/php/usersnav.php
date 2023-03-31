<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY date DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    
    
?>
 