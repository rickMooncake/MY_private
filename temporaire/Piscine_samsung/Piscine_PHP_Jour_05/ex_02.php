<?php
function my_aff_global()
{
  foreach($GLOBALS as $k => $v)
  {
    if(is_string($v))
    {
      echo $k." => ".$v."\n";
    }
  }
}
?>
