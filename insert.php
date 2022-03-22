<?php
if(isset($_POST['submit']))
{
include "connection.php";

 $name=$_POST['name'];
 $class=$_POST['class'];
 $contact=$_POST['contact'];
 $email=$_POST['email'];
 $res="select * from teach where email='$email'";	
 $get_data=mysqli_query($conn,$res);
 if(mysqli_num_rows($get_data)>0)
 {
  echo "<script type='text/javascript'>alert('Details not inserted: Email Already in Use');location='index.php';</script>";
 }
 else
 {
  $sql = "INSERT INTO teach (name, class, contact,email) VALUES ('$name', '$class', '$contact','$email')";
if(mysqli_query($conn, $sql)){
    echo "<script type='text/javascript'>alert('Record added successfully');location='index.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 }
}
?>