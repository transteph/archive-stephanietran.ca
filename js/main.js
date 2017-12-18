$(document).ready(function(){
  
	$(window).load(function(){
		$.when( $('main').transition({ x: '0px', delay:800 }, 2000, 'snap') )
			.then( setTimeout(function(){
				$('#loader').hide();
			},2000));
	});
  
  if($(window).width()>=820){$('#nav a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//,'')&&location.hostname==this.hostname){var target=$(this.hash);target=target.length?target:$('[name='+this.hash.slice(1)+']');if(target.length){$('html, body').animate({scrollTop:target.offset().top},1000);return false;}}});}
}


);

