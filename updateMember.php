

<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
    </head>
    <body>
        <h1>Update Profile</h1>
        <form method="post" action="updateMember.php">
       
       
            <table>
               <tr>
                    <td>UserId</td>
                    <td><input type="text" name="userId" required></td>
                </tr>
               
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" required></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="text" name="dob" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" required></td>
                </tr> 
                <tr>
                    <td>Phone number</td>
                    <td><input type="text" name="phn" required></td>
                </tr>
                
                

                
                    <td><input type="submit" name="submit_button" value="Update" required></td>
                </tr>
                 
            </table>
            
            <h5><a href='memberHome.php'>Go back</a></h5>
          
            
        </form>
    </body>
<html>