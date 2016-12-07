/**
 * Created by claudia on 8/11/2016.
 */


console.log(navigator.language);
function sendEmail(){

    var nombre=document.getElementById("name").value;
    var apellidos=document.getElementById("lastname").value;
    var email=document.getElementById("e-mail").value;
    //var telefono=document.getElementById("phone").value;
    var mensaje=document.getElementById("message").value;

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


function show_dropdown(id)
{
    //console.log(id);
    document.getElementById(id).style.display = "block";

}

function hide_dropdown(id)
{
    //console.log(id);
    document.getElementById(id).style.display = "none";
}

function go_view(view)
{
    document.location=view.concat('.php');
}

function go_tag(view,tag)
{
    document.location = view.concat('.php').concat('#').concat(tag);
}

function language (){

    if (navigator.language=="en-US"){

       document.location="index_EN.php"

    } else if (navigator.language=="es"){
        document.location="index.php"

    } else {
        document.location="index_EN.php"
    }

}