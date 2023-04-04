<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>

<!-- shared_path is in the initalize folder and says to take that folder, then look for the public folder then the shared folder, it replaces using the ('../../../staff_header.php')-->
<?php include(SHARED_PATH . '/staff_header.php'); ?>

  <div id="content">
    <div id="main-menu">
      <h2>Main Menu</h2>
      <ul></ul>
      <li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Subjects</a></li>
    </div>
  </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
  