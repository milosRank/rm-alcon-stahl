// ==== This is init.js file. In this file all function initializations will be stored. ====



// ==== LOAD EVENT ====

window.addEventListener("load", () => {
    floatingHeader(100);
    initDropdown(".header__links-list");
});



// ==== SCROLL EVENT ====

document.addEventListener("scroll", function() {
    getScrollDirection();
    floatingHeader(100);
});



// ==== RESIZE EVENT ====

window.addEventListener("resize", function() {				
});