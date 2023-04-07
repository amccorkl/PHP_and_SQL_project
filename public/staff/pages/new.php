<?php 

require_once('../../../private/initialize.php');

$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()) {

  // Handle form values sent by new.php

  $menu_name = $_POST['menu_name'] ?? '';
  $position = $_POST['position'] ?? '';
  $visible = $_POST['visible'] ?? '';

  echo "Form parameters<br />";
  echo "Menu name: " . $menu_name . "<br />";
  echo "Position: " . $position . "<br />";
  echo "Visible: " . $visible . "<br />";
}

?>

<?php $page_title = 'Create Page'; ?>
<?php include (SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>

  <div class="page new">
    <h1>Create New Page</h1>

    <form action="<?php echo url_for('/staff/pages/new.php');  ?>" method="post">
    <label class='bold' for="menu-name">Menu Name</label>
        <input type="text" name="menu_name" value="<?php echo html($menu_name); ?>">
      <dl>

      </dl>
        <label class='bold' for="position">Position</label>
        <select name="position" type="checkbox">
          <option value="1"<?php if($position == 1) { echo ' selected'; } ?>>1</option>
        </select>
      </dl>

      <dl>
        <label class='bold' for="visible">Visible</label>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" name="visible" value="1" <?php if($visible == '1'){ echo ' checked'; } ?>>
      </dl>

      <div id="operations">
        <input type="submit" value="Create Page">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
