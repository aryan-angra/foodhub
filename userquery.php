<?php
$conn = mysqli_connect('localhost','root');

mysqli_select_db($conn,'foodhub');
$user = $_POST['fname'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$query = "insert into userqueries (name,email,comment) values ('$user','$email','$comment')";
mysqli_query($conn,$query);
header('location:index.html');

?>