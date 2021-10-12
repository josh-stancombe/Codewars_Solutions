<?php

function inArray($array1, $array2) {
  
  $returnArray = [];
  
  // Foreach to check if the term is in any of the words.
  foreach($array2 as $word){
    
    foreach($array1 as $term){
      
      if(substr_count($word, $term) == 1){
        
        //check if term already exists in array
        if(in_array($term,$returnArray) == 0){ 
          
           array_push($returnArray,$term);
          
        }
        
      }
      
    }
    
  }
  
  sort($returnArray);
  
  return $returnArray;
  
}

?>
