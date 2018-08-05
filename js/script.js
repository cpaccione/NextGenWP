jQuery(document).ready(function($) {

    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active-acc');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active-acc');
    });

	 $('img').addClass('img-fluid');

	 $('.home-slider').slick({
		 slidesToShow: 1,
		 adaptiveHeight: true,
		 dots: true,
         fade: true,
		 autoplay: true,
         autoplaySpeed: 10000
	 });


	$('.menu-footer-menu-container ul').addClass('footer-navigate');


/**
 * Bootstrap: Sleek, intuitive, and powerful front-end framework
 * docs: http://twitter.github.com/bootstrap/
 */

    /**
	 * Dropdown menu
	 * more information: http://twitter.github.com/bootstrap/javascript.html#dropdowns
	 */
    $('.dropdown-toggle').dropdown();
    $('.dropdown-toggle_').dropdown();

    // make menu open on hover
    $(".dropdown").hover(
        function () {
            $(this).addClass("open");
        },
        function () {
            $(this).removeClass("open");
        }
    );

	// make bootstrap fix for ipad
	$('body')
		.on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); })

	    /**
	 * html generation for the the select menu
	 * - menu list is converted to the form element <select>
	 * - menu links are converted to the form elements <option>,
	 *  Text within <i> tags is removed from the select menu.
	 *
	 * Select menu will be inserted in block with selector .buttons-container that should be present in the html code of the page
	 */
    var select_menu = '<select class="nav-select">';
    $("#css3-menu a").each(function() {
        var el = $(this);
        select_menu += '<option value="'+el.attr("href");
        if (el.parent().hasClass("active")) select_menu += ' selected';
        select_menu += '">'+el.html().replace(/<i>.*<\/i>/gi,'')+'</option>';
    });
    select_menu += '</select>';
    $(select_menu).appendTo(".buttons-container");
    // to work select element as menu, go to the next page on change
    $(".buttons-container select").change(function() {
        window.location = $(this).find("option:selected").val();
    });

});
