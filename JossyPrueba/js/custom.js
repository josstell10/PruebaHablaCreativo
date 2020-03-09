$(document).ready(function(){
   // links scroll
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname) {
            var e = $(this.hash);
            if (e = e.length ? e : $("[name=" + this.hash.slice(1) + "]"), e.length) return $("html,body").animate({
                scrollTop: e.offset().top
            }, 1e3), !1
        }
    }); 
   //fin links scroll

    //formulario
    $("#f_orden").ajaxForm({
        success: function(e){
             $("#respuesta").slideDown(), $("#respuesta").html(e), $("#nombre").val(""), $("#telefono").val(""), $("#correo").val(""), $("#ciudad").val(""), $("#mensajeP").val("")
        },
        Error: function(e){
            $("#respuesta").slideDown(), $("#respuesta").html(e), $("#nombre").val(""), $("#telefono").val(""), $("#correo").val(""), $("#ciudad").val(""), $("#mensajeP").val("")
        },resetForm: true
        
    })
     //fin formulario
});