<?php
function my_get_weird_info()
{
  if(isset($_GET))
  {
    foreach($_GET as $g)
    {
      print_r($g);
      $_GET['nbr_elem'] = 0;
    }
    return $_GET["nbr_elem"];
  }
  else
  {
    return NULL;
  }
}
?>
