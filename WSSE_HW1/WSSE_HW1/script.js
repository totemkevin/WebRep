;(function (d, $) {

var $window = $(window),
$container = $('#headerTopicContainer'),
$header = $('#headerContainer'),
$headerAfter = $header.next(),
headerY = $header.height(),
containerY = $container.height();

function initialize(){
	  $window.on('scroll', scroll);
	  $window.trigger('scroll');
  };

  function scroll(){

	  (containerY <= $window.scrollTop())?
		  _fixed() :
		  _static();

	  function _fixed(){
		  $header.css({
			  'position': 'fixed',
			  'top': 0,
			  'left': 0
		  });
		  $headerAfter.css('marginTop', headerY);
	  };

	  function _static(){
		  $header.css({
			  'position': 'static',
			  'top': '',
			  'left': ''
		  });
		  $headerAfter.css('marginTop', 40);
	  };

  };

  $window.on('load', initialize);

})(document, jQuery);