<?php 

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/staff/pages/index.php'));
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

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>

  <div class="page edit">
    <h1>Edit Page</h1>

    <!-- Single Page proecessing has the info stay in the form for later editing -->
    <form action="<?php echo url_for('/staff/pages/edit.php?id=' . html(url($id))); ?>" method="post">
      <dl>
        <label class='bold' for="page-name">Menu Name</label>
        <input type="text" name="page_name" value="<?php echo html($menu_name); ?>">
      <dl>

      </dl>
        <label class='bold' for="position">Position</label>
        <select name="position" type="checkbox">
          <option value="1"<?php if($position == '1'){ echo ' selected'; } ?>>1</option>
        </select>
      </dl>

      <dl>
        <label class='bold' for="visible">Visible</label>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" name="visible" value="1" <?php if($visible == '1'){ echo ' checked';} ?>>
      </dl>

      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>