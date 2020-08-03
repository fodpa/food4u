<?php
session_start();
$db = mysqli_connect('localhost:3308', 'root', '', 'feedback');
if (!$db) {
 die("Connection failed: " . mysqli_connect_error());
}
// initialize variables
$name = "Jack";
$email = "dsfsad";
$subject ="sddfsa";
$feedback="sadfd";
$id = 0;
$update = false;
//if (isset($_POST['save'])) {
 $name = $_POST['name'];
 $address = $_POST['email'];
  $subject = $_POST['subject'];
   $feedback = $_POST['message'];
 $sql = "INSERT INTO feedback (feedback,name,email,subject) VALUES ('$feedback', '$name','$address','$subject')";

 
 
 
 if (mysqli_query($db, $sql)) {
   echo "New record created successfully";   
// $_SESSION['message'] = "Address Saved";
 } else {
//     echo mysqli_error($sql,$db);
// $_SESSION['message'] = "Address Save Failed!";
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
 }