<?php
include 'components/connect.php';


if(isset($_GET['pid'])){
   $pid = $_GET['pid'];
   // Increment views count
   $stmt = $conn->prepare("UPDATE products SET views = views + 1 WHERE id = ?");
   $stmt->execute([$pid]);
   // ...fetch and display product details...
}
?>
