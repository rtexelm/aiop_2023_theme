jQuery(document).ready(function ($) {
  const $menuArea = $(".menuFull");
  const $toggle = $("#menuToggleAnchor");
  const $html = $("html");
  const $body = $("body");
  const onMobile = window.innerWidth < 720;
  let menuOpen = false;

  let prevScroll = window.scrollY;

  // Menu toggle

  function toggleMenu() {
    menuOpen = !menuOpen;
    moveMenuPosition();
    if (onMobile) $body.toggleClass("stopScrollMenu");
  }

  function moveMenuPosition() {
    const screenSize = window.innerWidth;
    let leftPos;

    if (menuOpen) {
      if (screenSize < 720) leftPos = "0";
      else if (screenSize < 950) leftPos = "69vw";
      else if (screenSize < 1200) leftPos = "75vw";
      else leftPos = "78vw";
    } else {
      if (screenSize < 720) leftPos = "140vw";
      else leftPos = "120vw";
    }

    $menuArea.css("left", leftPos);
  }

  $toggle.on("click", toggleMenu);
  $(window).on("resize", moveMenuPosition);

  moveMenuPosition();

  // toggle.on("click", function (event) {
  //   menuOpen = !menuOpen;
  //   console.log("MENU ANCHOR");
  //   if (menuOpen) {
  //     console.log("OPEN MENU");
  //     if (window.innerWidth < 720) {
  //       $(".menuFull").css("left", "0");
  //     } else if (window.innerWidth < 950) {
  //       $(".menuFull").css("left", "69vw");
  //     } else if (window.innerWidth < 1200) {
  //       $(".menuFull").css("left", "75vw");
  //     } else {
  //       $(".menuFull").css("left", "78vw");
  //     }
  //   } else {
  //     console.log("CLOSE MENU");
  //     if (window.innerWidth < 720) {
  //       $(".menuFull").css("left", "140vw");
  //     } else {
  //       $(".menuFull").css("left", "120vw");
  //     }
  //   }
  // });

  // Menu close on outside click

  $(document).on("click", (e) => {
    if (
      !!menuOpen &&
      !$(e.target).closest($menuArea).length &&
      !$(e.target).closest($toggle).length
    ) {
      console.log("CLOSE MENU from outside");
      menuOpen = !menuOpen;
      if (window.innerWidth < 720) {
        $menuArea.css("left", "140vw");
      } else {
        $menuArea.css("left", "120vw");
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

  $(window).off("scroll");

  $(window).on("scroll", function (e) {
    if (menuOpen && window.innerWidth < 720) {
      e.preventDefault();

      console.log("No Scroll");
      return false;
    }

    let currentScroll = window.scrollY;

    if (menuOpen || prevScroll > currentScroll) {
      $(".top").css("top", "0");
    } else {
      $(".top").css("top", "-65");
    }
    prevScroll = currentScroll;
  });
});
