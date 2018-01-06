<div class="container">
    <div class="card card-container">
        <h2 class="titleLogin">Registrarse</h2>
        <!-- action="#" -->
        <form class="form-signin" id="Registrar" name="Registrar" method="POST">
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellido">
            <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
            <button type="submit" class="btn btn-signin" id="signin">Registrar</button>
            <!-- type="button" onclick="userLogin()"-->
        </form>
    </div>
</div>
<div class="container-1"></div>
<script>
    $(function () {
       $('#signin').click(function () {
           var name = $('form[name=Registrar] input[name=name]')[0].value;
           var lastname = $('form[name=Registrar] input[name=lastname]')[0].value;
           var user = $('form[name=Registrar] input[name=user]')[0].value;
           var email = $('form[name=Registrar] input[name=email]')[0].value;
           var password = $('form[name=Registrar] input[name=password]')[0].value;
           if(name == "" || lastname == "" || user == "" || email == "" || password == ""){
               
           }else {
               $.ajax({
                   type:"POST",
                   url:"<?php echo URL;?>User/signIn",
                   data: {name: name,lastname: lastname, user: user, email: email, password: password},
                   success: function (response) {
                       if (response == 1){
                           alert("Usuario registrado con exito");

                           document.location = "<?php echo URL; ?>";
                       }else{
                           alert("El email ya esta registrado");
                           //$('.container-1').html(response);
                       }

                   }
               });
               return false;
           }
           
           
       }); 
    });
</script>