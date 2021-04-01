/*Sliders mobile*/
/*Sliders mobile*/
/*Sliders mobile*/
let slideIndex = 0;
showSlides();

function showSlides() {
  let i = 0;
  let slides = document.getElementsByClassName("slides-mob");
	
  let dots = document.getElementsByClassName("dot");
	
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
	
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
	
  slides[slideIndex-1].style.display = "block"; 
	
  dots[slideIndex-1].className += " active";
	
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

/*Sliders mobile*/
/*Sliders mobile*/
/*Sliders mobile*/

/*Sliders site*/
/*Sliders site*/
/*Sliders site*/

/*Variable slide*/

let myIndex = 0;
carousel();

function carousel() {
  let i;
	
  let x = document.getElementsByClassName("slide");
	
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  };
	
  myIndex++;
	
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "flex";
	
  setTimeout(carousel, 2000);    
};
/*Sliders site*/
/*Sliders site*/
/*Sliders site*/
