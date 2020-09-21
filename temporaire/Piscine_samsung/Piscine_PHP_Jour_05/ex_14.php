<?php
function display_names(...$param)
{

  if(func_num_args() % 2 == 0)
  {
    $index = 1;
  }
  else
  {
    $index = 0;
  }
  $chaine = '|/(.*?)/|iU';

  $arr = [0 => preg_replace($chaine, '', $_SERVER['PHP_SELF']), 3 => func_num_args(), 4 => $index];
  return $arr;
}
?>
