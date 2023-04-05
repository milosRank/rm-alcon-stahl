
// Header
var header = document.querySelector("header");


/**
 * This function is making header show/hide and change its colors 
 * depending on scroll direction, position of the user on the page etc...
 * 
 * @returns {Void}
 */
function floatingHeader() {
    
    // Exit function if there is no header
    if(!header) return;

    var dropdownParentsList = header.querySelectorAll(".dropdown-parent > ul");

    // Returns if dropdown is active or not(true/false)
    let isDropdownActive = () => Array.from(dropdownParentsList).some(dropdown => dropdown.classList.contains("active"));

    // Top distance of the scroll
    var offsetTop = document.documentElement.scrollTop;

    // If scroll direction is "downscroll" and if dropdown is not active
    if(scrollDirection == "downscroll" && !isDropdownActive())
    {
        // Hide header
        header.classList.add("hide");

        // Exit
        return;
    }
    else
    {
        // Show header
        header.classList.remove("hide");
    }

    // If header is 114px or more distance from the top
    if(offsetTop >= 114) {
        header.classList.add("floating-header");
    }
    else {
        header.classList.remove("floating-header");
    }
}