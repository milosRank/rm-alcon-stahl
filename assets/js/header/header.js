
// Header
const HEADER = document.querySelector("header");

// Mobile menu
const MOBILE_MENU = HEADER.querySelector(".links-holder");

// Open mobile menu button
const OPEN_MOB_MENU_BTN = HEADER.querySelector(".mobile-menu-cta .open-menu button");

// Close mobile menu button
const CLOSE_MOB_MENU_BTN = HEADER.querySelector(".mobile-menu-cta .close-menu button");

let isMobileMenuActive = () => MOBILE_MENU.classList.contains(ACTIVE_CLASS);

const ACTIVE_CLASS = "active";


/**
 * This function is making header show/hide and change its colors 
 * depending on scroll direction, position of the user on the page etc...
 * 
 * @returns {Void}
 */
function floatingHeader() {
    
    // Exit function if there is no header
    if(!HEADER) return;

    var dropdownParentsList = HEADER.querySelectorAll(".dropdown-parent > ul");

    // Returns if dropdown is active or not(true/false)
    let isDropdownActive = () => Array.from(dropdownParentsList).some(dropdown => dropdown.classList.contains("active"));

    // Top distance of the scroll
    var offsetTop = document.documentElement.scrollTop;

    // If header is 114px or more distance from the top
    if(offsetTop >= 122)
    {
        HEADER.classList.add("floating-header");
    }
    else
    {
        HEADER.classList.remove("floating-header");
    }
}




/**
 * This function is opening mobile menu
 * 
 * @returns {Void}
 */
var openMenu = () => MOBILE_MENU.classList.add(ACTIVE_CLASS);




/**
 * This function is closing mobile menu
 * 
 * @returns {Void}
 */
var closeMenu = () => MOBILE_MENU.classList.remove(ACTIVE_CLASS);




/**
 * This function is switching active mobile menu trigger button (switch between hamburger icon and close icon)
 * 
 * @param  {...HTMLElement} buttons 
 * 
 * @returns {Void} 
 */
var toggleActiveMenuButton = (...buttons) => buttons.map((btn) => btn.classList.toggle(ACTIVE_CLASS));




OPEN_MOB_MENU_BTN.addEventListener("click", function() {
    openMenu(); // Open menu
    toggleActiveMenuButton(OPEN_MOB_MENU_BTN, CLOSE_MOB_MENU_BTN); // Toggle active button

    // If screen width is 576px or less lock screen when mobile menu is active (menu is 100% width of the screen)
    if(window.innerWidth <= 576) lockScreen();
});

CLOSE_MOB_MENU_BTN.addEventListener("click", function() {
    closeMenu(); // Close menu
    toggleActiveMenuButton(OPEN_MOB_MENU_BTN,CLOSE_MOB_MENU_BTN);  // Toggle active button
    unlockScreen(); // Unlock screen
});