/**
 * Created by claudia on 8/11/2016.
 */

function sendEmail(nombre,apellidos,email,mensaje){
    $.ajax({
        type:"Post",
        url:"../contacto.php",
        data:{nombre:nombre, apellidos:apellidos,email:email, mensaje:mensaje},
        success:function(data){
            $("#email").html(data);
        }
        }
    );
}