$( "#url" ).focus();
$( ".mirror-button" ).click(function() {
	$( ".alert" ).hide();
  if( $( "#url" ).val().length > 0 ){
  
	$(this).prop("disabled",true);
	$( ".status-icon" ).removeClass( "fa-unlock fa-lock" ).addClass( "fa-spin fa-refresh" );
	  
    var jsonData;

	$.ajax({
	url: 'https://api.vid.me/grab?url='+$( "#url" ).val(),
	dataType: 'json',
	success: function(response) {
		jsonData = response;
		if(jsonData.status == true){
			$( ".success-block" ).show();
			$( ".preload-block" ).hide();
			$( ".status-icon" ).removeClass( "fa-spin fa-refresh" ).addClass( "fa-unlock" );
			$( "#link-button" ).html( jsonData.url + " <i class=\"fa fa-external-link\"></i>" );
			$( "#link-button" ).data( "link", jsonData.url );
		} else {
			$( ".status-icon" ).removeClass( "fa-spin fa-refresh" ).addClass( "fa-lock" );
		}

		$( "#url" ).focus();
		
		$(this).prop("disabled",false);
	}, 
	error : function(response) {
		if(response.responseJSON.param){
			$( ".alert" ).show();
			$( ".alert" ).html("<i class=\"fa fa-fire-extinguisher\"></i> " + response.responseJSON.param);
		}
		$( ".status-icon" ).removeClass( "fa-spin fa-refresh" ).addClass( "fa-lock" );
		
		$( "#url" ).focus();
		
		$(this).prop("disabled",false);
	}});
  } else {
  	
  } 
});

$( "#link-button" ).click(function() {
	window.open($( "#link-button" ).data( "link" ));
});

$( ".redo-button" ).click(function() {
	$( ".success-block" ).hide();
	$( ".preload-block" ).show();
	$( ".status-icon" ).removeClass( "fa-unlock fa-spin fa-refresh" ).addClass( "fa-lock" );
	$( "#url" ).val( "" );
});