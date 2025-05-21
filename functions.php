<?php
// Register the navigation menu (uncomment if you decide to use WordPress Menus)
/*function arndale_register_menus() {
    register_nav_menu('primary', __('Primary Menu', 'arndale'));
}
add_action('init', 'arndale_register_menus');*/


function arndale_get_page_link_by_title($title) {
    $query = new WP_Query(array(
        'post_type' => 'page',
        'title'     => $title,
        'posts_per_page' => 1
    ));

    if ($query->have_posts()) {
        $query->the_post();
        $link = get_permalink();
        wp_reset_postdata();
        return $link;
    }

    // Return the URL to the 404 page
    return site_url('/404');
}


// Fallback for navigation menu if no menu is set
function arndale_default_menu() {
    ?>
    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="<?php echo home_url(); ?>" class="nav-item nav-link active">Home</a>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="<?php echo arndale_get_page_link_by_title('About'); ?>" class="dropdown-item">About Arndale</a>
                <a href="<?php echo arndale_get_page_link_by_title('Curriculum'); ?>" class="dropdown-item">Our Curriculum</a>
                <a href="<?php echo arndale_get_page_link_by_title('Extra-curricular'); ?>" class="dropdown-item">Extra-curricular</a>
                <a href="<?php echo arndale_get_page_link_by_title('Downloads'); ?>" class="dropdown-item">Downloads</a>
                <a href="<?php echo arndale_get_page_link_by_title('Board'); ?>" class="dropdown-item">Advisory Board</a>
                <a href="<?php echo arndale_get_page_link_by_title("Founder's Day"); ?>" class="dropdown-item">Founder's Day</a>
                <a href="<?php echo arndale_get_page_link_by_title('Our Team'); ?>" class="dropdown-item">Our Team</a>
                <a href="<?php echo arndale_get_page_link_by_title("Principal's Message"); ?>" class="dropdown-item">Principal's Message</a>
                <a href="<?php echo arndale_get_page_link_by_title('School Safety & Security'); ?>" class="dropdown-item">School Safety & Security</a>
                <a href="https://excelgenerator.onrender.com" class="dropdown-item" target="_blank">Web Apps</a>
            </div>
        </div>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Students' Life</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="<?php echo arndale_get_page_link_by_title('Sport at Arndale'); ?>" class="dropdown-item">Sport at Arndale</a>
                <a href="<?php echo arndale_get_page_link_by_title('Online Safety'); ?>" class="dropdown-item">Online Safety</a>
                <a href="<?php echo arndale_get_page_link_by_title("Duke of Edinburgh Int'l Award"); ?>" class="dropdown-item">Duke of Edinburgh Int'l Award</a>
                <a href="<?php echo arndale_get_page_link_by_title('Swimming Programme'); ?>" class="dropdown-item">Swimming Programme</a>
                <a href="<?php echo arndale_get_page_link_by_title('International Learning'); ?>" class="dropdown-item">International Learning</a>
                <a href="<?php echo arndale_get_page_link_by_title('Coding'); ?>" class="dropdown-item">Coding & Robotics</a>
                <a href="<?php echo arndale_get_page_link_by_title('Farm at Arndale'); ?>" class="dropdown-item">Farm at Arndale</a>
                <a href="<?php echo arndale_get_page_link_by_title('Safeguarding'); ?>" class="dropdown-item">Safeguarding</a>
                <a href="<?php echo arndale_get_page_link_by_title('Red Cross +'); ?>" class="dropdown-item">Red Cross +</a>
                <a href="<?php echo arndale_get_page_link_by_title('Drama'); ?>" class="dropdown-item">Drama</a>
            </div>
        </div>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admission</a>
            <div class="dropdown-menu fade-down m-0">
                <a href="<?php echo arndale_get_page_link_by_title('Entrance Exams'); ?>" class="dropdown-item">Entrance Exams</a>
                <a href="<?php echo arndale_get_page_link_by_title('Virtual tour'); ?>" class="dropdown-item">Virtual tour</a>
                <a href="<?php echo arndale_get_page_link_by_title('Work in Arndale'); ?>" class="dropdown-item">Work in Arndale</a>
                <a href="<?php echo arndale_get_page_link_by_title('Our Policies'); ?>" class="dropdown-item">Our Policies</a>
            </div>
        </div>

        <a href="<?php echo arndale_get_page_link_by_title('Contact'); ?>" class="nav-item nav-link">Contact</a>
        <a href="https://arndaleacademy.safsims.com/" class="nav-item nav-link">Login</a>
    </div>
    <?php
}


// Enqueue styles and scripts
function arndale_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // CSS for plugins and libraries
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.min.css');

    // jQuery is bundled with WordPress, so we just enqueue it
    wp_enqueue_script('jquery');

    // JavaScript for plugins and libraries
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/easing.min.js', array('jquery'), null, true);

    // Custom JavaScript (main.js) - make sure it initializes Owl Carousel
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'owl-carousel'), null, true);
}
add_action('wp_enqueue_scripts', 'arndale_enqueue_scripts');

















// Auto-create required pages on theme activation
function arndale_create_pages_on_activation() {
    $pages = [
        'About' => ['content' => 'About us content goes here...', 'template' => 'page-custom.php'],
        'Contact' => ['content' => 'Contact us content goes here...', 'template' => 'page-custom.php'],
        'Curriculum' => ['content' => 'Curriculum details go here...', 'template' => 'page-custom.php'],
        'Board' => ['content' => 'Board details go here...', 'template' => 'page-custom.php'],
        'Coding' => ['content' => 'Coding program details go here...', 'template' => 'page-custom.php'],
        'Drama' => ['content' => 'Drama program details go here...', 'template' => 'page-custom.php'],
        'Extra-curricular' => ['content' => 'Extra-curricular activities go here...', 'template' => 'page-custom.php'],
        'Downloads' => ['content' => 'Download resources go here...', 'template' => 'page-custom.php'],
        'Founder\'s Day' => ['content' => 'Founder\'s Day content goes here...', 'template' => 'page-custom.php'],
        'Our Team' => ['content' => 'Our Team content goes here...', 'template' => 'page-custom.php'],
        'Principal\'s Message' => ['content' => 'Principal\'s message goes here...', 'template' => 'page-custom.php'],
        'School Safety & Security' => ['content' => 'Safety & Security information goes here...', 'template' => 'page-custom.php'],
        'Sport at Arndale' => ['content' => 'Sport details go here...', 'template' => 'page-custom.php'],
        'Online Safety' => ['content' => 'Online safety guidelines go here...', 'template' => 'page-custom.php'],
        'Duke of Edinburgh Int\'l Award' => ['content' => 'DofE Award content goes here...', 'template' => 'page-custom.php'],
        'Swimming Programme' => ['content' => 'Swimming programme details go here...', 'template' => 'page-custom.php'],
        'International Learning' => ['content' => 'International learning content goes here...', 'template' => 'page-custom.php'],
        'Farm at Arndale' => ['content' => 'Farm details go here...', 'template' => 'page-custom.php'],
        'Safeguarding' => ['content' => 'Safeguarding information goes here...', 'template' => 'page-custom.php'],
        'Red Cross +' => ['content' => 'Red Cross + details go here...', 'template' => 'page-custom.php'],
        'Entrance Exams' => ['content' => 'Entrance Exams content goes here...', 'template' => 'page-custom.php'],
        'Virtual tour' => ['content' => 'Virtual tour content goes here...', 'template' => 'page-custom.php'],
        'Work in Arndale' => ['content' => 'Work at Arndale content goes here...', 'template' => 'page-custom.php'],
        'Our Policies' => ['content' => 'Our policies content goes here...', 'template' => 'page-custom.php'],
    ];

    foreach ($pages as $title => $data) {
        $page_check = get_page_by_title($title);
        if (!$page_check) {
            $post_id = wp_insert_post([
                'post_title'   => $title,
                'post_content' => $data['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ]);

            // Assign the custom template for all pages
            if (!empty($data['template'])) {
                update_post_meta($post_id, '_wp_page_template', $data['template']);
            }
        }
    }
}
add_action('after_switch_theme', 'arndale_create_pages_on_activation');
