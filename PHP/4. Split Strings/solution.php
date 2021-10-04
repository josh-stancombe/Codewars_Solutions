<?php

function solution($str) {
  
  // Deal with test case of null params
  if (strlen($str) == 0){
    return []; 
  }
  
  // Check if length of string is odd to add '_'
  if (strlen($str) % 2 !== 0){
    $str .= "_";
  } 
  
  // Split the string into an array in chunks of 2
  $newStr = str_split($str, 2);
  return $newStr;
  
}

?>
