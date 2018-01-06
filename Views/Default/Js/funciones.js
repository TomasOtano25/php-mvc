$().ready(function () {
    $("#Session").validate({
        rules:{
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength: 6
            }
        },
        messages:{
            email:{
                required:"<center><td colspan='2'><font color='red'>Por favor, escriba su email.</font></td></center>",
                email: "<center><td colspan='2'><font color='red'>Por favor, escriba un  email valido</font></td></center>"
            },
            password:{
                required: "<center><td colspan='2'><font color='red'>Por favor, escriba su contraseña.</font></td></center>",
                minlength: "<center><td colspan='2'><font color='red'>Un minimo de 6 caracteres</font></td></center>"
            }
        }
    });
    $('#email').focus();
});

$().ready(function () {
    $("#Registrar").validate({
        rules:{
            name:{
                required:true,
                //name:true
            },
            lastname:{
                required:true,
                //lastname:true
            },
            user:{
                required:true,
                //user:true
            },
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength: 6
            }
        },
        messages:{
            name:{
                required:"<center><td colspan='2'><font color='red'>Por favor, escriba su nombre.</font></td></center>"
            },
            lastname:{
                required:"<center><td colspan='2'><font color='red'>Por favor, escriba su apellido.</font></td></center>"
            },
            user:{
                required:"<center><td colspan='2'><font color='red'>Por favor, escriba su nombre de usuario.</font></td></center>"
            },
            email:{
                required:"<center><td colspan='2'><font color='red'>Por favor, escriba su email.</font></td></center>",
                email: "<center><td colspan='2'><font color='red'>Por favor, escriba un  email valido.</font></td></center>"
            },
            password:{
                required: "<center><td colspan='2'><font color='red'>Por favor, escriba su contraseña.</font></td></center>",
                minlength: "<center><td colspan='2'><font color='red'>Un minimo de 6 caracteres.</font></td></center>"
            }
        }
    });
    $('#name').focus();
});