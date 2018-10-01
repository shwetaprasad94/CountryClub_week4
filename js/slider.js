var sliderIndex = 0;
slideShow();

function slideShow() 
{
    var i;
    var slide = document.getElementsByClassName("homeSlider");
    for (i = 0; i < slide.length; i++) {
       slide[i].style.display = "none";  
    }
    sliderIndex++;
    if (sliderIndex > slide.length) {sliderIndex = 1}    
    slide[sliderIndex-1].style.display = "block";  
    setTimeout(slideShow, 4000); // Change image every 3 seconds
}