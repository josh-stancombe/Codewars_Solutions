<?PHP

function findIt(array $seq) : int {

  // Loop through each item in array
  foreach($seq as $val1){

    $count = 0;

    // Loop through array again and count when values match
    foreach($seq as $val2){
      if($val1 == $val2){
        $count += 1;    
      }
    }

    // Check if count is odd
    if($count % 2 == 0){
      continue;
    } else {
      return $val1;
    }

  }
}

?>
