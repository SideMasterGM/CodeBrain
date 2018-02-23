<?php 
    include (PDS_PRIVATE_DESKTOP_PHP."/loader.php"); 
    include (PDS_PRIVATE_DESKTOP_PHP."/navbar.php"); 
?>

<!-- #Top Bar -->
<section>
    <!-- #END# Left Sidebar -->
    <?php include (PDS_PRIVATE_DESKTOP_PHP."/left_sidebar.php"); ?>

    <!-- Right Sidebar -->
    <?php include (PDS_PRIVATE_DESKTOP_PHP."/right_sidebar.php"); ?>
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <?php include (PDS_PRIVATE_DESKTOP_PHP."/content.php"); ?>
</section>

<?php include (PDS_PRIVATE_DESKTOP_PHP."/foot_js.php"); ?>