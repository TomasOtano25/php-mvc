<?php foreach ($array as $key => $value){ ?>
<div class="container">
    <div class="card card-container">
        <h2 class="titleLogin">Editar</h2>
        <!-- action="#" -->
        <form class="form-signin" id="Registrar" name="Registrar" method="POST">
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                    value="<?php echo $value["Name"]; ?>">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellido"
                    value="<?php echo $value["LastName"]; ?>">
            <input type="text" name="user" id="user" class="form-control" placeholder="Usuario"
                    value="<?php echo $value["User"]; ?>">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                    value="<?php echo $value["Email"];?>">
            <input type="text" name="password" id="password" class="form-control" placeholder="Contraseña"
                    value="<?php echo $value["Password"]; ?>">
            <input type="hidden" name="IdUser" id="IdUser" class="form-control" value="<?php echo $value["IdUser"]; ?>">
            <button type="submit" class="btn btn-signin" id="signin">Actualizar</button>
            <!-- type="button" onclick="userLogin()"-->
        </form>
    </div>
</div>
<?php } ?>
<script>
    $(function () {
        $('#signin').click(function () {
            var name = $('form[name=Registrar] input[name=name]')[0].value;
            var lastname = $('form[name=Registrar] input[name=lastname]')[0].value;
            var user = $('form[name=Registrar] input[name=user]')[0].value;
            var email = $('form[name=Registrar] input[name=email]')[0].value;
            var password = $('form[name=Registrar] input[name=password]')[0].value;
            var IdUser = $('form[name=Registrar] input[name=IdUser]')[0].value;
            if(name == "" || lastname == "" || user == "" || email == "" || password == "" || IdUser == ""){

            }else {
                $.ajax({
                    type:"POST",
                    url:"<?php echo URL;?>Edit/editDatos",
                    data: {name: name,lastname: lastname, user: user, email: email, password: password, IdUser:IdUser},
                    success: function (response) {
                        if (response == 1){
                            alert("Usuario actualizado con exito");

                            document.location = "<?php echo URL; ?>Principal/principal";
                        }else{
                            alert("Error");
                            $('.container-1').html(response);
                        }

                    }
                });
                return false;
            }


        });
    });
</script>