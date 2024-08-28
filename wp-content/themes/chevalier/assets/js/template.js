/**
 *
 * Template Scripts
 *
 * Version: 1.0.0
 * Author: webdeveloper.com.ua
 * Author URI: https://t.me/webdeveloper_com_ua
 *
 */

/* ---------------------------------------------------------------------------------
 *  
 *  Functions
 * 
------------------------------------------------------------------------------------ */
const arrFromHTMLCollection = (HTMLCollection) => {
  return [].map.call(HTMLCollection, (elem) => elem);
};

/* ---------------------------------------------------------------------------------
 *  
 *  100vh / min-height: calc(var(--vh, 1vh) * 100 - 100px);
 * 
------------------------------------------------------------------------------------ */
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);

window.addEventListener("resize", () => {
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

/* ---------------------------------------------------------------------------------
 *  
 *  Onscroll Body Class
 * 
------------------------------------------------------------------------------------ */
let sticky = document.querySelector(".body").offsetTop;

function toggleFixedHeader() {
  let siteHeader = document.querySelector(".body");
  if (window.scrollY > sticky) {
    siteHeader.classList.add("onscroll");
  } else {
    siteHeader.classList.remove("onscroll");
  }
}

window.addEventListener("scroll", toggleFixedHeader);

/* ---------------------------------------------------------------------------------
 *  
 *  Responsive Table
 * 
------------------------------------------------------------------------------------ */
Array.from(document.getElementsByTagName("table")).forEach((table) => {
  wrapper = document.createElement("div");
  wrapper.setAttribute("class", "table-wrapper");
  table.parentNode.insertBefore(wrapper, table);
  wrapper.appendChild(table);
});

/* ---------------------------------------------------------------------------------
 *  
 *  Accordion
 * 
------------------------------------------------------------------------------------ */
const AccordionComponent = (function ($) {
  function closePanels(panels) {
    panels.slideUp("fast").removeClass("open");
  }

  function closePanel(panel) {
    panel.slideUp("fast").removeClass("open");
    // Reset all inner elements
    panel.find(".accordion-button.active").removeClass("active");
    panel.find(".accordion-panel.open").slideUp("fast").removeClass("open");
  }

  function openPanel(panel) {
    panel.slideDown("fast").addClass("open");
  }

  function initialize() {
    const panels = $(".accordion-panel");
    const buttons = $(".accordion-button");

    // Close all panels by default
    closePanels(panels);

    buttons.click(function (event) {
      event.stopPropagation(); // Stop event propagation to handle nested accordions

      const currentButton = $(this);
      const currentPanel = currentButton.next(".accordion-panel");
      const isActive = currentButton.hasClass("active");

      // Close all other panels and deactivate all other buttons
      // Only siblings to avoid closing nested accordions
      closePanels(
        currentButton.parent().find(".accordion-panel").not(currentPanel)
      );
      currentButton.siblings(".accordion-button").removeClass("active");

      if (isActive) {
        // If the current button was active, close its panel and deactivate it
        closePanel(currentPanel);
        currentButton.removeClass("active");
      } else {
        // Otherwise, open its panel and activate it
        openPanel(currentPanel);
        currentButton.addClass("active");
      }
    });
  }

  return {
    init: initialize,
  };
})(jQuery);

// Accordion initialization
$(document).ready(function () {
  AccordionComponent.init();
});

/* 
 *  Accordion Navigation
------------------------------------------------------------------------------------ */

// Function to toggle mobile menu open and close
function sidebar(e) {
  // Toggle class 'change' on clicked element
  e.currentTarget.classList.toggle("change");
  // Toggle class 'open' on sidebar element
  document.getElementById("sidebar").classList.toggle("open");
}

// Add click event listener to .sidebar-toggle element
/*document.querySelector(".sidebar-toggle").addEventListener("click", sidebar);*/

// Self-invoking function for accordion navigation
const AccordionNavigation = (() => {
  // Initialize accordion navigation
  function initialize(selector) {
    // Get all .menu-item-has-children elements
    const menuItems = document.querySelectorAll(selector);

    // Loop through each .menu-item-has-children element
    menuItems.forEach((item) => {
      // Find <a> element in the .menu-item-has-children element
      const link = item.querySelector("a");

      // Create <span class="accordion-button"></span> element
      const accordionButton = document.createElement("span");
      accordionButton.className = "accordion-button";

      // Insert new element right after the <a> element
      link.insertAdjacentElement("afterend", accordionButton);

      // Find .sub-menu in the .menu-item-has-children element
      const subMenu = item.querySelector(".sub-menu");

      // If .sub-menu is found
      if (subMenu) {
        // Add class 'accordion-panel' to .sub-menu
        subMenu.classList.add("accordion-panel");
      }
    });
  }

  // Return init function
  return {
    init: initialize,
  };
})();

// Use AccordionNavigation component
AccordionNavigation.init(".sidebar-navigation .menu-item-has-children");


//Parallax

const images = document.querySelectorAll('.parallax-image');
new simpleParallax(images,{
  delay: 2,
  scale: 1.2,
  maxTransition: 55,
  transition: 'cubic-bezier(0,0,0,1)'
});