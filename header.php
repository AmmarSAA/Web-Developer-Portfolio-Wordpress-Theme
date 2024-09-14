<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-scrollbar">

<head>
    <meta charset="<?php bloginfo(show: 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Welcome to my personal portfolio website. I am a passionate and skilled full stack developer with expertise in modern web technologies, including HTML, CSS, JavaScript, TypeScript, React, Next.js, Node.js, Express.js, MongoDB, and more. Explore the portfolio to learn more about my projects, skills, and experience in building dynamic and responsive web applications.">

    <!-- Google Adsense -->
    <meta name="google-adsense-account" content="ca-pub-2314340578474791">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tailwind.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

    <title>
        <?php
        // Get the current title
        $title = wp_get_document_title();

        // Fallback if the title is empty
        if (empty($title)) {
            $title = get_bloginfo(show: 'description');
        }

        // Output the title as plain text
        echo esc_html(text: $title);
        ?>
    </title>

    <?php wp_head(); ?>
</head>

<body class="__variable_b5b832 __variable_b7db21 __variable_2e4512">
    <header>
        <div class="flex justify-between p-2 md:justify-center">
            <nav>
                <ul class="z-10 gap-14 text-xl text-secondary-foreground hidden md:flex">
                    <li><a href="/"><span class="NavBar_navLink__0HK8i">Home</span></a></li>
                    <li><a href="#about"><span class="NavBar_navLink__0HK8i">About</span></a></li>
                    <li><a href="#skills"><span class="NavBar_navLink__0HK8i">Skills</span></a></li>
                    <li><a href="#projects"><span class="NavBar_navLink__0HK8i">Projects</span></a></li>
                    <li><a href="#contact"><span class="NavBar_navLink__0HK8i">Contact</span></a></li>
                </ul>
            </nav>
            <div class="cursor-pointer md:hidden">
                <img alt="bar-icon" loading="lazy" width="30" height="30" decoding="async"
                    src="<?php echo get_template_directory_uri(); ?>/assets/svg/bar.svg" />
            </div>
            <div class="absolute -top-40 -z-10 xl:-top-48 xl:left-1/3">
                <div
                    class="before:bg-gradient-radial after:bg-gradient-conic z-[-1] before:absolute before:h-[200px] before:w-[180px] before:-translate-x-1/2 before:rounded-full before:from-white before:to-transparent before:blur-2xl before:content-[&#x27;&#x27;] after:absolute after:-z-20 after:h-[180px] after:w-[240px] after:translate-x-1/3 after:from-main after:via-main after:blur-2xl after:content-[&#x27;&#x27;] before:lg:h-[400px] xl:before:h-[300px] xl:before:w-[400px] before:dark:bg-gradient-to-br before:dark:from-transparent before:dark:to-main before:dark:opacity-10 after:dark:from-main after:dark:via-main after:dark:opacity-40">
                </div>
            </div>
        </div>
    </header>
</body>

</html>