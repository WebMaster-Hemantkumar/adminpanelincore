<!DOCTYPE html>
<?php 
     $con= mysqli_connect("localhost", "root", "", "studentData");
    $sql="select * from registernewstudent";
    $result= mysqli_query($con,$sql);
    

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
            .footer{background: buttonface;}
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
                   
                   
                </ul>
                <div class="clear"></div>
            </div>
            <table border="1px solid black">
                <tr>
                    <th width="100px">Id</th>
                    <th width="100px">Name</th>
                    <th width="100px">Email</th>
                    <th width="100px"> Phone</th>
                    <th width="100px">Address</th>
                    <th width="100px">city</th>
                    <th width="100px">Pincode</th>
                    <th width="100px">ProfilePic</th>
                    <th width="100px">Gender</th>
                    <th width="100px">Massege</th>
                    <th width="100px">Education</th>
                    <th width="100px">Hobbies</th>
                    <th width="100px">Edit</th>
                    <th width="100px">Delete</th>
               </tr>
                <?php while($row= mysqli_fetch_array($result)) 
                       {
                     $id=$row['id']; 
                    ?>
               <form action="deletemulti.php" method="post">
               <tr>
                  
                   <td width="100px"><input type="checkbox" value="<?php echo $row['id'];?>" name="userid[]"</td>
                   <td width="100px"><?php echo $row['studentName'];?></td>
                   <td width="100px"><?php echo $row['studentEmail'];?></td>
                   <td width="100px"><?php echo $row['studentPhone'];?></td>
                   <td width="100px"> <?php echo $row['studentAdd'];?></td>
                   <td width="100px"><?php echo $row['studentCity'];?></td>
                   <td width="100px"><?php echo $row['studentPin'];?></td>
                   <td width="100px"><?php echo $row['studentProfile'];?></td>
                   <td width="100px"><?php echo $row['Gender'];?></td>
                   <td width="100px"><?php echo $row['Massege'];?></td>
                   <td width="100px"><?php echo $row['Education'];?></td>
                   <td width="100px"><?php echo $row['Hobbies'];?></td>
                   <td width="100px"><a href="update.php?id=<?php echo $id ?>">Edit</a></td>
                   <td width="100px"><a href="delete.php?id=<?php echo $id ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
            <input type="submit" name="delete" value="delete"/>
</form>
            <div class="footer">
                <p>@copright 2017</p>
            </div>
        </div>
    </body>
</html>

