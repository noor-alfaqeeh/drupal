(function($) {
  Drupal.behaviors.gallery = {
    attach: function (context) {
      $(".fancybox").fancybox({
      	toolbar: true,
      	buttons: [
        "zoom",
        "slideShow",
        "fullScreen",
        "download",
        "thumbs",
        "close"
        ],
      });
    }
  }
})(jQuery);