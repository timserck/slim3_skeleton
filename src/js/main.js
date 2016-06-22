if ($('.products').length > 0) {

$.getJSON( "http://localhost/slim/products", function( data ) {
	var items = [];
	$.each( data, function( key, val ) { $.each(val, function(key, val){
		if (key == 'id' ) {}
		else if (key == 'img') {
			items.push( "<li class='" + key + "'>" + "<img src='" + val +"' alt='' /></li>" );
		}
		else{
			items.push( "<li class=' " + key + "'>" + val + "</li>" );
			if (key == 'description') {
				items.push( "<a href='test'>buy</a>" );
			}
		}
	});});
  	
    $( "<ul/>", {
    "class": "product_list",
    html: items.join( "" )
  }).appendTo( ".products" );

  });
 
}