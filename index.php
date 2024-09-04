<?php
// Template Name: Complete Portfolio
get_header(); ?>
<div>
    <div class="px-4"></div>
    <?php get_template_part('hero'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part('about'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part('skills'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part('projects'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part('contact'); ?>
</div>
</div>
<!-- <div id="content">
    <?php
    // Include the static HTML content from the Next.js build
    //include 'index.html';
    ?>
</div> -->

<?php get_footer(); ?>
</main>