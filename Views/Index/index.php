<div class="container">
    <div class="card card-container">
        <h2 class="titleLogin">Iniciar sesi&oacute;n</h2>
        <!-- action="#" -->
        <form class="form-signin" id="Session" name="Session" method="POST">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
            <button type="submit" class="btn btn-signin" id="btnLogin">Iniciar sesi&oacute;n</button>
            <!-- type="button" onclick="userLogin()"-->
        </form><br>
        <a href="Index/signIn">Registrarse</a>
    </div>
</div>
<script>
    /*function userLogin() {
        var email = $('form[name=Session] input[name=email]')[0].value;
        var password = $('form[name=Session] input[name=password]')[0].value;
        if (email == "" && password == ""){

        }else {
            $.ajax({
                type:"POST",
                url:"<?php echo URL;?>User/userLogin",
                data:{email:email, password:password}
            
            }).done(function (response) {
                //alert(response);
                if (response == 1){
                    window.location = "<?php echo URL; ?>Principal/principal";
                }else{
                    alert("Email o contrasena incorrectos");
                }
            });
        }
    }*/

    $(function(){
       $('#btnLogin').click(function () {
           var email = $('form[name=Session] input[name=email]')[0].value;
           var password = $('form[name=Session] input[name=password]')[0].value;
           if (email == "" || password == ""){

           }else {
               $.ajax({
                   type: "POST",
                   url: "<?php echo URL;?>User/userLogin",
                   data: {email: email, password: password},
                   success: function (response) {
                       if (response == 1) {
                           document.location = "<?php echo URL; ?>Principal/principal";
                       } else {
                           alert("Email o contrasena incorrectos");
                       }
                   }
               });
               return false;//Evitar ejecutar el submit del formulario
           }

       });
    });
</script>