jQuery(document).ready(function ($) {
  const $menuArea = $(".menuFull");
  const $toggle = $("#menuToggleAnchor");
  const $html = $("html");
  const $body = $("body");
  const onMobile = window.innerWidth < 720;
  let menuOpen = false;

  // Scroll variables

  const $navTop = $("nav.top");
  let scrollCheck;
  let prevScroll = window.scrollY;
  let delta = 5;

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
      menuOpen = !menuOpen;
      if (window.innerWidth < 720) {
        $menuArea.css("left", "140vw");
      } else {
        $menuArea.css("left", "120vw");
      }
    }
  });

  // Hide nav on scroll

  $(window).on("scroll", function (e) {
    scrollCheck = true;
  });

  setInterval(function () {
    if (scrollCheck) {
      scrollAction();
      scrollCheck = false;
    }
  }, 250);

  function scrollAction() {
    const currentScroll = window.scrollY;

    if (Math.abs(prevScroll - currentScroll) <= delta) return;

    if (menuOpen || currentScroll < prevScroll) {
      $navTop.css("top", "0");
    } else {
      $navTop.css("top", "-46");
    }

    prevScroll = currentScroll;
  }
});
