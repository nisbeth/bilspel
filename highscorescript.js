$(document).ready(function(){

    $("#button").click(function(){
        start += 3;
        
        score();
    });


    start = 0;
    end = 3;

    score();
    
});


function score(){
    $("#list").empty();

    console.log(start +" - "+ end)

    $.getJSON("http://ettjavlabilspel.com/get_score.php?startlimit=0&endlimit=10"+start+"&endlimit="+end, function (data){
        $.each(data, function(i, item) {
            $('#list').append(
                $('<li></li>').html(item.username + " - " + item.highscore)
            );
        });
    });

}