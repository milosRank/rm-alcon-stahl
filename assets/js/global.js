// ==== This is global.js file. In this file some globla functions will be stored. ====




var lastScrollTop = 0; // Last scroll top offset (in pixels)
var scrollDirection; // Global variable that contains scroll direction as a string value ('downscroll'/'upscroll')
var rootElement = document.documentElement; // Root element

/**
 * Sets value of global variable scrollDirection
 * 
 * @returns {Void}
 */
function getScrollDirection() {

    // Top offset of the page
    var topOffset = window.pageYOffset || document.documentElement.scrollTop;

    // Set direction of scroll on globaly aviailable scrollDirection variable
    scrollDirection = (topOffset > lastScrollTop ? "downscroll" : "upscroll");

    // For Mobile or negative scrolling
    lastScrollTop = topOffset <= 0 ? 0 : topOffset;
    
}

/**
 * This function is locking the screen (disable scrolling)
 * 
 * @returns {Void}
 */
function lockScreen() { 
    var rootElement = document.querySelector("html"); 
    rootElement.style="overflow-y: hidden";
}



/**
 * This function is unlocking the screen (eneable scrolling)
 * 
 * @returns {Void}
 */
function unlockScreen() { 
    var rootElement = document.querySelector("html"); 
    rootElement.style="overflow-y: scroll";
}



/**
 * This function is locking screen depending on if the condition of callback is fullfuled or not(if callback returns true = fullfiled, returns false = not fullfiled)
 * 
 * @param {Function} callback 
 * 
 * @returns {Void}
 */
function lockScreenDependingOnCondition(callback) {
    var isConditionFullfilled = callback();
    isConditionFullfilled ? lockScreen() : unlockScreen();
}