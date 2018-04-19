/**
 * Created by Shaafi on 3/29/2017.
 */

// this function is for hiding/showing the search bar
// jQuery(document).ready(function(){
//     jQuery('#nav_search').on('click', function(event) {
//         jQuery('#search').slideToggle("slow");
//     });
// });
$(document).ready(function(){
    // $("#nav_search").click(function(){
    //     $("#search").slideToggle("slow");
    // });

    //this is for auto sliding the images in slider
    $('.carousel').carousel({
        interval: 3500
    }, 'cycle');
    
    var width = $(document).width();
    var sidebar = $('#profile-sidebar');

//alert(width);

if (width > 512) {
    sidebar.css('height', $('#right-sidebar').height());
    sidebar.css('margin-bottom', '15px');
}
else{
    sidebar.css('height', "auto");
//	document.getElementById("#profile-sidebar").style.height = "auto";
}


});
// this function is for showing user that a search bar exists for few sec and then hide it
// function toggleDiv() {
//     setTimeout(function () {
//         $("#search").hide();
//     }, 1000); // time in millisec
// }
//toggleDiv();


// Get the modal
var modal = document.getElementById('searchModal');

// Get the button that opens the modal
var btn = document.getElementById("nav_search");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goToTopBtn").style.display = "block";
    } else {
        document.getElementById("goToTopBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
