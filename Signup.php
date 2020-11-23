<!DOCTYPE html>
<html>
  <head>
    <title>Project</title>
  </head>
  <body>
  	<h1> Registration form! </h1>
	
	
    <form action="login.php">
      
   
      First Name:<br>
      <input type="text"  name="firstname" value="" required><br>
      Last Name:<br>
      <input type="text"  name="lastname" value="" required><br>
      Phone: <br>
      <input type="text"  name="phone" value="" required><br>
      Email: <br>
      <input type="text"  name="email" value="" required><br>
      Gender: 
      <input type="radio" name="gender" value="male">Male 
      <input type="radio" name="gender" value="female">Female <br>
	  <br>
    <div>
	<label>Date of birth</label>
  <input type="datetime-local" id="birthdaytime">
  
   </div>
      Password: <br>
      <input type="password"  name="password" value="" required><br>
      Confirm Password: <br>
      <input type="password" name="confpassword" value="" required><br> <br>
      <input type="submit"  name="" value="Sign up"> 
      <input type="submit" name="" value="Log in" >
      


    </form>
  </body>
</html>
