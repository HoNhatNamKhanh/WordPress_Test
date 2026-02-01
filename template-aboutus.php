<?php

/**
 * Template name: about-us
 */
?>

<?php include('header.php'); ?>
<div class="row">
    <div class="col-lg-6">
        <h1>About us content</h1>
    </div>
    <div class="col-lg-6">
        <p>This is description</p>
        <?php get_template_part('./includes/section', 'content') ?>
    </div>
</div>

<?php include('footer.php') ?>