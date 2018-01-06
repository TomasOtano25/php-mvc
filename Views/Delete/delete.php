<?php foreach ($array as $key => $value){ ?>
    <div class="container">
        <div class="card card-container">
            <h2 class="titleLogin">Eliminar</h2>
            <!-- action="#" -->
            <form class="form-signin" id="Registrar" name="Registrar" method="POST">
                Nombre<input type="text" name="name" id="name" class="form-control" placeholder="Nombre"
                       value="<?php echo $value["Name"]; ?>" disabled>
                Apellido<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellido"
                       value="<?php echo $value["LastName"]; ?>" disabled>
                Usuario<input type="text" name="user" id="user" class="form-control" placeholder="Usuario"
                       value="<?php echo $value["User"]; ?>" disabled>
                Email<input type="email" name="email" id="email" class="form-control" placeholder="Email"
                       value="<?php echo $value["Email"];?>" disabled>
                Password<input type="text" name="password" id="password" class="form-control" placeholder="Contraseña"
                       value="<?php echo $value["Password"]; ?>"disabled>
                <input type="hidden" name="IdUser" id="IdUser" class="form-control" value="<?php echo $value["IdUser"]; ?>">
                <button type="submit" class="btn btn-signin" id="delete">Eliminar</button>
                <!-- type="button" onclick="userLogin()"-->
            </form>
        </div>
    </div>
<?php } ?>
<script>
    $(function () {
        $('#delete').click(function () {
            var IdUser = $('form[name=Registrar] input[name=IdUser]')[0].value;
                $.ajax({
                    type:"POST",
                    url:"<?php echo URL;?>Delete/deleteDatos",
                    data: {IdUser:IdUser},
                    success: function (response) {
                        if (response == 1){
                            alert("Usuario eliminado con exito");

                            document.location = "<?php echo URL; ?>";
                        }else{
                            alert(response);
                            //console.log(response);
                        }

                    }
                });
                return false;
        });
    });
</script>