$(document).ready(function () {
	$(document).ready(function () {
		$('.news__slider').slick({
			arrows: false,
			dots: false,
			slidesToShow: 1,
			autoplay: false,
			speed: 1500,
			autoplaySpeed: 800,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1
					}
				},
				{
					breakpoint: 550,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});
		$('.teachers__slider').slick({
			dots: false,
			arrows: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			speed: 1500,
			infinite: true,
			initialSlide: 0,
			autoplay: true,
			autoplaySpeed: 3000,
			pauseOnFocus: true,
			pauseOnHover: true,
			draggable: true,//свайпы на пк
			swipe: true,//свайпы на тачскринах
			touchThreshold: 5,//услие для свайпа
			touchMove: true,//анимация передвижения слайдера
			waitForAnimate: true,//задержка между анимациями
			centerMode: false,//выравнивание главного слайда по центру экрана
			variableWidth: false,//при true ширина слайда зависит от содержимого 
			//при false ширина слайда автоматически расчитывается 
			rows: 1,//количество объектов содержимых в одном слайде
			sliderPerrows: 1,
			vertical: false,//вертикальный слайдер
			verticalswiping: false,//вертикальный свайп
			responsive: [
				{
					breakpoint: 980,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});
	});
});
