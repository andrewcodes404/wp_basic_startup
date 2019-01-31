jQuery(document).ready(function($) {
  // $("body").css("background-color", "yellow")
  $(".nav-menu-mobile").hide();

  var btn = $(".menu-btn");

  btn.addClass("fa-bars");

  btn.click(function() {
    
    //toggle slide the mob-menu
    $(".nav-menu-mobile").slideToggle("slow", function() {});
    //change class of font-awesome icon
    if (btn.hasClass("fa-bars")) {
      btn.addClass("fade-out");
   
      setTimeout(() => {
        btn.removeClass("fa-bars fade-out").addClass("fa-times fade-in");
      }, 300);

    } else {
console.log("boom");

      btn.removeClass("fade-in");
      btn.addClass("fade-out");
      setTimeout(() => {
        btn.removeClass("fa-times fade-out").addClass("fa-bars fade-in");
      }, 300);
      
      
    }
  });

  //   $(".menu-btn-close").click(function() {
  //     $(".nav-menu-mobile").slideToggle("slow", function() {
  //       $(".menu-btn").removeClass("hide");
  //       $(".menu-btn-close").addClass("hide");
  //     });
  //   });
});
