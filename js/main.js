var clicked = true;
var mobile = false;
$(".menu nav img").click(function(){
if (clicked == true){
$(".menu nav a").css("display","block");
$(".menu").css("background","black");
clicked = false;
mobile = true;
console.log(mobile);
}else {
 $(".menu nav a").css("display","none") ;
 $(".menu").css("background","");
 clicked = true;
 mobile = false
}
});

$(document).scroll(function(){
  var scroll = $(document).scrollTop();
  var work = $(".work").offset().top - 56.67;

  if (scroll > work-1){
    $(".menu").css("position","fixed");
      $(".menu").css("top","0");
  }else {
    $(".menu").css("position","absolute");
      $(".menu").css("bottom","0");
        $(".menu").css("top","");
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
        var heght = target.offset().top;
        if (mobile){
            heght += -250;
        }else{
          heght += -56.67;
        }
        $('html, body').animate({
          scrollTop: heght
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          // var $target = $(target);
          // $target.focus();
          // if ($target.is(":focus")) { // Checking if the target was focused
          //   return false;
          // } else {
          //   $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          //   $target.focus(); // Set focus again
          // };
        });
      }
    }
  });
