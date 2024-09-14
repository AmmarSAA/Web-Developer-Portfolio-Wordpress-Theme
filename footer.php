<?php
/* Template Name: Footer Section */
?>

<footer class="border-t bg-main/30 py-4">
    <div class="flex justify-around uppercase">
        <div class="text-center text-xs md:text-lg">
            <p>
                <?php echo wp_kses_post(data: get_theme_mod(name: 'footer_text', default_value: '&copy; ' . date(format: 'Y') . ' WordPress Theme Designed And Developed By 💚 <b><a href="https://github.com/ammarsaa" target="_blank">Syed Ammar Ahmed</a></b>')); ?>
            </p>
        </div>
        <div>
            <a class="flex items-center gap-1 hover:cursor-pointer"
                href="<?php echo esc_url(url: get_theme_mod(name: 'github_link', default_value: 'https://github.com/ammarsaa/ammarsaa.me')); ?>"
                target="_blank">
                <img alt="github" loading="lazy" width="20" height="20" decoding="async" class="w-4"
                    style="color: transparent"
                    src="<?php echo esc_url(url: get_theme_mod(name: 'github_logo', default_value: get_template_directory_uri() . '/assets/skills/github.svg')); ?>" />
                <p class="text-xs transition hover:text-main md:text-lg">
                    <?php echo esc_html(text: get_theme_mod(name: 'give_a_star_text', default_value: 'Give a star')); ?>
                </p>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>