var slideIndex3 = 1;
		displaySlide3(slideIndex2);

		function moveSlides3(n) {
			displaySlide3(slideIndex3 += n);
		}

		function activeSlide3(n) {
			displaySlide3(slideIndex3 = n);
		}

		/* Main function */
		function displaySlide3(n) {
			var i;
			var totalslides3 =
				document.getElementsByClassName("testimonials");
			
			var totaldots3 =
				document.getElementsByClassName("footerdot3");
			
			if (n > totalslides3.length) {
				slideIndex3 = 1;
			}
			if (n < 1) {
				slideIndex3 = totalslides3.length;
			}
			for (i = 0; i < totalslides3.length; i++) {
				totalslides3[i].style.display = "none";
			}
			for (i = 0; i < totaldots3.length; i++) {
				totaldots3[i].className =
				totaldots3[i].className.replace(" active", "");
			}
			totalslides3[slideIndex3 - 1].style.display = "block";
			totaldots3[slideIndex3 - 1].className += " active";
		}