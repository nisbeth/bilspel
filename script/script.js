
//jQuery
//
$(document).ready(function() {
    $("#fb").click(function() {
        $(".networkBtn").slideToggle("slow");
    });
});



// fadetoggles the info list on the contact page
$(document).ready(function(){
    $("#contact_e").click(function(){
        $("#emil").fadeToggle("100");
    });

    $("#contact_s").click(function(){
        $("#simon").fadeToggle("100");
    });
    
    $("#contact_a").click(function(){
        $("#andreas").fadeToggle("100");
    });

    $("#contact_j").click(function(){
        $("#jonas").fadeToggle("100");
    });
    
});


// fadesIn the content div
$(document).ready(function (){
    $('#content').fadeIn('1000');
});


// show's and hides (toggles) the twitter and facebook
// imgs in the animation
$(document).ready(function(){
  $('#twBtn').toggle(function(){
      $('.tw').animate({opacity: 1, left: '+=40', width: 'fadeIn'}
       , 500, function(){
          
      });
   },function(){
      $('.tw').animate({opacity: 1, left: '-=40', width: 'fadeOut'}
       , 500, function(){
          
    });
  });
});


// open the pages twitter and facebook in new windows, 
// when clicked.
function open_tw()
{
window.open("http://www.twitter.com/ettjavlabilspel")
}

function open_fb()
{
window.open("http://www.facebook.com/pages/Ett-j%C3%A4vla-bilspel/210757385658796?sk=wall")
}


$(document).ready(function(){
    $('#moreSS').click(function(){
        $('.screenshots2').slideToggle('200');
    });
});