$(document).ready(function(){
  
	if ( !window.location.hash){
		$(window).load(function(){
			$.when( $('main').transition({ x: '0px', delay:800 }, 2000, 'snap') )
				.then( setTimeout(function(){
					$('#loader').hide();
				},2000));
		});
	} else {
		$(window).load(function(){
			$('main').transition({ x: '0px'}).show();
			$('#loader').hide();
		});
	}
  
  if($(window).width()>=820){
		
		$('#nav a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:target.offset().top},1000);return false;}}});}
}


);

