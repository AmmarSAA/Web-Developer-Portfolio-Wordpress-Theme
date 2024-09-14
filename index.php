<?php
// Template Name: Complete Portfolio
get_header(); ?>
<div>
    <div class="px-4"></div>
    <?php get_template_part(slug: 'hero'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part(slug: 'about'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part(slug: 'skills'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part(slug: 'projects'); ?>
    <div class="border border-main/40"></div>
    <?php get_template_part(slug: 'contact'); ?>
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