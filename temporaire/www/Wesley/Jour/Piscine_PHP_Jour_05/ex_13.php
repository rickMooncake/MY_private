<?php
function my_sort_files(&$arr)
{
  $object = new ArrayObject($arr);
  $object->asort();

  foreach($object as $v)
  {
    echo $v."\n";
  }
}
?>
