$(document).ready(function() {
    $("#myform").submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "formulario.php",
            data: $("#myform").serialize(),
            cache: false,
            success: function(result) {
                $("#myform").html('<img src="../img/apu.jpg" style="display:block;margin-right:auto;margin-left:auto;padding-bottom:10px;">');
            }
        });

    });
});