$(".app-atalhos").owlCarousel({
    loop: false,
    margin: 0,
    responsiveClass: true,
    dots: true,
    responsive:{
		0:{
			items: 4,
			nav: false
		},
		600:{
			items: 6,
			nav: false
		},
		1000:{
			items: 8,
			nav: false,
			loop: false
		}
	}
});

setTimeout(function(){
	$(".iconNuSplash").addClass("splash-passo-2");
	$(".nameSplash").removeClass("none");
	$(".nameSplash").addClass("splash-passo-3");
}, 999);

setTimeout(function(){
	$("#splash").addClass("none");
	$(".splashHead").addClass("showConfig");
	$(".splashBody").addClass("showDetalhesCartao");
	$(".splashFooter").addClass("showAtalhos");
	$(".app-content").removeClass("none");
}, 1999);