<!DOCTYPE HTML>
<html>  
  <body>
   <h2>Registration Form</h2>
   <form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Phone-no: <input type="tel" name="phone" maxlength="10"><br><br>
    Message: <textarea name="Message" rows="3" cols="40"></textarea>
    <br><br>
    Gender:<input type="radio" name="gender"  value="female">Female
    <input type="radio" name="gender"  value="male">Male
    <input type="radio" name="gender"  value="other">Other  
    <br><br>
    <input type="submit">
   </form>
  </body>
</html>
