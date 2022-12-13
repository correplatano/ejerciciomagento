require([
    'jquery'
], function ($) {

    $("#best-mark").click(

            function(){

                alert("La mejor nota es: " + $("#best").text());
            })
    });

