<?php 
    include (PD_PUBLIC_PHP."/loader.php"); 
    include (PD_PUBLIC_PHP."/navbar.php"); 
?>

<!-- #Top Bar -->
<section>
    <!-- #END# Left Sidebar -->
    <?php include (PD_PUBLIC_PHP."/left_sidebar.php"); ?>

    <!-- Right Sidebar -->
    <?php include (PD_PUBLIC_PHP."/right_sidebar.php"); ?>
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <?php include (PD_PUBLIC_PHP."/content.php"); ?>
</section>

<?php include (PD_PUBLIC_PHP."/foot_js.php"); ?>