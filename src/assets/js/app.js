import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

//Gallery slider
const mainImage = document.getElementById("mainImage");
const thumbnails = document.querySelectorAll(".thumb");

thumbnails.forEach((thumb) => {

    thumb.addEventListener("click", () => {
    	mainImage.style.opacity = 0;
    	setTimeout(() => {
    		mainImage.src = thumb.dataset.full;
        	mainImage.alt = thumb.alt;
        	mainImage.style.opacity = 1;
    	}, 150);
        

        thumbnails.forEach(item => item.classList.remove("active"));
        thumb.classList.add("active");

    });

});