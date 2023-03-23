
<!DOCTYPE html>
<html>
<body>

<?php 
echo "The even numbers in the array are <br>";
for ($x = 0; $x <= 10; $x++)
 {
  if($x%2==0)
  {
     echo "$x <br>";
  }
 }
 echo "The odd numbers in the array are <br>";
 for ($x = 0; $x <= 10; $x++)
 {
  if($x%2 != 0)
  {
     echo "$x <br>";
  }
 }
?>  

</body>
</html>

