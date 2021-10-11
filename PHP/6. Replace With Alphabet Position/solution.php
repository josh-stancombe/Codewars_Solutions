<?php

function alphabet_position(string $s): string {

  // Split alphabet into an array
  $alphabet = str_split('abcdefghijklmnopqrstuvwxyz',1);
  
  // String to lowercase then split to determine position
  $split_string = str_split(strtolower($s),1);
  
  $return_string = "";
  
  foreach($split_string as $char){
    $num = array_search($char,$alphabet);
    $num++;
    if ($num != 0){
      $return_string .= $num . " "; 
    }
  }
    
  // Trim last space character and return string
  return rtrim($return_string, " ");
    
}

?>
