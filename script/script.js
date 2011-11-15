$(document).ready(function() {
    $("#fb").click(function() {
        $(".networkBtn").slideToggle("slow");
    });
});


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


$(document).ready(function (){
    $('#content').fadeIn('1000');
});

 /*function checkForm(){
    var gname;
    var gemail;
    var gurl;
    var gmessage;
}
with(window.document.guestform){
    gname = txtName;
    gemail = txtEmail;
    gurl = txtUrl;
    gmessage = txtMessage;
}
if(trim(gname.value) == ''){
    alert("Enter name");
    gname.focus();
    // return false;
} 









/*$(document).ready(function () {

    $("#contact").click(function (){

        $(".contact_container").slideToggle(500);

    });

    $("#index").click(function (){

        $(".index_container").slideToggle(500);

    });

    $("#images").click(function (){

        $(".images_container").slideToggle(500);

    });

    $("#photos").click(function (){

        $("#image_gallery").toggle(500);

    });

});

$(document).ready(function (){
    $("#images").click(function(){
        $(".index_container").hide(10);
        $(".contact_container").hide(10);
        $(".images_container").show(1500);
    });
    $("#contact").click(function(){
        $(".index_container").hide(10);
        $(".images_container").hide(10);
        $(".contact_container").show(1500);
        $(".contact_container").css("background", "red");
    });
    $("#index").click(function(){
        $(".contact_container").hide(10);
        $(".images_container").hide(10);
        $(".index_container").show(1500);
    });
}); */


function displayDate() {
    document.getElementById("#date").innerHTML=Date();
}