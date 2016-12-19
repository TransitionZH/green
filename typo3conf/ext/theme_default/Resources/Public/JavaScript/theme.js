
$(document).ready(function() {

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
    console.log(posHide, posY);
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
			subcategories.toggle();
			otherBodies.children('.category-heading').addClass('category-heading-centered');
			otherBodies.children('.subcategories').hide();

			category.fadeTo('fast', 1);
			if (!subcategories.is(':hidden')) {
				otherCategories.fadeTo('fast', 0.5);
			} else {
				otherCategories.fadeTo('fast', 1);
			}
		}
	);

});
