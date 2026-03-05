<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-scrollbar">

<head>
    <meta charset="<?php bloginfo(show: 'charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Welcome to my personal portfolio website. I am a passionate and skilled full stack developer with expertise in modern web technologies, including HTML, CSS, JavaScript, TypeScript, React, Next.js, Node.js, Express.js, MongoDB, and more. Explore the portfolio to learn more about my projects, skills, and experience in building dynamic and responsive web applications.">

    <!-- Google Adsense -->
    <meta name="google-adsense-account" content="ca-pub-2314340578474791">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">


    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tailwind.css?v=1.3">
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

    <!-- Clarity tracking code for https://ammarsaa.com/ -->
    <script>
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments) };
            t = l.createElement(r); t.async = 1; t.src = "https://www.clarity.ms/tag/" + i + "?ref=bwt";
            y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "vdaxzc9ooo");
    </script>

    <?php wp_head(); ?>
</head>

<body class="__variable_b5b832 __variable_b7db21 __variable_2e4512">
    <header>
        <div class="flex justify-between p-2 md:justify-center">
            <nav aria-label="Main navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'z-10 gap-14 text-xl text-secondary-foreground hidden md:flex',
                    'items_wrap' => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                    'fallback_cb' => '__return_false'
                ));
                ?>
            </nav>
            <button id="mobile-menu-btn" class="cursor-pointer md:hidden" aria-label="Toggle mobile menu" aria-expanded="false">
                <svg id="menu-icon" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <svg id="close-icon" class="hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <div class="absolute -top-40 -z-10 xl:-top-48 xl:left-1/3">
                <div
                    class="before:bg-gradient-radial after:bg-gradient-conic z-[-1] before:absolute before:h-[200px] before:w-[180px] before:-translate-x-1/2 before:rounded-full before:from-white before:to-transparent before:blur-2xl before:content-[&#x27;&#x27;] after:absolute after:-z-20 after:h-[180px] after:w-[240px] after:translate-x-1/3 after:from-main after:via-main after:blur-2xl after:content-[&#x27;&#x27;] before:lg:h-[400px] xl:before:h-[300px] xl:before:w-[400px] before:dark:bg-gradient-to-br before:dark:from-transparent before:dark:to-main before:dark:opacity-10 after:dark:from-main after:dark:via-main after:dark:opacity-40">
                </div>
            </div>
        </div>
    </header>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden fixed inset-0 bg-black bg-opacity-95 z-50">
        <nav class="flex items-center justify-center h-full">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex flex-col gap-8 text-2xl text-secondary-foreground text-center',
                'fallback_cb' => '__return_false'
            ));
            ?>
        </nav>
    </div>
    
    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        menuBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                menuBtn.setAttribute('aria-expanded', 'false');
            } else {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                menuBtn.setAttribute('aria-expanded', 'true');
            }
        });
        
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                menuBtn.setAttribute('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>