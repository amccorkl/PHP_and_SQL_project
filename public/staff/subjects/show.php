<?php require_once('../../../private/initialize.php'); ?>

<?php 
//null coalescing operatior instead of longer ----> $id = isset($_GET['id']) ? $_GET['id'] : '1'; with '1' as the default value
$id = $_GET['id'] ?? '1';
?>

<?php $page_title = "Show Subject"; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
    Subject ID: <?php echo html($id); ?>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
