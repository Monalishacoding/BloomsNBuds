// Scrollable header

/*------------------------------------------------------------------------------*/
/* Menu
/*------------------------------------------------------------------------------*/

var menu = {
    initialize: function() {
        this.Menuhover();
    },

    Menuhover : function(){
        var getNav = $("nav.main-menu"),
            getWindow = $(window).width(),
            getHeight = $(window).height(),
            getIn = getNav.find("ul.menu").data("in"),
            getOut = getNav.find("ul.menu").data("out");

        if ( matchMedia( 'only screen and (max-width: 1200px)' ).matches ) {

            // Enable click event
            $("nav.main-menu ul.menu").each(function(){

                // Dropdown Fade Toggle
                $("a.mega-menu-link", this).on('click', function (e) {
                    e.preventDefault();
                    var t = $(this);
                    t.toggleClass('active').next('ul').toggleClass('active');
                });
                 // Megamenu style
                $(".megamenu-fw", this).each(function(){
                    $(".col-menu", this).each(function(){
                        $(".title", this).off("click");
                        $(".title", this).on("click", function(){
                            $(this).closest(".col-menu").find(".menu-col").stop().toggleClass('active');
                            $(this).closest(".col-menu").toggleClass("active");
                            return false;
                            e.preventDefault();

                        });

                    });
                });
            });
        }
    },
};


$('.btn-show-menu-mobile').on('click', function(e){
    $(this).toggleClass('is-active');
    $('.menu-mobile').toggleClass('show');
    return false;
    e.preventDefault();
});

// Initialize
$(document).ready(function(){
    menu.initialize();

});
