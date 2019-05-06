jQuery(document).ready(function () {

  (function(jquery) {
    jquery(function() {
      //  open and close nav
      jquery('#navbar-toggle').click(function() {
        jquery('nav ul').slideToggle();
      });

      jQuery(".timeline li:nth-child(even)").addClass("timeline-inverted");

      // Hamburger toggle
      jquery('#navbar-toggle').on('click', function() {
        this.classList.toggle('active');
      });


      // If a link has a dropdown, add sub menu toggle.
      jquery('nav ul li a:not(:only-child)').click(function(e) {
        jquery(this).siblings('.sub-menu').slideToggle("slow");

        // Close dropdown when select another dropdown
        jquery('.sub-menu').not(jquery(this).siblings()).hide("slow");
        e.stopPropagation();
      });


      // Click outside the dropdown will remove the dropdown class
      jquery('html').click(function() {
        jquery('.sub-menu').hide();
      });
    });
  })(jQuery);

  (function(jquery) {
    jquery(function() {
       jquery(window).scroll(function () {
          if (jquery(this).scrollTop() > 50) {
             jquery('section.navigation').addClass('navBackground');
             jquery('section.navigation').addClass('navPadding');
             jquery('.navbar-brand img').addClass('small-img');
             jquery('nav ul li ul li a').css({"background-color":"#DCDFE5"});
          }
          if (jquery(this).scrollTop() < 50) {
             jquery('section.navigation').removeClass('navBackground');
             jquery('section.navigation').removeClass('navPadding');
             jquery('.navbar-brand img').removeClass('small-img');
             jquery('nav ul li ul li a').css({"background-color":"transparent"});
          }
       });
    });
  })(jQuery);


});
/*----------------------End Mobile Menu--------------------------------*/
