<?php
require_once "php/config.php";
$tweetName = "";
$tweetId = "";
$tweetName = $_GET['q'];
$tweetId = $_GET['p'];
$likes = $_GET['l'];

    $likes += 1;

$sql2 = "UPDATE post SET likes ='$likes' WHERE post_member_id='$tweetName' and post_id='$tweetId'";
/* $conn->query($sql2); */
mysqli_query($conn, $sql2);
echo " ".$likes;
?>