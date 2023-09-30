<?php
$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'foodhub');
$email = $_POST['newsletter'];
$query = "insert into newslettertb (email) values ($email')";
mysqli_query($conn,$query);
header('location:index.html');
?>