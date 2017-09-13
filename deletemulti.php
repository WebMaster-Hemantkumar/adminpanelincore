<?php 
 $con= mysqli_connect("localhost", "root", "", "studentData");
    if(isset($_POST['delete']))
    {
       $ids= implode(',', $_POST['userid']);
       $sql="delete from new_student where id in($ids)";
       $result= mysqli_query($con, $sql);
       header('location:view.php');
    }


?>