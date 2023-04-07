<?php 

require_once('../../../private/initialize.php');

//if not post request, redirect
if(is_post_request()) {
  //handles values sent by form in new.php
  $page_name = $_POST['page_name'] ?? ''; 
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? ''; 
  
  echo 'Form perameters<br />';
  echo 'Page name: ' . $page_name . '<br />';
  echo 'Position: ' . $position . '<br />';
  echo 'Visible: ' . $visible . '<br />';
} else {
  redirect_to(url_for('/staff/pages/new.php'));
}

?>