var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=001",
	waitSeconds: 60,
	shim: {
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"cart" : {
			deps : ['jquery'],
		},
		'fancybox' : {
			deps : ['jquery'],
		},
		"unslider" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: dirTema+'/assets/js/jquery',
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		fancybox		: dirTema+'/assets/js/jquery.fancybox.pack',
		unslider		: dirTema+'/assets/js/unslider.min',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		main	        : dirTema+'/assets/js/default',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main'
], function($,router,cart,main){
	router.run();
	cart.run();
	main.run();
});