<?php
$name = "";
$age ="";
$number ="";
$db = mysqli_connect('localhost', 'root', '', 'excel');
if (isset($_POST['submit'])){
$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$query = "INSERT INTO `user` (`name`, `age`, `number`) VALUES ('$name' , '$age' , '$number')";
mysqli_query($db,$query);
header('location:form.php');
}
$sql = "SELECT * FROM user";
$result = mysqli_query($db,$sql);
?>
