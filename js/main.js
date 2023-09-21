jQuery(document).ready(function ($) {
  var menuOpen = false;
  var prevScroll = window.scrollY;

  // Menu toggle

  $("#menuToggleAnchor").on("click", function (event) {
    menuOpen = !menuOpen;
    console.log("MENU ANCHOR");
    if (menuOpen) {
      console.log("OPEN MENU");
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "0");
      } else if (window.innerWidth < 950) {
        $(".menuFull").css("left", "69vw");
      } else if (window.innerWidth < 1200) {
        $(".menuFull").css("left", "75vw");
      } else {
        $(".menuFull").css("left", "78vw");
      }
    } else {
      console.log("CLOSE MENU");
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "140vw");
      } else {
        $(".menuFull").css("left", "120vw");
      }
    }
  });

  // Hide nav on scroll

  $(window).on("scroll", function () {
    let currentScroll = window.scrollY;

    if (menuOpen) {
      return $(".top").css("top", "0");
    }

    if (prevScroll > currentScroll) {
      $(".top").css("top", "0");
    } else {
      $(".top").css("top", "-65");
    }
    prevScroll = currentScroll;
  });
});
