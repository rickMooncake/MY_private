<?php
function check_user_acl($user, $permission)
{
  if($permission == "launch_pangolinette")
  {
    return TRUE;
  }
  else
  {
    return FALSE;
  }
}
?>
