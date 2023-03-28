<?php
  $number = array( '1', '2', '3', '4', '5' );
  echo 'Original array : ';
  foreach ($number as $x)
  {
    echo "\n $x";
  }
  $new_value = '6';
  $position = 5;
  array_splice( $number, $position, 0, $new_value );
  echo "\nAfter the insertion array elements are :";
  foreach ($number as $x)
  {
    echo "\n $x ";
  }
?>
