<?php
/* Template Name: My Filtering Section */
get_header();

?>

<div class="elementor-container">
    <?php
    // Include the Elementor Template using its Shortcode
    // echo do_shortcode('[elementor-template id="440"]');
    // $page_id = 2; 
    // $page_data = get_post( $page_id ); 
    // $content = apply_filters('the_content', $page_data->post_content); 
    // $title = $page_data->post_title; 
    // echo $content; 
    
    // Ensure Elementor plugin is loaded
    if (class_exists('\Elementor\Plugin')) {
        // Get Elementor's instance
        $elementor_instance = \Elementor\Plugin::instance();
        // Replace 'Id' with the actual ID of the page created using Elementor
        $page_id = 2;  // Set the page ID
        echo $elementor_instance->frontend->get_builder_content_for_display($page_id);
    }
    ?>
</div>
<div class="custom-container">
    <div class="custom-page-container">
        <div class="inner-group">

            <div class="vector">
            </div>
        </div>
    </div>
    <div class="heading-paragraph-container">
        <div class="filtering-text">Filtering Section</div>

        <div class="heading-2">
            <h1>Section 2</h1>
        </div>

        <div class="paragraph-section-2">
            <p>
                Lorem ipsum <span class="paragraph-highlight"> dolor sit amet, consectetur adipiscing elit. Cras tortor
                    nibh, vestibulum id elit at, eleifend condimentum mi. </span>
            </p>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Select What to Filter <span class="caret">&#9660;</span></button>
        <div class="dropdown-content">
            <a href="#" data-filter="Green">Green</a>
            <a href="#" data-filter="Blue">Blue</a>
            <a href="#" data-filter="Black">Black</a>
        </div>
    </div>
    <div class="carousel-container">
        <div class="filtering">
            <!-- Image paths should be correctly pointed to your image assets -->
            <div class="Green_1">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_5_Green.jpg" alt="Green 1">
                <p>Green 1</p>
            </div>
            <div class="Green_2">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_6_Green.jpg" alt="Green 2">
                <p>Green 2</p>
            </div>
            <div class="Black_1">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_1_Black.jpg" alt="Black 1">
                <p>Black 1</p>
            </div>
            <div class="Black_2">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_3_Black.jpg" alt="Black 2">
                <p>Black 2</p>
            </div>
            <div class="Blue_1">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_2_Blue.jpg" alt="Blue 1">
                <p>Blue 1</p>
            </div>
            <div class="Blue_2">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/05/IMG_4_Blue.jpg" alt="Blue 2">
                <p>Blue 2</p>
            </div>

        </div>
        <div class="dots-and-arrows-cont">
        </div>
    </div>
</div>
<?php
get_footer();
?>