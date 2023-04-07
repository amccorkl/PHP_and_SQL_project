<?php 

require_once('../../../private/initialize.php');
 
$test = $_GET['test'] ?? '';

if($test == '404'){
  error_404();
} else if($test == '500'){
  error_500();
} else if($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php')); 
} 
?>

<?php $page_title = 'Create Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a href="<?php echo url_for('/staff/subjects/index.php'); ?>" class="back-link">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create New Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/create.php'); ?>" method="post">
      <dl>
        <label class='bold' for="menu-name">Menu Name</label>
        <input type="text" name="menu_name" value="">
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
        <input type="submit" value="Create Subject">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
