
$(document).ready(function() {

  // Variables
  var $window = $(window), 
      $nav = $('.navbar'),
      $body = $('body'),
      navOffsetTop = $nav.offset().top - 32,
      $document = $(document),
      $topButton = $('.topButton'),
      $searchButton = $('.search-submit');

  // If user is not admin, hide logged-in bar
  if(!$body.hasClass('admin-bar')) {
    $body.removeClass('logged-in');
  }

  // Parallax Srolling
  $('section[data-type="background"]').each(function(){
    var $bgobj = $(this); // assigning the object
    $window.scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';
      // Move the background
      $bgobj.css({ backgroundPosition: coords });
    });
  });
  $('main[data-type="background"]').each(function(){
    var $bgobj = $(this); // assigning the object
    $window.scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';
      // Move the background
      $bgobj.css({ backgroundPosition: coords });
    });
  });

 


  function smoothScroll(e) {
    e.preventDefault();
    $document.off("scroll");
    var target = this.hash,
        menu = target;
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top-40
    }, 0, 'swing', function () {
      window.location.hash = target;
      $document.on("scroll", onScroll);
    });
  }

 /* // Scroll to top button (#topButton)
  $("#topButton").click(function() {
    $('html, body').animate({
      scrollTop: $("#main").offset().top
    }, 2000);
  });
  
  */

  // If scrolled to top, remove .has-docked-nav && .not-visible
  function resize() {
    $body.removeClass('has-docked-nav')
    $topButton.removeClass('not-visible')
    navOffsetTop = $nav.offset().top - 32;
    $window.trigger('resize');
    onScroll()
  }
  
  // Determine where the screen is, set/remove .has-docked-nav && .not-visible
  $window.scroll(function onScroll() {
    if(navOffsetTop < $window.scrollTop() && !$body.hasClass('has-docked-nav') && $body.hasClass('logged-in')) {
      $body.addClass('has-docked-nav')
    }
    if(navOffsetTop > $window.scrollTop() && $body.hasClass('has-docked-nav')) {
      $body.removeClass('has-docked-nav')
    }
    if(navOffsetTop < $window.scrollTop() && !$body.hasClass('has-docked-nav') && !$body.hasClass('logged-in')) {
      $body.addClass('has-docked-nav-logged-out')
    }
    if(navOffsetTop > $window.scrollTop() && $body.hasClass('has-docked-nav-logged-out')) {
      $body.removeClass('has-docked-nav-logged-out')
    }
  });
  
  
function ifMainPage() {
  if($body.hasClass('home')) {
    // Initialize Wookmark plugin
    function getWindowWidth() {
      return Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
    }
    // Instantiate wookmark after all images have been loaded
    var wookmark;
    var galContainer = $('#gallery-container');
    imagesLoaded(galContainer, function() {
      wookmark = new Wookmark('#gallery-container', {
        itemWidth: 350, // Optional min width of a grid item
        offset: 6, // Optional the distance from grid to parent
        flexibleWidth: function () {
          // Return a maximum width depending on the viewport
          return getWindowWidth() < 1024 ? '100%' : '50%';
        },
        autoResize: true,
        fillEmptySpace: false,

      });
    });
  }
}
  ifMainPage();

  function init() {
    $window.on('resize', resize)
    $('a[href^="#"]').on('click', smoothScroll)
    $('input').removeAttr('size')
    
  }
  
  init();

});

