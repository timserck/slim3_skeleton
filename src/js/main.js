$.getJSON( "http://localhost/slim/products", function( data ) {
	var items = [];
	$.each( data, function( key, val ) { $.each(val, function(key, val){
		if (key == 'id' ) {}
		else if (key == 'img') {
			items.push( "<li id='" + key + "'>" + "<img src='" +val +"' alt='' /></li>" );
		}
		else{
			items.push( "<li id='" + key + "'>" + val + "</li>" );
		}
	});});
  	
    $( "<ul/>", {
    "class": "product_list",
    html: items.join( "" )
  }).appendTo( ".products" );

  });
 
