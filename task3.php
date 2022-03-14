<?php
  $summ = 0;
  for($i=1; $i<=10000; $i++){
    if (substr_count((string)$i, '012')!=0 or substr_count((string)$i, '678')!=0) continue;
    $summ += $i;
  }
  echo "Result: ".$summ;
?>
