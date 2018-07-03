  var clicked = false;
$(document).ready(function(){
clicked = false;
  $("#menu-icon").on("click",function(e){
    e.preventDefault();
    if(clicked == false){
        $(".menu nav a").css("display","inline-block");
        clicked = true;
    }else {
  $(".menu nav a").css("display","none");
    $(".menu nav a:first-of-type").css("display","block");
clicked = false;
    }
  })
});

$(document).scroll(function(){
  var i = $(document).scrollTop();
  var p = $("#work").offset().top;
  if (i >= p -1 ){
    $(".menu nav a:first-of-type").css("display","block");
    $(".menu").css("position","fixed");
    $(".menu").css("top","0");

  }else if(i < p) {
      $(".menu").css("position","relative");
        $(".menu nav a:first-of-type").css("display","none");
        $(".menu nav a").css("display","none");
        clicked = false;
  }
});


//This set of code adds smooth scrolling effects to all links
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
