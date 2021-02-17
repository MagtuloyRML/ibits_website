var slides = document.querySelectorAll('.slide');
		var btns = document.querySelectorAll('.btttn');
		let currentSlide = 1;

		//Manual slides
		var manualNav = function(manual){

			slides.forEach((slide) => {
        		slide.classList.remove('active');

	        btns.forEach((btttn) => {
    	    	btttn.classList.remove('active');
        	});
      	});

			slides[manual].classList.add('active');
			btns[manual].classList.add('active');
		}

		btns.forEach((btttn, i) => {
    		btttn.addEventListener("click", () => {
        	manualNav(i);
        	currentSlide = i;
      		});
    	});

    	//Autoplay slides
    	var repeat = function(activeClass){
    		let active = document.getElementsByClassName('active');
    		let i = 1;

    		var repeater = () => {
    			setTimeout(function(){
    				[...active].forEach((activeSlide) =>{
    					activeSlide.classList.remove('active');

    				});

    			slides[i].classList.add('active');
    			btns[i].classList.add('active');
    			i++;

    			if(slides.length == i){
    				i=0;
    			}
    			if(i >= slides.length){
    				return;
    			}
    			repeater();

    			}, 10000);
    		}
    		repeater();
    	}
    	repeat();