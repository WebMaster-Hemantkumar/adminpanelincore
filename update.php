<!DOCTYPE html>
<?php 
     $con= mysqli_connect("localhost", "root", "", "studentData");
     $id=$_REQUEST['id'];
     $sql="select * from registernewstudent where id=$id";
     $result= mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result);
     $pic=$row['studentProfile'];
    if(isset($_POST['update']))
    {   
         $name=$_POST["studentName"];
         $email=$_POST["studentEmail"];
         $phone=$_POST["studentPhone"];
         $add=$_POST["studentAdd"];
         $city=$_POST["studentCity"];
         $pin=$_POST["studentPin"];
         $img=$_FILES["studentProfile"]["name"];
       //$id=$_POST['id'];
         $sql="update registernewstudent set studentName='$name', studentEmail='$email',studentPhone='$phone',studentAdd='$add',studentCity='$city',studentPin='$pin',studentProfile='$img' where id=$id";
         $result= mysqli_query($con,$sql);
         if($result)
         { 
             move_uploaded_file($_FILES['studentProfile']['tmp_name'],"img/". $img);
             echo "you Have updated your data";
             header('location:view.php');
         }
        else 
            {
             die("Error :".mysqli_error($con) );
            }
    }

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>pk</title>
        <style>
            body{
                border: 2px solid black;
                background: black;
            }
            *{margin: 0;padding: 0}
    .wrap{background: gray;width: 960px;margin: auto}
    .header{
                background: blue;color: red;
            }
    .nav{
                background: bisque;
                
            }
            .header h3{
                text-align: center;
                font-size: 22px;
            }
   .clear{
                clear: both;
            }
   .nav ul{
                list-style: none;
                float: right;
            }
   .nav ul li{
                float: left;
                padding: 6px;
            }
   .nav ul li a{
        text-decoration: none;
        font-size: 18px;
	line-height: 18px;
	font-weight: bold;
  
            }
            .container{
                background: ghostwhite;
            }
            .footer p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
                <h3>Student Regester</h3>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="view.php">View</a>
                    </li>
                  
                    </li>
                   
                </ul>
                <div class="clear"></div>
            </div>
<div class="container">
                <h3>Regester</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" name="id"/>
                    <table >
                        <tr>
                            <td><label for="name">Name:</label></td><td><input type="text" value="<?php echo $row['studentName']; ?>" id="name" name="studentName"/></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td><td><input type="email" id="email" value="<?php echo $row['studentEmail']; ?>"  name="studentEmail"/></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone:</label></td><td><input type="text" id="phone" value="<?php echo $row['studentPhone']; ?>"  name="studentPhone"/></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td><td><textarea cols="15" rows="7" id="address" name="studentAdd" ><?php echo $row['studentAdd']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="city">City:</label></td><td><input type="text" id="city" value="<?php echo $row['studentCity']; ?>" name="studentCity"/></td>
                        </tr>
                        <tr>
                            <td><label for="pincodde">Pincode:</label></td><td><input type="text" value="<?php echo $row['studentPin']; ?>" id="pincode" name="studentPin"/></td>
                        </tr>
                        <tr>
                            <td><label for="profile">Image:</label></td><td><input type="file" id="profile" value="<?php echo $row['studentProfile']; ?>" name="studentProfile"/></td>
                        </tr>
                        <tr>
                            <td><label for=""></label></td><td><input type="submit" value="Update" id="submit" name="update"/><a href="view.php">Go Back</a></td>
                            
                        </tr>
                      
                        
                        
                    </table>
                </form>
                <img src="<?php echo $pic?>" alt="image"> 
            </div>
            <div class="footer">
                <p>@copright 2017</p>
            </div>
        </div>
    </body>
</html>
