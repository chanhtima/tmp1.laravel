
// back to top

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#back-to-top').fadeIn(); 
        } else { 
            $('#back-to-top').fadeOut(); 
        } 
    }); 
    $('#back-to-top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

// cookie

function acceptAll() {

    var cookieDiv = document.querySelector(".la-cookie-01-basic");
    cookieDiv.style.display = "none";
  }

  function closeDiv() {

    var cookieDiv = document.querySelector(".la-cookie-01-basic");
    cookieDiv.style.display = "none";
  }