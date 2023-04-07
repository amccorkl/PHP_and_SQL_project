<?php 

require_once('../../../private/initialize.php');

//if not post request, redirect
if(is_post_request()) {
  //handles values sent by form in new.php
  $menu_name = $_POST['menu_name'] ?? ''; 
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? ''; 
  
  echo 'Form perameters<br />';
  echo 'Menu name: ' . $menu_name . '<br />';
  echo 'Position: ' . $position . '<br />';
  echo 'Visible: ' . $visible . '<br />';
} else {
  redirect_to(url_for('/staff/subjects/new.php'));
}

?>