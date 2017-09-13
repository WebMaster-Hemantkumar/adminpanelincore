<?php
  $con= mysqli_connect("localhost", "root", "", "studentData");
  $id=$_REQUEST['id'];
  $sql="delete from new_student where id=$id";
  $result= mysqli_query($con,$sql);
  if($result)
  {
      header('location:view.php');
  }
 else {
  die("Error :".mysqli_error($con));      
}
  


?>
