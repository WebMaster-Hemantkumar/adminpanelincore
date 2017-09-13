<?php  
    $con= mysqli_connect("localhost", "root", "", "studentData");
     if(isset($_POST["submit"]))
     {
         $name=$_POST["studentName"];
         $email=$_POST["studentEmail"];
         $phone=$_POST["studentPhone"];
         $add=$_POST["studentAdd"];
         $city=$_POST["studentCity"];
         $pin=$_POST["studentPin"];
         $img=$_FILES["studentProfile"]["name"];
         $Gender=$_POST["Gender"];
         $Massege=$_POST["Massege"];
         $Education = implode(',', $_POST['Education']);
         $Hobbies = implode(',', $_POST['Hobbies']);

         $sql="select * from registernewstudent where studentEmail='$email'";
         $result= mysqli_query($con, $sql);
         $res= mysqli_fetch_array($result);
         if(count($res))
         {
             echo $email.'This Email is alrady Exist plz try with other Email ID ';
         }
         else 
         {
             move_uploaded_file($_FILES["studentProfile"]["tmp_name"],"img/".$img);
             
             
               
$sql="INSERT  INTO RegisterNewStudent (studentName,StudentEmail,studentPhone,studentAdd,studentCity,studentPin,studentProfile,Gender,Massege,Education,Hobbies) values('$name','$email','$phone','$add','$city','$pin','$img','$Gender','$Massege','$Education','$Hobbies')";
             
             
             
             
             $result=mysqli_query($con, $sql);
             if(!$result)
             {
                  die('Error: ' . mysqli_error($con));
             }
             else
             {
                header('location:view.php');
             }
         }
         
         
         
     }
     mysqli_close($con);

?>
<div class="container">
                <h3>Regester</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <table >
                        <tr>
                            <td><label for="name">Name:</label></td><td><input type="text" id="name" name="studentName"/></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email:</label></td><td><input type="email" id="email" name="studentEmail"/></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone:</label></td><td><input type="text" id="phone" name="studentPhone"/></td>
                        </tr>
                        <tr>
                            <td><label for="address">Address:</label></td><td><textarea cols="15" rows="7" id="address" name="studentAdd" ></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="city">City:</label></td><td><input type="text" id="city" name="studentCity"/></td>
                        </tr>
                        <tr>
                            <td><label for="pincodde">Pincode:</label></td><td><input type="text" id="pincode" name="studentPin"/></td>
                        </tr>
                        <tr>
                            <td><label for="profile">Image:</label></td>
                            
                            
                            <td><input type="file" id="profile" name="studentProfile" multiple="multiple"/ ></td>
                        </tr>
                        
                        
                        
                        
                         <tr>
                            <td><label for="profile">Gender:</label></td>
                            
                            
                            <td>
                            
                            <input type="radio" id="profile" name="Gender" value="Male" checked="checked"/>Male
                            <input type="radio" id="profile" name="Gender" value="Female"/>Female
                            
                            </td>
                        </tr>
                        
                        
                        
                        
                        
                        
                         <tr>
                            <td><label for="profile">Massege:</label></td>
                            <td>
                            	<textarea rows="5" cols="5" name="Massege"></textarea>
                            	</td>
                            
                            
                         </tr>
                        
                        
                        
                        <tr>
                            <td><label for="profile">Education:</label></td>
                            <td> 
                            <select name="Education[]" multiple="multiple">
                            	<option value="MCA">MCA</option>
                            	<option value="MBA" selected="MBA">MBA</option>
                            	<option value="M.Tech">M.Tech</option>
                            	<option value="B.tech">B.tech</option>
                            	
                            </select>
                            </td>
                        </tr>
                        
                        
                        
                        
                          <tr>
                            <td><label for="profile">Hobbies:</label></td>
                            
                            <td>
                            <input type="checkbox" id="checkbox" name="Hobbies[]" value="Reading"/>Reading
                            <input type="checkbox" id="checkbox" name="Hobbies[]" value="Playing"/>Playing
                           <input type="checkbox" id="checkbox" name="Hobbies[]" value="wathching"/>wathching
                            <input type="checkbox" id="checkbox" name="Hobbies[]" value="jooking"/>jooking
                            
                            
                            </td>
                        </tr>
                        
                        
                        
                        
                        <tr>
                            <td><label for=""></label></td><td><input type="submit" value="Submit" id="submit" name="submit"/></td>
                        </tr>
                        
                        
                    </table>
                </form>
            </div>
