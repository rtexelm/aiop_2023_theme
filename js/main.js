jQuery(document).ready(function ($) {
  var menuOpen = false;
  var prevScroll = window.scrollY;
  var menuArea = $(".menuFull");
  const toggle = $("#menuToggleAnchor");

  // Menu toggle

  toggle.on("click", function (event) {
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

  // Menu close on outside click

  $(document).on("click", (e) => {
    if (
      !!menuOpen &&
      !$(e.target).closest(menuArea).length &&
      !$(e.target).closest(toggle).length
    ) {
      console.log("CLOSE MENU from outside");
      menuOpen = !menuOpen;
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "140vw");
      } else {
        $(".menuFull").css("left", "120vw");
      }
    }
  });

  // Prevent scrolling while menu open (needs debugging)

  // $(window).on("scroll", function (e) {
  //   if (menuOpen && window.innerWidth < 720) {
  //     $("body").css("overflow", "hidden");
  //   } else {
  //     $("body").css("overflow", "auto");
  //   }
  // });

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
