<?php 

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];
$menu_name = "";
$position = "";
$visible = "";
 
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
  // 
}
?>

<?php $page_title = 'Edit Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <!-- Single Page proecessing has the info stay in the form for later editing -->
    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . html(url($id))); ?>" method="post">
      <dl>
        <label class='bold' for="menu-name">Menu Name</label>
        <input type="text" name="menu_name" value="<?php echo $menu_name; ?>">
      <dl>

      </dl>
        <label class='bold' for="position">Position</label>
        <select name="position" type="checkbox">
          <option value="1">1</option>
        </select>
      </dl>

      <dl>
        <label class='bold' for="visible">Visible</label>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" name="visible" value="1">
      </dl>

      <div id="operations">
        <input type="submit" value="Edit Subject">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>