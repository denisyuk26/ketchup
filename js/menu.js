var menumob='close';


$(document).ready(function(){
    $('.menu-mob').on('click', showMmenu);


    $("form").submit(function() {
        $.ajax({
            type: "GET",
            url: "email.php",
            data: $("form").serialize()
        }).done(function() {
            alert("Спасибо за заявку!");
            setTimeout(function() {
                $.fancybox.close();
            }, 1000);
        });
        return false;
    });


    function showMmenu(){
        if (menumob =='close') {
            $(this).animate({
                'top': 0
            },500);
            menumob = 'open';
            $('.open').fadeOut(250);
            $('.close').fadeIn(250);
        }
        else {
            $(this).animate({
                'top': '-55px'
            },500);
            menumob = 'close';
            $('.open').fadeIn(250);
            $('.close').fadeOut(250);
        }


    }

});





