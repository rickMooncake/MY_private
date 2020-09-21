<?php
function my_reset_session()
{
  $_SESSION = array();
  session_destroy();
  session_reset();
}

?>
