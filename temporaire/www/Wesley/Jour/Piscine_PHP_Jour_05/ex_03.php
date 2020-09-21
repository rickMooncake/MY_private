<?php
function my_add_to_cookie($pseudo, $prenom)
{
  $_COOKIE[$pseudo]=$prenom."toto";
}
