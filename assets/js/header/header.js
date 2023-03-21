
// Header
var header = document.querySelector("header");

// var isMenuActive = () => !!document.querySelector(".main-menu.active");

// Main menu
// var mainMenuContainer = document.querySelector("header .main-menu");

// var popup = document.querySelector("#popup");

/**
 * This function is making header show/hide and change its colors 
 * depending on scroll direction, position of the user on the page etc...
 * 
 * @returns {void}
 */
function floatingHeader() {
    
    // Exit function if there is no header
    if(!header) return;

    // Top distance of the scroll
    var offsetTop = document.documentElement.scrollTop;

    // If scroll direction is "downscroll", and dropdown is "notactive" hide header and do not transform it
    if(scrollDirection == "downscroll"/* && !isMenuActive() */) {
        header.classList.add("hide");
        return;
    }
    else {
        header.classList.remove("hide");
    }

    // If header is 114px or more distance from the top
    if(offsetTop >= 114) {
        header.classList.add("floating-header");
        header.classList.add("blurry-header");
    }
    else {
        header.classList.remove("floating-header");
        header.classList.remove("blurry-header");
    }

}