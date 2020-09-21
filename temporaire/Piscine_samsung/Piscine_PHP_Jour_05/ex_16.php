<?php
function check_types($arr)
{

    foreach($arr[1] as $r)
    {
    }

    foreach($arr[0] as $r2)
    {
    }

    if(gettype($r) == gettype($r2))
    {
      return true;
    }
    else
    {
      return false;
    }
}
?>
