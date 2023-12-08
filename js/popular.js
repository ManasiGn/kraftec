var slideIndex1 = 1;
		displaySlide1(slideIndex1);

		function moveSlides1(n) {
			displaySlide1(slideIndex1 += n);
		}

		function activeSlide1(n) {
			displaySlide1(slideIndex1 = n);
		}

		/* Main function */
		function displaySlide1(n) {
			var i;
			var totalslides1 =
				document.getElementsByClassName("most-popular");
			
			var totaldots1 =
				document.getElementsByClassName("footerdot1");
			
			if (n > totalslides1.length) {
				slideIndex1 = 1;
			}
			if (n < 1) {
				slideIndex1 = totalslides1.length;
			}
			for (i = 0; i < totalslides1.length; i++) {
				totalslides1[i].style.display = "none";
			}
			for (i = 0; i < totaldots1.length; i++) {
				totaldots1[i].className =totaldots1[i].className.replace(" active", "");
			}
			totalslides1[slideIndex1 - 1].style.display = "block";
			totaldots1[slideIndex1 - 1].className += " active";
		}