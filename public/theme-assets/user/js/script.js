$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".page-scroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top - 100
      }, 700, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
// Ganti Warna Navbar
$(document).ready(function(){
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll > 100) {
			$(".navbar").css("background" , "#2F4F4F");
			$(".page-scroll").css("color", "#FFF");
		}

		else{
			$(".navbar").css("background" , "none");  	
			$(".page-scroll").css("color", "#000");
		}
	});
});

// Event Click Navbar
