
$(document).ready(function() {

	$('.initiative-body').dotdotdot({
		after: '.initiative-links'
	});

	$('.initiative-show-more').click(function() {
		$(this).closest('.initiative').height('auto');
		$(this).closest('.initiative-body').trigger('destroy.dot');
	});

  //
  // cookie bar
  // -------------------------------------------- //
  var cookieBarMessage;
  var cookieBarAcceptMessage = 'OK';

  if($('html').attr('lang')==='de') {
    cookieBarMessage = 'Cookies helfen uns, unseren Service für Sie zu verbessern. Wenn Sie unsere Webseite weiterhin verwenden, erklären Sie sich damit einverstanden, dass wir Cookies verwenden.';
  }

  $.cookieBar({
    message: cookieBarMessage,
    acceptText: cookieBarAcceptMessage,
    fixed: true,
    bottom: true
  });

    // carousel
	// ------------------------------------------------------------------------- //
	$('section#pageMedia .carousel-inner .item, section#pageMediaContentPages .carousel-inner .item').first().addClass('active');

	// carousel indicators
	// ------------------------------------------------------------------------- //
	if($('section#pageMedia .carousel-inner .item').length === 1) {
		$('section#pageMedia .carousel-control').hide();
	}
//	$('section#pageMedia #carousel-bg').prepend('<ol class="carousel-indicators" />');
	if($('section#pageMedia .carousel-inner .item').length > 1){
		for (var i = 0; i < $('section#pageMedia .carousel-inner .item').length ; i++) {
			if(i===0) {
				$('section#pageMedia .carousel-indicators').append('<li data-target="#carouselMedia" data-slide-to="'+ i +'" class="active">' + i + '</li>');
			}
			else {
				$('section#pageMedia .carousel-indicators').append('<li data-target="#carouselMedia" data-slide-to="'+ i +'">' + i + '</li>');
			}
		}
	}

	// Colorbox
	// ------------------------------------------------------------------------- //
//	$('a.colorbox').colorbox({
//		rel: 'gal',
////		current: '{current} / {total}',
//		maxWidth: '80%',
//		maxHeight: '80%',
//		onLoad: function() {
//		},
//		onComplete:function(){
//		}
//	});


  // Scrolling
	// ------------------------------------------------------------------------- //
	var posY;
	var posHide = 20;
	$(window).bind( 'scroll', function() {
		posY = $(window).scrollTop();
		if(posY>posHide && !$('header#pageHeader').hasClass('fixedHeader')) {
			$('header#pageHeader, section#pageMedia').addClass('fixedHeader');
		}
		else if(posY<posHide && $('header#pageHeader').hasClass('fixedHeader')) {
			$('header#pageHeader, section#pageMedia').removeClass('fixedHeader');
		}
	});

	$('.category').click(function() {
			var category = $(this);
			var categoryID = category.attr('id');
			var categoryBody = category.children('.media-body');
			var otherCategories = $('.category:not(#' + categoryID + ')');
			var otherBodies = otherCategories.children('.media-body');
			var subcategories = categoryBody.children('.subcategories');

			categoryBody.children('.category-heading').toggleClass('category-heading-centered');
			otherBodies.children('.subcategories').hide(200);
			otherBodies.children('.category-heading').addClass('category-heading-centered');

			category.fadeTo('fast', 1);
			if (subcategories.is(':hidden')) {
				subcategories.show(200);
				otherCategories.fadeTo('fast', 0.5);
			} else {
				subcategories.hide(0);
				otherCategories.fadeTo('fast', 1);
			}
		}
	);

	$('.initiatives-grid-initiative > .initiative').click(function() {
		$(this).hide(0);
	});

	$('.initiatives-grid-initiative').hover(
		function() {
			$(this).children('.initiative').show(0);
		}, function() {
			$(this).children('.initiative').hide(0);
		}
	);
});

//// Tbd: Encode query of search form
//$(document).ready(function(){
//    $('input[type="search"]').closest('form').on('submit', function(e) {
//        var queryField = $(this).find('input[type="search"]');
//        queryField.val(encodeURIComponent(queryField.val()));
//    });
//});