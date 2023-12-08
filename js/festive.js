var slideIndex2 = 1;
		displaySlide2(slideIndex2);

		function moveSlides2(n) {
			displaySlide2(slideIndex2 += n);
		}

		function activeSlide2(n) {
			displaySlide2(slideIndex2 = n);
		}

		/* Main function */
		function displaySlide2(n) {
			var i;
			var totalslides2 =
				document.getElementsByClassName("festive-class");
			
			var totaldots2 =
				document.getElementsByClassName("footerdot2");
			
			if (n > totalslides2.length) {
				slideIndex2 = 1;
			}
			if (n < 1) {
				slideIndex2 = totalslides2.length;
			}
			for (i = 0; i < totalslides2.length; i++) {
				totalslides2[i].style.display = "none";
			}
			for (i = 0; i < totaldots2.length; i++) {
				totaldots2[i].className =
				totaldots2[i].className.replace(" active", "");
			}
			totalslides2[slideIndex2 - 1].style.display = "block";
			totaldots2[slideIndex2 - 1].className += " active";
		}