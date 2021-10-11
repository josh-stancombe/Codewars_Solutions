<? php

function moveZeros(array $items): array
{
    $zero_count = 0;
    $newArray = [];
  
  foreach($items as $item){
    if($item === 0 || $item === 0.0){
      $zero_count++;
    } else {
      array_push($newArray, $item);
    }
  }
  
  for($i=0; $i < $zero_count; $i++){
    array_push($newArray, 0);
  }
  
  return $newArray;
  
}

?>
