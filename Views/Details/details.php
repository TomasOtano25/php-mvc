<?php foreach ($array as $key => $value){ ?>
    <div class="container">
        <div class="card card-container">
            <h2 class="titleLogin">Detalles</h2>
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
                       value="<?php echo $value["Password"]; ?>" disabled>
                <a class="btnEnlace" href="<?php echo URL."Edit/edit/".$value["IdUser"];?>">Edit</a>
                <a class="btnEnlace" href="<?php echo URL."Delete/delete/".$value["IdUser"];?>">Delete</a>
            </form>
        </div>
    </div>
<?php } ?>
