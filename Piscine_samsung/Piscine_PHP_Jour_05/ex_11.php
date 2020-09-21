<?php
function print_array_with_key($arr)
{
  foreach($arr as $k => $v)
  {
    echo $v." : ".$k."\n";
  }
}
?>
