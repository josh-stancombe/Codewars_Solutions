function createPhoneNumber($numbersArray) {
  
  $i = 0;
  $phoneNumber = "(";
    
  foreach ($numbersArray as $value) {
 
    $val = strval($value);
    
    if ($i == 2){
      $val .= ") ";
    } 
    
    if ($i == 5){
      $val .= "-";
    }
      
    $phoneNumber .= $val;
    $i++;
    
  }
  
  return $phoneNumber;
  
}
