# CustomFilteringWordPress
This project aims in building two parts of a webpage using WordPress for performing filtering functionality with the emphasis on custom coding using the child template and integrating different webpages built on WordPress platform.

# WordPress Project Setup

This guide provides steps to set up WordPress locally using the contents of this GitHub repository. By following these steps carefully, you will be able to run the website on your local machine.

## Prerequisites

- Install a local server:
  - **Windows:** [WAMP server](http://www.wampserver.com/en/)
  - **macOS:** [MAMP server](https://www.mamp.info/en/)
  - **Windows and macOS:** [XAMPP server](https://www.apachefriends.org/index.html)
  
  Ensure that the ports for the Apache Server and MySQL database are set up properly. For detailed instructions on installing WordPress locally, refer to [this guide](https://www.hostinger.com/tutorials/install-wordpress-locally).

## Steps

1. **Download and Install WordPress**
   - Go to [WordPress.org](https://wordpress.org/) and download WordPress.
   - Extract the downloaded ZIP file into your WordPress website folder. This folder should be placed in the root directory accessible to your server (e.g., for MAMP on macOS, the default location is `Applications/MAMP/htdocs/your-website-name`).

2. **Set Up the Database**
   - Start your server and navigate to phpMyAdmin (accessible via Tools in `localhost/MAMP/` after starting the server).
   - Create an empty database.
   - Open a web browser and go to `localhost/your-database-name`. Follow the WordPress setup instructions to create credentials and set up the WordPress admin.
   - After setup, you should be able to access the WordPress Admin Dashboard at `localhost/your-database-name/wp-admin` by entering your credentials.

3. **Clone the GitHub Repository**
   - Clone this GitHub repository to your local machine.
   - Copy and replace the `wp-content` folder contents in your original WordPress folder with the contents from this repository.

4. **Theme and Plugins Setup**
   - The Phlox-child theme template is used for this website. The ZIP file of this child theme is included in this repository for reference.
   - All code files are located in `wp-content/themes/phlox-child/`.
   - Plugins are located in the `wp-content/plugins/` folder.

5. **Custom Code Integration**
   - The Elementor plugin is used for creating the first section of the webpage.
   - The second section is created using custom coding without any plugins, using the Phlox-child template.
   - The section created with Elementor is called using the WordPress loop in the `filtering_section.php` file. This integrates it with the other sections and the footer, which are created using a combination of PHP, HTML, CSS, and JavaScript files.

### Filtering Functionality

The custom code includes a dynamic filtering feature that enhances user interaction:

#### Filtering Features
- **Checkboxes:** Each filter provides a list of checkboxes, allowing users to select multiple options within each filter.
- **Dropdown:** A dropdown menu with three filtering options is included. Filters are applied instantly when options are selected.
- **Image Display:**
  - Featured images are pulled from each article.
  - Images are displayed in a carousel format.
  - Clicking a carousel image navigates the user to the corresponding article.
- **UX for Dynamic Filtering:** Image filtering updates in real-time as filter options are selected, without the need for an additional "apply" button.


## Conclusion

By following these steps, you should be able to set up and run the WordPress website locally on your machine. If you encounter any issues, please refer to the detailed instructions or troubleshooting guides available online.

## Demo of the WebPage

You can follow [this link](https://drive.google.com/file/d/1bLFFrGDfm7XFj1WEaChOZLkVVIPlMMzu/view?usp=sharing) for the demo of the webpages created in this project. 

## Phlox Theme

The Phlox Free Elementor WordPress Theme is used here. It can be downloaded by following [this link](https://www.phlox.pro/)

## Video Used in the Background of the WebPage

The video used in the background of the web page is taken from [pexels.com](https://www.pexels.com/). The video is titled  ["a-person-putting-a-helmet-on-a-head-sculpture"](https://www.pexels.com/video/a-person-putting-a-helmet-on-a-head-sculpture-7237098/)  uploaded by [Alena Darmel](https://www.pexels.com/@a-darmel/)



