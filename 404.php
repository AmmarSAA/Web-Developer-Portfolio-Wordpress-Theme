<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * Template Name: 404 Page
 * @package Web Developer Portfolio 
 * */
get_header(); ?>

<div style="text-align: center; padding: 50px;">
    <!-- Output the content entered in the WordPress editor -->
    <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();  // This will display the content from the WordPress editor
            endwhile;
        endif;
    ?>

    <!-- If no content is found, display the default 404 message -->
    <?php if (!have_posts()) : ?>
        <div style="
            font-family: system-ui, 'Segoe UI', Roboto, Helvetica, Arial,
            sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
            height: 100vh;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        ">
            <div>
                <style>
                    body {
                        color: #000;
                        background: #fff;
                        margin: 0;
                    }

                    .next-error-h1 {
                        border-right: 1px solid rgba(0, 0, 0, 0.3);
                    }

                    @media (prefers-color-scheme: dark) {
                        body {
                            color: #fff;
                            background: #000;
                        }

                        .next-error-h1 {
                            border-right: 1px solid rgba(255, 255, 255, 0.3);
                        }
                    }
                </style>
                <h1 class="next-error-h1" style="
                    display: inline-block;
                    margin: 0 20px 0 0;
                    padding: 0 23px 0 0;
                    font-size: 24px;
                    font-weight: 500;
                    vertical-align: top;
                    line-height: 49px;
                ">
                    404
                </h1>
                <div style="display: inline-block">
                    <h2 style="
                        font-size: 14px;
                        font-weight: 400;
                        line-height: 49px;
                        margin: 0;
                    ">
                        This page could not be found.
                    </h2>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>