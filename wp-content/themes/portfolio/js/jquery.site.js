$(document).ready(function(){

	$(document).on({
		click:function(e){
			$('body').toggleClass('open');
		}
	},'header .menu');

	
	$(document).on({
		click:function(e){
			e.preventDefault();
			$href = $(this).attr('href');
			$('main').animate({
				opacity:0
			},300,function(){
				console.log($href);
				$("main").load($href+" .main-container",function(){
					$('body').removeClass('open');
					history.pushState({},'',$href);
					$('main').animate({
						opacity:1
					},300);
				});
			})
		}
	},'.nav a, .listing');
	
});