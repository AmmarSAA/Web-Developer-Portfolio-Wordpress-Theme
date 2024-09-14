<?php
/* Template Name: Hero Section */
?>

<section>
    <div class="flex flex-col items-center justify-center pb-10 pt-20 sm:py-20 lg:flex-row lg:px-10 lg:py-40 xl:gap-20">
        <div class="relative w-full select-none space-y-6 xl:w-1/2 2xl:w-6/12 2xl:space-y-8">
            <h2 class="text-5xl font-bold text-main sm:text-6xl md:text-7xl">
                <?php echo esc_html(text: get_theme_mod(name: 'hero_name', default_value: 'Syed Ammar Ahmed')); ?>
            </h2>
            <div class="font-secondary typewriter-text text-3xl sm:text-4xl xl:text-5xl">
                <span><?php echo esc_html(text: get_theme_mod(name: 'hero_secondary_text', default_value: '')); ?></span>
            </div>
            <p class="font-secondary text-base tracking-tight text-primary-foreground sm:text-xl md:text-2xl 2xl:mr-10">
                <?php echo esc_html(text: get_theme_mod(name: 'hero_description', default_value: 'Blending Code and Creativity: A Dynamic All-Rounder in Computer Science, Mastering Web & Mobile App Development.')); ?>
            </p>
            <div class="flex gap-2 sm:gap-5">
                <a href="#contact">
                    <div
                        class="border-2 text-base px-2 py-[.1rem] sm:py-1 sm:px-3 md:text-xl 2xl:text-2xl rounded-md hover:opacity-90 flex items-center transition-all hover:scale-105 hover:translate-x-1 cursor-pointer gap-1 border-main bg-transparent text-primary-foreground">
                        <button><?php _e(text: 'Contact Me', domain: 'web-developer-portfolio'); ?></button>
                        <img alt="resume-download-btn" loading="lazy" width="22" height="22" decoding="async"
                            data-nimg="1" class="w-4 2xl:w-6" style="color: transparent"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/arrow.svg" />
                    </div>
                </a>
                <a href="<?php echo esc_url(url: get_theme_mod(name: 'resume_link', default_value: 'https://drive.google.com/file/d/1KxX-Q5MHIkttEMLmu6L0qXDZBSxV5szp/view?usp=drive_link')); ?>"
                    target="_blank">
                    <div
                        class="border-2 text-base px-2 py-[.1rem] sm:py-1 sm:px-3 md:text-xl 2xl:text-2xl rounded-md hover:opacity-90 flex items-center transition-all hover:scale-105 hover:translate-x-1 cursor-pointer gap-1 border-transparent bg-main text-primary">
                        <button><?php _e(text: 'Download Resume', domain: 'web-developer-portfolio'); ?></button>
                        <img alt="resume-download-btn" loading="lazy" width="22" height="22" decoding="async"
                            data-nimg="1" class="w-4 2xl:w-6" style="color: transparent"
                            src="<?php echo get_template_directory_uri(); ?>/assets/svg/download.svg" />
                    </div>
                </a>
            </div>
        </div>
        <div class="-z-10 -mt-10">
            <div class="blob-container h-80 w-80 scale-90 opacity-80 blur-3xl sm:scale-100">
                <div class="blob h-full w-full"></div>
            </div>
        </div>
    </div>
</section>