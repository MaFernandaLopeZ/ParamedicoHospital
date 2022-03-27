$("img[name=b1]").click(function () {

    $("img[name=b1]").fadeToggle("fast");
    if ($('#c1').prop('checked') ) {
        $("#c1").removeAttr("checked");
        $(".cuadro1").slideDown();
        
    }else{
        $('#c1').attr('checked', true);
        $(".cuadro1").slideUp();
    }
    $("img[name=b1]").slideToggle("slow");
});

$("#link1").click(function () {
    alert("Se ha enviado la alerta al Hospital");
});

