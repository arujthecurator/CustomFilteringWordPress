<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your Theme Version
 */
?>

<footer class="custom-footer">
    <div class="container">
        <div class="footer-logo">
            <img src="http://localhost/wordpress/wp-content/uploads/2018/10/cropped-icon.png" alt="Cropped Icon Logo">
        </div>
        <div class="footer-links">
            <div class="social-icons">
                <a href="https://twitter.com/yourhandle" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://facebook.com/yourhandle" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://linkedin.com/in/yourhandle" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="explore-container">
                <h4>Explore</h4>
                <div class="explore">
                    <a href="#home" class="scroll-to-top">Green 1</a>
                    <a href="#home" class="scroll-to-top">Green 2</a>
                    <a href="#home" class="scroll-to-top">Black 1</a>
                    <a href="#home" class="scroll-to-top">Black 2</a>
                    <a href="#home" class="scroll-to-top">Blue 1</a>
                    <a href="#home" class="scroll-to-top">Blue 2</a>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <?php echo '&copy; ' . date('Y') . ' Phlox Wordpress Development'; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); // Crucial for the WordPress admin bar and plugins to function properly ?>
</body>
</html>
