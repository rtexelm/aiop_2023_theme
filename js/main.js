jQuery(document).ready(function ($) {
  const $menuArea = $(".menuFull");
  const $toggle = $("#menuToggleAnchor");
  const $html = $("html");
  const $body = $("body");
  const onMobile = window.innerWidth < 720;
  let menuOpen = false;

  let prevScroll = window.scrollY;

  // Menu toggle
  // Prevent scrolling while menu open

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

  // Hide nav on scroll

  $(window).off("scroll");

  $(window).on("scroll", function (e) {
    if (menuOpen && window.innerWidth < 720) {
      e.preventDefault();

      return false;
    }

    let currentScroll = window.scrollY;

    if (menuOpen || prevScroll - 65 > currentScroll) {
      $(".top").css("top", "0");
    } else {
      $(".top").css("top", "-65");
    }
    prevScroll = currentScroll;
  });
});
