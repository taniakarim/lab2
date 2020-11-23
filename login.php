<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
    </head>
    <body>
	<h1 style="color:blue;">Login</h1>
        
        <form method="post" action="seeSalary.php">
            <table>
               
                <tr>
                    <td>UserId</td>
                    <td><input type="userId" name="userId" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="login" value="Login" required></td>
                </tr>
				
            </table>
            <h5><a href='signup.php'>Go back</a></h5>
        </form>
    </body>
</html>