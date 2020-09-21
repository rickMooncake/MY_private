<?php
function get_execution_time()
{
  $debut = microtime($_SERVER['REQUEST_TIME_FLOAT']);

  $fin = microtime($_SERVER['REQUEST_TIME_FLOAT']);

  $delai = $fin - $debut;
  echo substr($delai, 0, 9);
}
?>
