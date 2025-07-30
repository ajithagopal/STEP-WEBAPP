$(document).ready(function() {
	$(".base_url").each(function() {
		$(this).attr("href",$(this).attr("href").replace(".steptest.in",".thehindustep.in"));	
	});	
});
var api_url 	= 'https://api.thehindustep.in/'
var client_url 	= 'http://localhost:3000/'
var product_storage_url = 'https://storage.googleapis.com/assets.thehindustep.in/products_staging/'
var banner_storage_url = 'https://storage.googleapis.com/assets.thehindustep.in/banner_staging/'