jQuery(document).ready(function ($) {
  var menuOpen = false;
  var csShowMore = false;
  var prevScroll = window.scrollY;

  // Menu toggle

  $("#menuToggleAnchor").on("click", function (event) {
    menuOpen = !menuOpen;
    console.log("MENU ANCHOR");
    if (menuOpen) {
      console.log("OPEN MENU");
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "0");
      } else {
        $(".menuFull").css("left", "75vw");
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
