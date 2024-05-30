// jQuery(document).ready(function($) {

    // Initialize the filtering carousel with arrows and dots
    // $('.filtering').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 4,
    //     arrows: true, // Enable navigation arrows
    //     dots: true, // Enable dots for navigation
    //     prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
    //     nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>'
    // });

    // // Toggle filtering on click
    // var filtered = false;
    // $('.js-filter').on('click', function() {
    //     if (filtered === false) {
    //         $('.filtering').slick('slickFilter', ':even');
    //         $(this).text('Unfilter Slides');
    //         filtered = true;
    //     } else {
    //         $('.filtering').slick('slickUnfilter');
    //         $(this).text('Filter Slides');
    //         filtered = false;
    //     }
    // });
// });
const prev_button_svg = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<polygon points="12.718 4.707 11.305 3.292 2.585 12 11.305 20.707 12.718 19.292 6.417 13 20 13 20 11 6.416 11 12.718 4.707"/>
</svg>`
const next_button_svg = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<polygon points="11.293 4.707 17.586 11 4 11 4 13 17.586 13 11.293 19.293 12.707 20.707 21.414 12 12.707 3.293 11.293 4.707"/>
</svg>`

jQuery(document).ready(function($) {
    console.log($('.slick-dots'))
    $('.filtering').slick({
        centerMode: false,
        centerPadding: '60px',
        slidesToShow: 5,
        dots: true,
        arrows: true,
        // infinite: true,
        // focusOnSelect: true,
        // cssEase: 'linear',
        appendArrows: $('.dots-and-arrows-cont'),
        appendDots: $('.dots-and-arrows-cont'),
        prevArrow: `<button type="button" class="prev-button" style="display: flex">${prev_button_svg}</button>`,
        nextArrow: `<button type="button" class="next-button" style="display: flex">${next_button_svg}</button>`
    });

    $('.slick-dots').css({
        display: "flex",
        "justify-content": "center",
        "align-items": "center"
    });
    $('.next-button').detach().insertAfter(".slick-dots");

    // New dropdown functionality
    var dropdown = document.querySelector('.dropdown');
    var dropBtn = dropdown.querySelector('.dropbtn');
    var dropdownContent = dropdown.querySelector('.dropdown-content');
    var defaultText = "Select What to Filter";  // Default text for the dropdown button
    var lastSelected = "";  // Store the last selected filter
    
    // Handle dropdown button click
    dropBtn.onclick = function(event) {
        event.stopPropagation(); // Stop click event from reaching the window
        var isOpen = dropdownContent.style.display === 'block';
        dropdownContent.style.display = isOpen ? 'none' : 'block';
        this.innerHTML = isOpen ? lastSelected + ' <span class="caret">&#9660;</span>' : defaultText + ' <span class="caret">&#9650;</span>';
    };

    // Handle option selection in the dropdown
    dropdown.querySelectorAll('.dropdown-content a').forEach(function(link) {
        link.onclick = function(e) {
            e.preventDefault();
            var filter = this.getAttribute('data-filter');
            lastSelected = filter; // Update last selected filter
            dropBtn.innerHTML = filter + ' <span class="caret">&#9660;</span>'; // Set button text to the selected filter
            $('.filtering').slick('slickUnfilter');
            if (filter) {
                $('.filtering').slick('slickFilter', function(index, slide) {
                    return $(slide).hasClass(filter + '_1') || $(slide).hasClass(filter + '_2');
                });
                $('.filtering').slick('slickGoTo', 0);
            }
            dropdownContent.style.display = 'none'; // Close the dropdown
        };
    });

    // Close the dropdown if clicking outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            dropdownContent.style.display = 'none';
            dropBtn.innerHTML = lastSelected ? lastSelected + ' <span class="caret">&#9660;</span>' : defaultText + ' <span class="caret">&#9660;</span>';
        }
    };

    // Scroll from elementor-container to custom-container
    $(".elementor-container button").click(function(e) {
        e.preventDefault(); // Prevent default button click behavior
        $('html, body').animate({
            scrollTop: $("#custom-container").offset().top
        }, 1000); // Scroll duration in milliseconds
    });

    // Scroll from custom-footer to elementor-container
    $(".custom-footer a").click(function(e) {
        e.preventDefault(); // Prevent default anchor click behavior
        $('html, body').animate({
            scrollTop: $("#elementor-container").offset().top
        }, 1000);
    });
});    


