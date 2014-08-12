(function($){
  $(document).ready(function() {

    $('img').svgmagic();
                    
    if (!Modernizr.svg) {
      $("img[src$='.svg']")
      .attr("src", fallback);
    }

    $('.entry-content p').addClass('hyphenate');

    Hyphenator.config({
        minwordlength:3,
        defaultlanguage:'de',
        persistentconfig:true
    });
    
    Hyphenator.run();

    var nav = responsiveNav(".nav-collapse", { 
        animate: true, // Boolean: Use CSS3 transitions, true or false
        transition: 284, // Integer: Speed of the transition, in milliseconds
        label: "☰ Navigation", // String: Label for the navigation toggle
        insert: "before", // String: Insert the toggle before or after the navigation
        customToggle: "", // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative", // String: Position of the opened nav, relative or static
        navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active", // String: Class that is added to  element when nav is active
        jsClass: "js" // String: 'JS enabled' class which is added to  element
    });


    //make page-transitions prettier
    $("._global-header").hide();
    $("._global-hero").hide();
    $("._global-main").hide();
        
    $("._global-header").fadeIn(550);
    $("._global-hero").delay(200).fadeIn(550);
    $("._global-main").delay(200).fadeIn(550);

  });
})(jQuery);