<?php
function my_nextjs_theme_enqueue_scripts(): void
{
    // wp_enqueue_style('ma in-style', get_template_directory_uri() . '/assets/css/d76beb3d870e0ea3.css');
    // wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action(hook_name: 'wp_enqueue_scripts', callback: 'my_nextjs_theme_enqueue_scripts');

function saa_web_developer_portfolio_theme_customizer($wp_customize): void
{


    /* Hero Section Customization Starts Below */


    // Hero Section Settings
    $wp_customize->add_section('hero_section', array(
        'title' => __(text: 'Hero Section', domain: 'web-developer-portfolio'),
        'description' => __(text: 'Customize the Hero section.', domain: 'web-developer-portfolio'),
        'priority' => 30,
    ));

    // Setting for Hero Name
    $wp_customize->add_setting('hero_name', array(
        'default' => 'Syed Ammar Ahmed',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Control for Hero Name
    $wp_customize->add_control('hero_name', array(
        'label' => __(text: 'Name', domain: 'web-developer-portfolio'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    // Setting for Hero Description
    $wp_customize->add_setting('hero_description', array(
        'default' => 'Blending Code and Creativity: A Dynamic All-Rounder in Computer Science, Mastering Web & Mobile App Development.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    // Control for Hero Description
    $wp_customize->add_control('hero_description', array(
        'label' => __(text: 'Description', domain: 'web-developer-portfolio'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    // Setting for Resume Link
    $wp_customize->add_setting('resume_link', array(
        'default' => 'https://drive.google.com/file/d/1KxX-Q5MHIkttEMLmu6L0qXDZBSxV5szp/view?usp=drive_link',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Control for Resume Link
    $wp_customize->add_control('resume_link', array(
        'label' => __(text: 'Resume Link', domain: 'web-developer-portfolio'),
        'section' => 'hero_section',
        'type' => 'url',
    ));

    // Setting for Typewriter Text
    $wp_customize->add_setting('hero_typewriter_text', array(
        'default' => '@keyframes words { 0%, 20% { content: "Web Developer"; } 21%, 40% { content: "Full Stack Developer"; } 41%, 60% { content: "Coding Geek"; } 61%, 80% { content: "Mobile App Developer"; } 81%, to { content: "Creative SuperHero"; } }',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    // Control for Typewriter Text
    $wp_customize->add_control('hero_typewriter_text', array(
        'label' => __(text: 'Typewriter Text CSS', domain: 'web-developer-portfolio'),
        'section' => 'hero_section',
        'type' => 'textarea',
        'description' => __(text: 'Update this CSS to edit typewriter text.', domain: 'web-developer-portfolio'),
    ));


    /* About Section Customization Starts Below */


    // Add About Section
    $wp_customize->add_section('about_section', array(
        'title' => __(text: 'About Section', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Customize the About section.', domain: 'saa-web-developer-portfolio'),
        'priority' => 30,
    ));

    // Add Setting and Control for Section Title
    $wp_customize->add_setting('about_section_title', array(
        'default' => __(text: 'Who Am I', domain: 'saa-web-developer-portfolio'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_section_title', array(
        'label' => __(text: 'Section Title', domain: 'saa-web-developer-portfolio'),
        'section' => 'about_section',
        'type' => 'text',
    ));

    // Add Setting and Control for About Paragraphs
    $wp_customize->add_setting('about_paragraph_1', array(
        'default' => __(text: 'Hello, I\'m Syed Ammar Ahmed, a <span class="text-typewriter">passionate and innovative developer</span> deeply immersed in the world of technology. With a strong foundation in <span class="text-typewriter">JavaScript, Wordpress, PHP</span> And <span class="text-typewriter">Dart</span>, I excel in crafting dynamic and innovative solutions across various <span class="text-typewriter">web</span> and <span class="text-typewriter">mobile</span> application frameworks. I have a keen interest in exploring diverse technologies and thrive on solving complex problems.', domain: 'saa-web-developer-portfolio'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_paragraph_1', array(
        'label' => __(text: 'About Paragraph 1', domain: 'saa-web-developer-portfolio'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_paragraph_2', array(
        'default' => __(text: 'My journey in programming has been marked by a relentless drive for <span class="text-typewriter">learning and self-improvement</span>. I am known for my <span class="text-typewriter">quick adaptability</span> and enthusiasm in embracing new challenges. From frontend to backend development, I enjoy leveraging my skills to create impactful and <span class="text-typewriter">user-friendly web experiences</span>. I am actively seeking opportunities that allow me to apply my <span class="text-typewriter">expertise and creativity</span>.', domain: 'saa-web-developer-portfolio'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('about_paragraph_2', array(
        'label' => __(text: 'About Paragraph 2', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Enter the more text to display in the about section.(optional)', domain: 'saa-web-developer-portfolio'),
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    // Add Setting and Control for Years of Coding
    $wp_customize->add_setting('about_years_of_coding', array(
        'default' => __(text: '03+', domain: 'saa-web-developer-portfolio'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_years_of_coding', array(
        'label' => __(text: 'Years of Coding', domain: 'saa-web-developer-portfolio'),
        'section' => 'about_section',
        'type' => 'text',
    ));

    // Add Setting and Control for Completed Projects
    $wp_customize->add_setting('about_completed_projects', array(
        'default' => __(text: '07+', domain: 'saa-web-developer-portfolio'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_completed_projects', array(
        'label' => __(text: 'Completed Projects', domain: 'saa-web-developer-portfolio'),
        'section' => 'about_section',
        'type' => 'text',
    ));


    /* Contact Section Customization Starts Below */


    // Add section for contact details
    $wp_customize->add_section('contact_section', array(
        'title' => __(text: 'Contact Section', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Customize the contact section of the theme.', domain: 'saa-web-developer-portfolio'),
        'priority' => 80,
    ));

    // Add setting for email address
    $wp_customize->add_setting('contact_email', array(
        'default' => 's.ammarahmed14@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    // Add control for email address
    $wp_customize->add_control('contact_email', array(
        'label' => __(text: 'Contact Email', domain: 'saa-web-developer-portfolio'),
        'section' => 'contact_section',
        'type' => 'email',
    ));

    // Add setting for project call-to-action text
    $wp_customize->add_setting('project_cta_text', array(
        'default' => 'Have a project in mind?',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for project call-to-action text
    $wp_customize->add_control('project_cta_text', array(
        'label' => __(text: 'Project CTA Text', domain: 'saa-web-developer-portfolio'),
        'description' => 'Enter the text to display in the project call-to-action button.',
        'section' => 'contact_section',
        'type' => 'text',
    ));

    // Add setting for contact description text
    $wp_customize->add_setting('contact_description', array(
        'default' => 'Let&#x27;s collaborate and bring your ideas to life. I&#x27;m excited to work on innovative projects and explore new opportunities.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    // Add control for contact description text
    $wp_customize->add_control('contact_description', array(
        'label' => __(text: 'Contact Description', domain: 'saa-web-developer-portfolio'),
        'description' => 'Enter the text to display in the contact section.',
        'section' => 'contact_section',
        'type' => 'textarea',
    ));

    // Link 1
    $wp_customize->add_setting('link_1', array(
        'default' => 'https://github.com/ammarsaa',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('link_1', array(
        'label' => __(text: 'Link 1 URL', domain: 'saa-web-developer-portfolio'),
        'section' => 'contact_section',
        'type' => 'url',
    ));

    // Link 1 Logo
    $wp_customize->add_setting('link_1_logo', array(
        'default' => get_template_directory_uri() . '/assets/skills/github.svg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(manager: $wp_customize, id: 'link_1_logo', args: array(
        'label' => __(text: 'Link 1 Logo', domain: 'saa-web-developer-portfolio'),
        'section' => 'contact_section',
        'settings' => 'link_1_logo',
    )));

    // Link 2
    $wp_customize->add_setting('link_2', array(
        'default' => 'https://www.linkedin.com/in/ammarsaa',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('link_2', array(
        'label' => __(text: 'Link 2 URL', domain: 'saa-web-developer-portfolio'),
        'section' => 'contact_section',
        'type' => 'url',
    ));

    // Link 2 Logo
    $wp_customize->add_setting('link_2_logo', array(
        'default' => get_template_directory_uri() . '/assets/svg/linkedin.svg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(manager: $wp_customize, id: 'link_2_logo', args: array(
        'label' => __(text: 'Link 2 Logo', domain: 'saa-web-developer-portfolio'),
        'section' => 'contact_section',
        'settings' => 'link_2_logo',
    )));


    /* Footer Customization Starts Below */


    // Add section for footer settings
    $wp_customize->add_section('footer_section', array(
        'title' => __(text: 'Footer Settings', domain: 'saa-web-developer-portfolio'),
        'priority' => 90,
    ));

    // Add setting for footer text
    $wp_customize->add_setting('footer_text', array(
        'default' => '&copy; ' . date(format: 'Y') . ' WordPress Theme Designed And Developed By 💚 <b><a href="https://github.com/ammarsaa" target="_blank">Syed Ammar Ahmed</a></b>',
        'sanitize_callback' => 'wp_kses_post',
    ));

    // Add control for footer text
    $wp_customize->add_control('footer_text', array(
        'label' => __(text: 'Footer Text', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Enter the text to display in the footer. You can use HTML here.', domain: 'saa-web-developer-portfolio'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));

    // Add setting for Footer link
    $wp_customize->add_setting('footer_link', array(
        'default' => 'https://github.com/ammarsaa/Web-Developer-Portfolio-Wordpress-Theme',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for Footer link
    $wp_customize->add_control('footer_link', array(
        'label' => __(text: 'Footer Link', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Enter the URL.', domain: 'saa-web-developer-portfolio'),
        'section' => 'footer_section',
        'type' => 'url',
    ));

    // Add setting for link logo
    $wp_customize->add_setting('link_logo', array(
        'default' => get_template_directory_uri() . '/assets/skills/github.svg',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for link logo
    $wp_customize->add_control(new WP_Customize_Image_Control(manager: $wp_customize, id: 'link_logo', args: array(
        'label' => __(text: 'Change Logo', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Upload a logo for the link.', domain: 'saa-web-developer-portfolio'),
        'section' => 'footer_section',
        'settings' => 'github_logo',
    )));

    // Add setting for link text
    $wp_customize->add_setting('link_text', array(
        'default' => 'Give a star',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add control for "Give a Star" text
    $wp_customize->add_control('link_text', array(
        'label' => __(text: 'Link Text', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Enter the text to display next to the link logo.', domain: 'saa-web-developer-portfolio'),
        'section' => 'footer_section',
        'type' => 'text',
    ));



    /* Projects Section Customization Starts Below */


    // Add a section for Projects
    $wp_customize->add_section('projects_section', array(
        'title' => __(text: 'Projects', domain: 'saa-web-developer-portfolio'),
        'priority' => 100,
    ));

    // Add setting for the number of projects
    $wp_customize->add_setting('total_no_of_projects', array(
        'default' => 4,
        'sanitize_callback' => 'absint',
    ));

    // Add control for the number of projects
    $wp_customize->add_control('total_no_of_projects', array(
        'label' => __(text: 'Total No. of Projects', domain: 'saa-web-developer-portfolio'),
        'description' => __(text: 'Enter the number of projects you want to show on your portfolio', domain: 'saa-web-developer-portfolio'),
        'section' => 'projects_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'max' => 10,
        ),
    ));

    // Dynamically add settings and controls based on the number of projects
    $total_projects = get_theme_mod(name: 'total_no_of_projects', default_value: 4); // Get the number of projects
    $projects = saa_web_developer_portfolio_theme_projects(); // Get the projects data

    for ($i = 1; $i <= $total_projects; $i++) {
        // Check if the project data exists before accessing it
        $project_data = isset($projects[$i - 1]) ? $projects[$i - 1] : array(
            'title' => '',
            'image' => '',
            'description' => '',
            'live_demo' => '',
            'github' => ''
        );

        // Add setting and control for project title
        $wp_customize->add_setting("project_{$i}_title", array(
            'default' => $project_data['title'],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("project_{$i}_title", array(
            'label' => __(text: "Project {$i} Title", domain: 'saa-web-developer-portfolio'),
            'section' => 'projects_section',
            'type' => 'text',
        ));

        // Add setting and control for project image
        $wp_customize->add_setting("project_{$i}_image", array(
            'default' => $project_data['image'],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(manager: $wp_customize, id: "project_{$i}_image", args: array(
            'label' => __(text: "Project {$i} Image", domain: 'saa-web-developer-portfolio'),
            'section' => 'projects_section',
            'settings' => "project_{$i}_image",
        )));

        // Add setting and control for project description
        $wp_customize->add_setting("project_{$i}_description", array(
            'default' => $project_data['description'],
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("project_{$i}_description", array(
            'label' => __(text: "Project {$i} Description", domain: 'saa-web-developer-portfolio'),
            'section' => 'projects_section',
            'type' => 'textarea',
        ));

        // Add setting and control for project live demo
        $wp_customize->add_setting("project_{$i}_live_demo", array(
            'default' => $project_data['live_demo'],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("project_{$i}_live_demo", array(
            'label' => __(text: "Project {$i} Live Demo URL", domain: 'saa-web-developer-portfolio'),
            'section' => 'projects_section',
            'type' => 'url',
        ));

        // Add setting and control for project GitHub URL
        $wp_customize->add_setting("project_{$i}_github", array(
            'default' => $project_data['github'],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("project_{$i}_github", array(
            'label' => __(text: "Project {$i} GitHub URL", domain: 'saa-web-developer-portfolio'),
            'section' => 'projects_section',
            'type' => 'url',
        ));
    }



    /* Skills Section Customization Starts Below */


    // Define categories
    $categories = ['frontend', 'backend', 'tools'];
    $skills = saa_web_developer_portfolio_theme_skills(); // Retrieve default skills

    // Dynamically add settings and controls based on the number of skills in each category
    foreach ($categories as $category) {
        $total_skills = get_theme_mod(name: "total_no_of_{$category}_skills", default_value: count(value: $skills[$category]));

        // Add a section for each category
        $wp_customize->add_section("{$category}_skills_section", array(
            'title' => ucfirst(string: $category) . __(text: ' Skills', domain: 'saa-web-developer-portfolio'),
            'priority' => 25,
        ));

        // Add setting for the number of skills in each category
        $wp_customize->add_setting("total_no_of_{$category}_skills", array(
            'default' => count(value: $skills[$category]),
            'sanitize_callback' => 'absint',
        ));

        // Add control for the number of skills in each category
        $wp_customize->add_control("total_no_of_{$category}_skills", array(
            'label' => __(text: "Total No. of {$category} Skills", domain: 'saa-web-developer-portfolio'),
            'description' => __(text: "Enter the number of {$category} skills you want to show on your portfolio", domain: 'saa-web-developer-portfolio'),
            'section' => "{$category}_skills_section",
            'type' => 'number',
            'input_attrs' => array(
                'min' => 1,
                'max' => 20,
            ),
            'priority' => 1,
        ));

        for ($i = 1; $i <= $total_skills; $i++) {
            // Check if the skill exists before adding settings and controls
            $skill_name = isset($skills[$category][$i - 1]['name']) ? $skills[$category][$i - 1]['name'] : '';
            $skill_image = isset($skills[$category][$i - 1]['image']) ? $skills[$category][$i - 1]['image'] : '';

            // Define skill name setting and control
            $wp_customize->add_setting("{$category}_skill_{$i}_name", array(
                'default' => $skill_name,
                'sanitize_callback' => 'sanitize_text_field',
            ));
            $wp_customize->add_control("{$category}_skill_{$i}_name", array(
                'label' => __(text: "{$category} Skill {$i} Name", domain: 'saa-web-developer-portfolio'),
                'section' => "{$category}_skills_section",
                'type' => 'text',
            ));

            // Define skill image setting and control
            $wp_customize->add_setting("{$category}_skill_{$i}_image", array(
                'default' => $skill_image,
                'sanitize_callback' => 'esc_url_raw',
            ));
            $wp_customize->add_control(new WP_Customize_Image_Control(manager: $wp_customize, id: "{$category}_skill_{$i}_image", args: array(
                'label' => __(text: "{$category} Skill {$i} Image", domain: 'saa-web-developer-portfolio'),
                'section' => "{$category}_skills_section",
                'settings' => "{$category}_skill_{$i}_image",
            )));
        }
    }

}
add_action(hook_name: 'customize_register', callback: 'saa_web_developer_portfolio_theme_customizer');

// Register navigation menu
function saa_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'saa-web-developer-portfolio')
    ));
}
add_action('after_setup_theme', 'saa_register_menus');

// Create default menu on theme activation or if menu doesn't exist
function saa_create_default_menu() {
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        // Add menu items
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Home',
            'menu-item-url' => home_url('/'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 1
        ));
        
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'About',
            'menu-item-url' => home_url('/#about'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 2
        ));
        
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Skills',
            'menu-item-url' => home_url('/#skills'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 3
        ));
        
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Projects',
            'menu-item-url' => home_url('/#projects'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 4
        ));
        
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => 'Contact',
            'menu-item-url' => home_url('/#contact'),
            'menu-item-status' => 'publish',
            'menu-item-position' => 5
        ));
        
        // Assign to primary location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_switch_theme', 'saa_create_default_menu');
add_action('admin_init', 'saa_create_default_menu');

function saa_web_developer_portfolio_theme_skills($category = null, $count = null): array
{
    $default_skills = [
        'frontend' => [
            ['name' => 'HTML', 'image' => get_template_directory_uri() . '/assets/skills/html.svg'],
            ['name' => 'CSS', 'image' => get_template_directory_uri() . '/assets/skills/css.svg'],
            ['name' => 'JavaScript', 'image' => get_template_directory_uri() . '/assets/skills/javascript.svg'],
            ['name' => 'TypeScript', 'image' => get_template_directory_uri() . '/assets/skills/typescript.svg'],
            ['name' => 'React', 'image' => get_template_directory_uri() . '/assets/skills/react.svg'],
            ['name' => 'Tailwind', 'image' => get_template_directory_uri() . '/assets/skills/tailwindcss.svg'],
            ['name' => 'Next.js', 'image' => get_template_directory_uri() . '/assets/skills/nextjs.svg'],
        ],
        'backend' => [
            ['name' => 'Node.js', 'image' => get_template_directory_uri() . '/assets/skills/nodejs.svg'],
            ['name' => 'Express.js', 'image' => get_template_directory_uri() . '/assets/skills/expressjs.svg'],
            ['name' => 'MongoDB', 'image' => get_template_directory_uri() . '/assets/skills/mongodb.svg'],
            ['name' => 'Firebase', 'image' => get_template_directory_uri() . '/assets/skills/firebase.svg'],
        ],
        'tools' => [
            ['name' => 'Git', 'image' => get_template_directory_uri() . '/assets/skills/git.svg'],
            ['name' => 'GitHub', 'image' => get_template_directory_uri() . '/assets/skills/github.svg'],
            ['name' => 'Postman', 'image' => get_template_directory_uri() . '/assets/skills/postman.svg'],
            ['name' => 'VS Code', 'image' => get_template_directory_uri() . '/assets/skills/vscode.svg'],
            ['name' => 'Vercel', 'image' => get_template_directory_uri() . '/assets/skills/vercel.svg'],
        ],
    ];

    if ($category && isset($default_skills[$category])) {
        $category_skills = $default_skills[$category];
        if ($count) {
            return array_slice(array: $category_skills, offset: 0, length: $count);
        }
        return $category_skills;
    }

    return $default_skills;
}

function get_skills_from_customizer(): array
{
    $categories = ['frontend', 'backend', 'tools'];
    $skills = [];

    foreach ($categories as $category) {
        $total_skills = absint(maybeint: get_theme_mod(name: "total_no_of_{$category}_skills", default_value: count(value: saa_web_developer_portfolio_theme_skills(category: $category))));
        $default_skills = saa_web_developer_portfolio_theme_skills(category: $category, count: $total_skills); // Pass the total count

        $category_skills = [];
        for ($i = 1; $i <= $total_skills; $i++) {
            $default_skill = isset($default_skills[$i - 1]) ? $default_skills[$i - 1] : ['name' => '', 'image' => ''];
            $category_skills[] = [
                'name' => get_theme_mod(name: "{$category}_skill_{$i}_name", default_value: $default_skill['name']),
                'image' => get_theme_mod(name: "{$category}_skill_{$i}_image", default_value: $default_skill['image']),
            ];
        }
        $skills[$category] = $category_skills;
    }

    return $skills;
}
function saa_web_developer_portfolio_theme_projects($count = 4): array
{
    $default_projects = [
        [
            'title' => 'Library Management System',
            'image' => get_template_directory_uri() . '/assets/projects/lms.png',
            'description' => 'Library Management System, Made using PHP language with PHPMyAdmin as database for Structured Query Language(SQL).',
            'live_demo' => '#',
            'github' => 'https://github.com/ammarsaa/lms'
        ],
        [
            'title' => 'ShopSmart',
            'image' => get_template_directory_uri() . '/assets/projects/shopSmart.png',
            'description' => 'ShopSmart is an e-commerce platform that aims to provide users with a seamless shopping experience. Our platform offers a wide range of products from various categories.',
            'live_demo' => '#',
            'github' => 'https://github.com/ammarsaa/shopsmart'
        ],
        [
            'title' => 'KaamKaro',
            'image' => get_template_directory_uri() . '/assets/projects/kaamKaro.png',
            'description' => 'KaamKaro is a simple React-based Todo web app that allows users to manage tasks. Users can add, update, and delete tasks.',
            'live_demo' => 'https://kaamkaro.vercel.app',
            'github' => 'https://github.com/ammarsaa/kaamkaro'
        ],
        [
            'title' => 'Xolen.pk',
            'image' => get_template_directory_uri() . '/assets/projects/xolen.pk.png',
            'description' => 'Xolen.pk is a dream footwear store for all the shoe lovers. We have a wide range of shoes for all occasions.',
            'live_demo' => 'https://xolen-pk-backend.up.railway.app',
            'github' => 'https://www.github.com/xolen-pk/xolen-pk'
        ]
    ];

    // Ensure there are enough default projects
    while (count(value: $default_projects) < $count) {
        $default_projects[] = [
            'title' => '',
            'image' => '',
            'description' => '',
            'live_demo' => '',
            'github' => ''
        ];
    }

    return array_slice(array: $default_projects, offset: 0, length: $count);
}


function get_projects_from_customizer(): array
{
    $total_projects = absint(maybeint: get_theme_mod(name: 'total_no_of_projects', default_value: 4));
    $projects = [];

    $default_projects = saa_web_developer_portfolio_theme_projects(count: $total_projects); // Pass the total count

    for ($i = 1; $i <= $total_projects; $i++) {
        $default_project = $default_projects[$i - 1];

        $projects[] = [
            'title' => get_theme_mod(name: "project_{$i}_title", default_value: $default_project['title']),
            'image' => get_theme_mod(name: "project_{$i}_image", default_value: $default_project['image']),
            'description' => get_theme_mod(name: "project_{$i}_description", default_value: $default_project['description']),
            'live_demo' => get_theme_mod(name: "project_{$i}_live_demo", default_value: $default_project['live_demo']),
            'github' => get_theme_mod(name: "project_{$i}_github", default_value: $default_project['github']),
        ];
    }

    return $projects;
}


// Create contact messages table on theme activation
function create_contact_messages_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        email varchar(100) NOT NULL,
        subject varchar(200) NOT NULL,
        message text NOT NULL,
        ip_address varchar(45),
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        is_read tinyint(1) DEFAULT 0,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_setup_theme', 'create_contact_messages_table');

// Handle contact form submission
add_action('wp_ajax_send_contact_form', 'send_contact_form');
add_action('wp_ajax_nopriv_send_contact_form', 'send_contact_form');

function send_contact_form(): void {
    global $wpdb;
    
    // Check nonce
    if (!isset($_POST['contact_nonce']) || !wp_verify_nonce($_POST['contact_nonce'], 'submit_contact_form')) {
        wp_send_json_error(['message' => 'Security verification failed.']);
        wp_die();
    }

    // Sanitize input
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Validate
    if (empty($email) || empty($subject) || empty($message)) {
        wp_send_json_error(['message' => 'All fields are required.']);
        wp_die();
    }

    // Save to database
    $table_name = $wpdb->prefix . 'contact_messages';
    $inserted = $wpdb->insert(
        $table_name,
        [
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'ip_address' => $ip_address
        ],
        ['%s', '%s', '%s', '%s']
    );

    if ($inserted) {
        // Try to send email notification (won't fail if SMTP not configured)
        $to = 'syedammarahmed14@outlook.com';
        $email_subject = 'New Contact Form Message: ' . $subject;
        $email_message = "You have received a new message:\n\n";
        $email_message .= "From: $email\n";
        $email_message .= "Subject: $subject\n\n";
        $email_message .= "Message:\n$message\n\n";
        $email_message .= "View all messages: " . admin_url('admin.php?page=contact-messages');
        
        $headers = ['Reply-To: ' . $email];
        @wp_mail($to, $email_subject, $email_message, $headers); // @ suppresses errors if mail fails

        wp_send_json_success(['message' => 'Thank you! Your message has been received.']);
    } else {
        wp_send_json_error(['message' => 'Failed to save your message. Please try again.']);
    }

    wp_die();
}

// Add admin menu for viewing messages
add_action('admin_menu', 'add_contact_messages_menu');

function add_contact_messages_menu() {
    add_menu_page(
        'Contact Messages',
        'Contact Messages',
        'manage_options',
        'contact-messages',
        'display_contact_messages',
        'dashicons-email',
        25
    );
}

// Display messages in admin
function display_contact_messages() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_messages';
    
    // Mark as read if viewing
    if (isset($_GET['mark_read']) && is_numeric($_GET['mark_read'])) {
        $wpdb->update($table_name, ['is_read' => 1], ['id' => intval($_GET['mark_read'])]);
    }
    
    // Delete message
    if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        $wpdb->delete($table_name, ['id' => intval($_GET['delete'])]);
    }
    
    $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    $unread_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE is_read = 0");
    
    ?>
    <div class="wrap">
        <h1>Contact Messages <span class="update-count"><?php echo $unread_count; ?> unread</span></h1>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="20%">Email</th>
                    <th width="25%">Subject</th>
                    <th width="35%">Message</th>
                    <th width="10%">Date</th>
                    <th width="5%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($messages)): ?>
                    <tr><td colspan="6">No messages yet.</td></tr>
                <?php else: ?>
                    <?php foreach ($messages as $msg): ?>
                        <tr style="<?php echo $msg->is_read ? '' : 'background: #fff8dc;'; ?>">
                            <td><?php echo $msg->id; ?></td>
                            <td><a href="mailto:<?php echo esc_attr($msg->email); ?>"><?php echo esc_html($msg->email); ?></a></td>
                            <td><strong><?php echo esc_html($msg->subject); ?></strong></td>
                            <td><?php echo esc_html(substr($msg->message, 0, 100)) . (strlen($msg->message) > 100 ? '...' : ''); ?></td>
                            <td><?php echo date('M j, Y g:i A', strtotime($msg->created_at)); ?></td>
                            <td>
                                <?php if (!$msg->is_read): ?>
                                    <a href="?page=contact-messages&mark_read=<?php echo $msg->id; ?>">Mark Read</a> |
                                <?php endif; ?>
                                <a href="?page=contact-messages&delete=<?php echo $msg->id; ?>" onclick="return confirm('Delete this message?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}









// Remove WordPress version exposure
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Add Schema.org markup
add_action('wp_head', 'add_schema_markup');
function add_schema_markup() {
    if (is_front_page()) {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => get_bloginfo('name'),
            'url' => home_url(),
            'jobTitle' => 'Full Stack Developer',
            'description' => get_bloginfo('description'),
            'sameAs' => [
                'https://github.com/AmmarSAA',
                'https://linkedin.com/in/AmmarSAA'
            ]
        ];
        echo '<script type="application/ld+json">' . json_encode($schema) . '</script>';
    }
}

// Enable lazy loading for images
add_filter('wp_lazy_loading_enabled', '__return_true');
add_filter('wp_get_attachment_image_attributes', function($attr) {
    $attr['loading'] = 'lazy';
    return $attr;
}, 10, 1);

// Enable WP Mail SMTP Pro features (local development)
add_filter('wp_mail_smtp_core_is_pro', '__return_true');
