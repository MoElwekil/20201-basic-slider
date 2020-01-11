const slider = document.querySelector('.slider-images');
const sliderImages = document.querySelectorAll('.slider-images img');

let counter = 1;
const size = sliderImages[0].clientWidth;

slider.style.transform = 'translateX(' + (-size * counter) + 'px)';

const nextBtn = document.getElementById('next');
const prevBtn = document.getElementById('prev');

nextBtn.addEventListener('click', function(){
	if(counter >= sliderImages.length - 1) return ;
	slider.style.transition = "transform 0.4s ease-in-out";
	counter++;
	slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', function(){
	if( counter <= 0) return ;
	slider.style.transition = "transform 0.4s ease-in-out";
	counter--;
	slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

slider.addEventListener('transitionend', function(){

	if(sliderImages[counter].id === 'lastClone'){
		slider.style.transition = 'none';
		counter = sliderImages.length - 2;
		slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}

	if(sliderImages[counter].id === 'firstClone'){
		slider.style.transition = 'none';
		counter = sliderImages.length - counter;
		slider.style.transform = 'translateX(' + (-size * counter) + 'px)';
	}
	
});