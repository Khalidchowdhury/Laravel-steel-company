// carosel
$(document).ready(function () {
  var carousel = $(".carousel1");

  carousel.owlCarousel({
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: true,
      },
      451: {
        items: 1,
        nav: false,
        dots: true,
      },
      1000: {
        items: 5,
        nav: true,
        loop: false,
        dots: false,
      },
    },
    dots: false,
    autoplay: true,
    loop: true,
    autoplayTimeout: 2500,
    onInitialized: counter, // Set counter when the carousel is initialized
    onTranslated: counter, // Update counter when the carousel position changes
  });

  // Function to update the counter
  function counter(event) {
    var items = event.item.count; // Total number of items
    var item = event.item.index + 1; // Current item index

    // Format the current item number with leading zeros if needed
    var currentItem = ("0" + item).slice(-2);
    // Display the current item number out of the total number of items
    $(".owl-counter").text(currentItem + "/" + items);
  }








  // Initialize carousel2 (assuming it doesn't require responsive options)
  $(document).ready(function () {
    // Initialize the carousel
    $(".carousel2").owlCarousel({
      responsive: {
        0: {
          items: 1,
          nav: false, // Set nav to false to hide navigation buttons
        },
        600: {
          items: 3,
          nav: false,
        },
        1000: {
          items: 5,
          nav: false,
        },
      },
      autoplay: true,
      autoplayTimeout: 1500,
      loop: true,
      dots: true,
      onInitialized: function(event) {
        // Check if nav is disabled and add margin-top to dots
        if ($(event.target).find('.owl-nav').hasClass('disabled')) {
          if ($(window).width() <= 320) {
            $(event.target).find('.owl-dots').css('margin-top', '25px');
          } else {
            $(event.target).find('.owl-dots').css('margin-top', '25px');
          }
        }
      },
      onChanged: function(event) {
        // Check if nav is disabled and add margin-top to dots
        if ($(event.target).find('.owl-nav').hasClass('disabled')) {
          if ($(window).width() <= 320) {
            $(event.target).find('.owl-dots').css('margin-top', '25px');
          } else {
            $(event.target).find('.owl-dots').css('margin-top', '25px');
          }
        }
      }
    });

    // Adjust margin-top on window resize
    $(window).resize(function() {
      if ($('.carousel2').find('.owl-nav').hasClass('disabled')) {
        if ($(window).width() <= 320) {
          $('.carousel2 .owl-dots').css('margin-top', '15px');
        } else {
          $('.carousel2 .owl-dots').css('margin-top', '25px');
        }
      }
    });
  });



  $(document).ready(function () {
    var owl = $(".carousel3").owlCarousel({
      responsive: {
        0: {
          items: 1.5,
          nav: true, // Enable navigation buttons
          autoplay: true,
        },
        600: {
          items: 2,
          nav: true,
          autoplay: true,
        },
        1000: {
          autoplay: true,
          items: 3,
          nav: true,
        },

        1100: {
          autoplay: true,
          items: 4,
          nav: true,
        },
      },
      loop: true,
      autoplayTimeout: 1500,
      dots: false,
      navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>",
      ], // Example using Font Awesome icons
    });
  });

  $(document).ready(function () {
    var owl = $(".carousel4").owlCarousel({
      responsive: {
        0: {
          items: 1.5,
          nav: true, // Enable navigation buttons
          autoplay: true,
        },
        600: {
          items: 2,
          nav: true,
          autoplay: true,
        },
        1000: {
          items: 3,
          nav: true,
          autoplay: true,
        },

        1100: {
          items: 4,
          nav: true,
          autoplay: true,
        },
      },
      loop: true,
      autoplay: true,
      autoplayTimeout: 1500,
      dots: false,
      navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>",
      ], // Example using Font Awesome icons
    });
  });

  $(document).ready(function () {
    var owl = $(".carousel5").owlCarousel({
      responsive: {
        0: {
          items: 1,
          nav: true, // Enable navigation buttons
        },
        600: {
          items: 3,
          nav: true,
        },
        1000: {
          items: 4,
          nav: true,
        },
      },
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      dots: false,
      navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>",
      ], // Example using Font Awesome icons
    });
  });

  // Initialize carousel2 (assuming it doesn't require responsive options)
  $(document).ready(function () {
    $(".carousel6").owlCarousel({
      responsive: {
        0: {
          items: 1,
          nav: false, // Set nav to false to hide navigation buttons
        },
        600: {
          items: 1,
          nav: false,
        },
        1000: {
          items: 1,
          nav: false,
        },
      },
      dots: true,
    });
  });

  $(document).ready(function () {
    $(".carousel8").owlCarousel({
      responsive: {
        0: {
          items: 1,
          nav: false, // Set nav to false to hide navigation buttons
        },
        600: {
          items: 1,
          nav: false,
        },
        1000: {
          items: 1,
          nav: false,
        },
      },
      loop: true,
      autoplay: true,
      autoplayTimeout: 4000,
      dots: false,
    });
  });



});





// whatsapp

// floating whatsapp
$(".floating-wpp").floatingWhatsApp({
  // phone number
  phone: "+6598162261",

  // message to send
  message: "",

  // icon size
  size: "72px",

  // background color
  backgroundColor: "#25D366",

  // or right
  position: "right",

  // message in popup
  popupMessage: "",

  // show a chat popup on hover
  showPopup: false,

  // show on IE
  showOnIE: true,

  // in milliseconds
  autoOpenTimer: 0,

  // header color
  headerColor: "#128C7E",

  // header title
  headerTitle: "",

  // z-index property
  zIndex: 0,

  // custom icon
  buttonImage:
    '<?xml version="1.0" encoding="UTF-8" standalone="no"?><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 800 800" width="800" height="800"><defs><clipPath id="_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ"><rect width="800" height="800"/></clipPath></defs><g clip-path="url(#_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ)"><g><path d=" M 787.59 800 L 12.41 800 C 5.556 800 0 793.332 0 785.108 L 0 14.892 C 0 6.667 5.556 0 12.41 0 L 787.59 0 C 794.444 0 800 6.667 800 14.892 L 800 785.108 C 800 793.332 794.444 800 787.59 800 Z " fill="rgb(37,211,102)"/></g><g><path d=" M 508.558 450.429 C 502.67 447.483 473.723 433.24 468.325 431.273 C 462.929 429.308 459.003 428.328 455.078 434.22 C 451.153 440.114 439.869 453.377 436.434 457.307 C 433 461.236 429.565 461.729 423.677 458.78 C 417.79 455.834 398.818 449.617 376.328 429.556 C 358.825 413.943 347.008 394.663 343.574 388.768 C 340.139 382.873 343.207 379.687 346.155 376.752 C 348.804 374.113 352.044 369.874 354.987 366.436 C 357.931 362.999 358.912 360.541 360.875 356.614 C 362.837 352.683 361.857 349.246 360.383 346.299 C 358.912 343.352 347.136 314.369 342.231 302.579 C 337.451 291.099 332.597 292.654 328.983 292.472 C 325.552 292.301 321.622 292.265 317.698 292.265 C 313.773 292.265 307.394 293.739 301.996 299.632 C 296.6 305.527 281.389 319.772 281.389 348.752 C 281.389 377.735 302.487 405.731 305.431 409.661 C 308.376 413.592 346.949 473.062 406.015 498.566 C 420.062 504.634 431.03 508.256 439.581 510.969 C 453.685 515.451 466.521 514.818 476.666 513.302 C 487.978 511.613 511.502 499.06 516.409 485.307 C 521.315 471.55 521.315 459.762 519.842 457.307 C 518.371 454.851 514.446 453.377 508.558 450.429 Z  M 401.126 597.117 L 401.047 597.117 C 365.902 597.104 331.431 587.661 301.36 569.817 L 294.208 565.572 L 220.08 585.017 L 239.866 512.743 L 235.21 505.332 C 215.604 474.149 205.248 438.108 205.264 401.1 C 205.307 293.113 293.17 205.257 401.204 205.257 C 453.518 205.275 502.693 225.674 539.673 262.696 C 576.651 299.716 597.004 348.925 596.983 401.258 C 596.939 509.254 509.078 597.117 401.126 597.117 Z  M 567.816 234.565 C 523.327 190.024 464.161 165.484 401.124 165.458 C 271.24 165.458 165.529 271.161 165.477 401.085 C 165.46 442.617 176.311 483.154 196.932 518.892 L 163.502 641 L 288.421 608.232 C 322.839 627.005 361.591 636.901 401.03 636.913 L 401.126 636.913 L 401.127 636.913 C 530.998 636.913 636.717 531.2 636.77 401.274 C 636.794 338.309 612.306 279.105 567.816 234.565" fill-rule="evenodd" fill="rgb(255,255,255)"/></g></g></svg>',
});











// Function to load AOS CSS asynchronously
function loadAOSCss() {
  var link = document.createElement("link");
  link.rel = "stylesheet";
  link.href = "https://unpkg.com/aos@2.3.1/dist/aos.css";
  document.head.appendChild(link);
}
// Call the function to load AOS CSS asynchronously after a delay (e.g., 100 milliseconds)
setTimeout(loadAOSCss, 100);








// video play in safari
document.addEventListener("DOMContentLoaded", function () {
  var allVideos = document.querySelectorAll("video");

  allVideos.forEach(function (video) {
    function playVideo() {
      video.play().catch((error) => {
        console.log("Video play failed:", error);
        // Optional: Display a play button or fallback content here if autoplay fails.
      });
    }

    if (video.readyState >= 3) {
      playVideo();
    } else {
      video.addEventListener("canplaythrough", playVideo); // Ensuring the video is fully loaded before attempting to play
    }
  });
});










// search dropdown
document.addEventListener("DOMContentLoaded", function() {
  const searchToggler = document.querySelector(".search-toggler");
  const searchContainer = document.querySelector(".search-container");
  const header = document.querySelector(".headerformobile");

  searchToggler.addEventListener("click", function() {
      if (searchContainer.style.maxHeight === "0px" || searchContainer.style.maxHeight === "") {
          searchContainer.style.maxHeight = "50px";
          searchContainer.style.padding = "10px 9px"; // Add padding when showing
          header.classList.add("no-shadow");
      } else {
          searchContainer.style.maxHeight = "0px";
          searchContainer.style.padding = "0 15px"; // Remove padding when hiding
          header.classList.remove("no-shadow");
      }
  });
});







// on focus seach bar border will become
document.addEventListener("DOMContentLoaded", function() {
  const searchInput = document.querySelector(".search-input");
  const inputWrapper = document.querySelector(".input-wrapper");

  searchInput.addEventListener("focus", function() {
      inputWrapper.classList.add("focused");
  });

  searchInput.addEventListener("blur", function() {
      inputWrapper.classList.remove("focused");
  });
});



// -----------------------------------------------------
// toggle dropdown




// mobile navlink toggle
document.addEventListener("DOMContentLoaded", function () {
  const menuToggler = document.querySelector(".mobile-menu-toggler");
  const mobileMenu = document.querySelector(".mobile-menu");
  const productItems = document.querySelectorAll(".mobile-menu-dropdown");
  const submenus = document.querySelectorAll(".mobile-menu-submenu");

  menuToggler.addEventListener("click", function (event) {
      event.stopPropagation(); // Prevent event from bubbling up to document
      mobileMenu.classList.toggle("show");
  });

  productItems.forEach(function(productItem) {
      productItem.addEventListener("click", function (event) {
          event.stopPropagation(); // Prevent event from bubbling up to document
          const submenu = event.currentTarget.querySelector(".mobile-menu-submenu");
          // Toggle submenu visibility
          submenu.classList.toggle("show");
      });
  });

  // Hide submenus by default
  submenus.forEach(function(submenu) {
      submenu.classList.remove("show");
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", function (event) {
      if (!event.target.closest(".mobile-menu")) {
          mobileMenu.classList.remove("show");
          submenus.forEach(function(submenu) {
              submenu.classList.remove("show");
          });
      }
  });
});

// dropdown icon rotate
document.addEventListener('DOMContentLoaded', function() {
  // Select all dropdown links within the menu
  var dropdownLinks = document.querySelectorAll('.mobile-menu-dropdown > .mobile-menu-link');

  dropdownLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
          event.preventDefault(); // Prevent default anchor behavior

          // Find the corresponding submenu
          var submenu = link.nextElementSibling;

          // Check if the submenu is displayed
          if (submenu.style.display === 'block') {
              submenu.style.display = 'none';
              link.querySelector('.dropdown-icon').style.transform = 'rotate(0deg)';
          } else {
              submenu.style.display = 'block';
              link.querySelector('.dropdown-icon').style.transform = 'rotate(180deg)';
          }
      });
  });
});

// offcanvas
document.addEventListener("DOMContentLoaded", function () {
  const menuToggler = document.querySelector(".mobile-menu-toggler");
  const offcanvasMenu = document.querySelector(".offcanvas-menu");
  const closeOffcanvas = document.querySelector(".close-offcanvas");
  const submenus = document.querySelectorAll(".mobile-menu-submenu");
  const dropdownIcons = document.querySelectorAll(".dropdown-icon");

  function toggleOffcanvas(show) {
    if (show) {
      offcanvasMenu.classList.add("show");
      document.body.classList.add("no-scroll");
    } else {
      offcanvasMenu.classList.remove("show");
      document.body.classList.remove("no-scroll");

      // Hide all submenus
      submenus.forEach(function(submenu) {
        submenu.style.display = 'none';
        submenu.classList.remove("show");
      });

      // Reset dropdown icons
      dropdownIcons.forEach(function(icon) {
        icon.style.transform = 'rotate(0deg)';
      });
    }
  }

  menuToggler.addEventListener("click", function () {
    toggleOffcanvas(true);
  });

  closeOffcanvas.addEventListener("click", function () {
    toggleOffcanvas(false);
  });

  // Close offcanvas menu when clicking outside of it
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".offcanvas-menu-content") && !event.target.closest(".mobile-menu-toggler")) {
      toggleOffcanvas(false);
    }
  });

  // Prevent the menu from closing when clicking inside the content
  document.querySelector(".offcanvas-menu-content").addEventListener("click", function (event) {
    event.stopPropagation();
  });
});





