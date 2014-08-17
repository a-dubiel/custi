(function ($) {
	"use strict";
	$(function () {
		$('.btn-add-to-mix').on('tap', function(e){
      var productId = $(this).data('product-id');
      var checkNonce = $(this).data('nonce');
      
      // check if there is a mix already created
      if(!$.cookie('custi_mix')){
         $.cookie('custi_mix', 'mix-' + Math.random().toString(36).substring(7), { expires: 7, path: '/' });
      }

      
      $.post('/wp-admin/admin-ajax.php', 
        { 
          action: 'add_to_mix',
          id : productId,
          nonce : checkNonce         
        },
        function(response){
          console.log(response); 
          console.log($.cookie('custi_mix'));
          return false;
          
        });
    
        e.preventDefault();
      });
	});
}(jQuery));