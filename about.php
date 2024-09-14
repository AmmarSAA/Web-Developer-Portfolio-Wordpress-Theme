<?php
/* Template Name: About Section */
?>

<section id="about">
    <div class="flex flex-col space-y-6 py-8 lg:px-20 2xl:px-72">
        <h3 class="text-center font-heading text-5xl md:text-6xl font-bold uppercase text-primary-foreground">
            <?php echo esc_html(text: get_theme_mod(name: 'about_section_title', default_value: 'Who Am I')); ?>
        </h3>
        <div class="space-y-3 text-justify font-secondary text-base leading-6 tracking-tight text-secondary-foreground md:text-xl xl:text-center xl:text-2xl">
            <p>
                <?php echo wp_kses_post(data: get_theme_mod(name: 'about_paragraph_1', default_value: 'Hello, I\'m Syed Ammar Ahmed, a passionate and innovative developer deeply immersed in the world of technology. With a strong foundation in JavaScript, PHP, and Dart, I excel in crafting dynamic and innovative solutions across various web and mobile application frameworks. I have a keen interest in exploring diverse technologies and thrive on solving complex problems.')); ?>
            </p>
            <p>
                <?php echo wp_kses_post(data: get_theme_mod(name: 'about_paragraph_2', default_value: 'My journey in programming has been marked by a relentless drive for learning and self-improvement. I am known for my quick adaptability and enthusiasm in embracing new challenges. From frontend to backend development, I enjoy leveraging my skills to create impactful and user-friendly web experiences. I am actively seeking opportunities that allow me to apply my expertise and creativity.')); ?>
            </p>
        </div>
        <div class="flex w-full select-none justify-between uppercase sm:justify-center sm:gap-20">
            <div class="flex gap-2">
                <p class="text-5xl font-bold text-main sm:text-6xl xl:text-7xl">
                    <?php echo esc_html(text: get_theme_mod(name: 'about_years_of_coding', default_value: '02+')); ?>
                </p>
                <div class="flex flex-col items-center justify-center text-base leading-5 tracking-tighter sm:text-xl sm:leading-6 xl:text-2xl xl:leading-7">
                    <span class="text-primary-foreground">Years Of</span><span class="tracking-wide text-primary-foreground">Coding</span>
                </div>
            </div>
            <div class="flex gap-2">
                <p class="text-5xl font-bold text-main sm:text-6xl xl:text-7xl">
                    <?php echo esc_html(text: get_theme_mod(name: 'about_completed_projects', default_value: '07+')); ?>
                </p>
                <div class="flex flex-col items-center justify-center text-base leading-5 tracking-tighter sm:text-xl sm:leading-6 xl:text-2xl xl:leading-7">
                    <span class="text-primary-foreground">Completed</span><span class="tracking-wide text-primary-foreground">Projects</span>
                </div>
            </div>
        </div>
    </div>
</section>
