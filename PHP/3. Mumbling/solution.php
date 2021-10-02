function accum($s) {
    
  $index = 1;
  $strArr = str_split(strtolower($s));
  $newStr = "";
  
  foreach ($strArr as $letter){
    
    $tempStr = "";
    
    for ($x=1; $x <= $index; $x+=1){      
      $tempStr .= $letter;
      
      if($x == $index){
        $tempStr .= "-";
      }
    }
    
    $newStr .= ucfirst($tempStr);
    
    $index += 1;
  }
  
  $newStr = rtrim($newStr, "- ");
  return $newStr;
  
}
