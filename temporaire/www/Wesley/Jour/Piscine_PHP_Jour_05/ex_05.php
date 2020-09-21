<?php
function my_add_to_session($key, $value)
{
  $value = $value."titi";
  $_SESSION[$key] = $value;
}
?>
