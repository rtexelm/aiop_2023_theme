jQuery(document).ready(function ($) {
  var menuOpen = false;
  var csShowMore = false;
  var prevScroll = window.scrollY;

  // function updateMarginSingleArtist() {
  //   const viewportWidth = $(window).width();
  //   // const singleArtistInfoArea = $(".info-area");
  //   const imgPlaceholder = $(".info-area");
  //   const heightToChange = singleArtistInfoArea.css("margin-top");
  //   // const gridClass = $(".artist-single");
  //   // const gridFirstRow = `${singleArtistImageH}px`;
  //   // const gridMoreRows = " repeat(auto-fill, 1fr)";

  //   if (viewportWidth <= 720 && marginToChange === 0) return;

  //   const singleArtistImage = $(".artist-single > .project-img");
  //   const singleArtistImageH = singleArtistImage.height();

  //   if (viewportWidth > 704) {
  //     singleArtistInfoArea.css("margin-top", singleArtistImageH + "px");
  //   } else {
  //     singleArtistInfoArea.css("margin-top", "0");
  //   }
  // }

  // // Call update margin function at start and at resize

  // updateMarginSingleArtist();
  // $(window).resize(() => updateMarginSingleArtist());

  // Hide nav on scroll

  $("#menuToggleAnchor").on("click", function (event) {
    menuOpen = !menuOpen;
    console.log("MENU ANCHOR");
    // $('.fullNav').attr("aria-hidden","true");
    // $('#menuFull a').each( function(){
    // 	$(this).attr("aria-hidden","true");
    // });
    // console.log(menuFullAnchors);
    if (menuOpen) {
      console.log("OPEN MENU");
      // $('.fullNav').attr("aria-hidden","false");
      // $('#menuFull a').each( function(){
      // 	$(this).attr("aria-hidden","false");
      // });
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "0");
      } else {
        $(".menuFull").css("left", "75vw");
      }
      // $(".menuFull").css("left", "75vw");
      // $(".menuFull").css("transform", "rotate(0deg)");
    } else {
      console.log("CLOSE MENU");
      // $('.fullNav').attr("aria-hidden","true");
      // $(".menuFull").css("transform", "rotate(0deg)");
      // $('#menuFull a').each( function(){
      // 	$(this).attr("aria-hidden","true");
      // });
      if (window.innerWidth < 720) {
        $(".menuFull").css("left", "140vw");
      } else {
        $(".menuFull").css("left", "120vw");
      }
    }
  });

  $(window).on("scroll", function () {
    let currentScroll = window.scrollY;

    if (menuOpen) return $(".top").css("top", "0");

    if (prevScroll > currentScroll) {
      // console.log("NAV DOWN");
      $(".top").css("top", "0");
    } else {
      $(".top").css("top", "-65");
    }
    prevScroll = currentScroll;
  });

  $("#cs_read_more").on("click", function (event) {
    csShowMore = !csShowMore;
    if (window.innerWidth <= 720) {
      if (csShowMore) {
        // console.log("CS OPEN");
        $(".cs_more_text").css("max-height", "1200px");
        $("#cs_read_more p").html("Show less");
      } else {
        // console.log("CS CLOSE");
        $(".cs_more_text").css("max-height", "0px");
        $("#cs_read_more p").html("Read more");
      }
    }
  });
  if (window.innerWidth > 720) {
    // console.log("BIGGER THAN 720");
    $("#cs_read_more").css("display", "none");
    $(".cs_more_text").css("max-height", "1920px");
  }
});

// $('#menuFull a').each( function(){
// 	console.log(this);
// 	$(this).attr("aria-hidden","true");
// });

// $('.fullNav').attr("aria-hidden","true");
// menuFullAnchors.attr("aria-hidden","true");
// console.log(menuFullAnchors);
