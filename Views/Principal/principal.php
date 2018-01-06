<!--<a href="<?php echo URL; ?>User/destroySession">Cerrar Sesion</a>-->
    <!--<?php
        Session::start();
        $UserName = Session::getSession("User");
        echo "Bienvenido: ".$UserName;
    ?>-->
<a href="<?php echo URL.'Index/signin'; ?>">SignIn</a><br>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Password</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <?php foreach ($array as $key => $value){ ?>

        <tr>
            <td><?php echo $value["Name"]; ?></td>
            <td><?php echo $value["LastName"]; ?></td>
            <td><?php echo $value["User"]; ?></td>
            <td><?php echo $value["Email"]; ?></td>
            <td><?php echo $value["Password"]; ?></td>
            <td>
                <a href="<?php echo URL.'Edit/edit/'.$value["IdUser"]; ?>">Edit</a>
                <a href="<?php echo URL.'Details/details/'.$value["IdUser"]; ?>">Details</a>
                <a href="<?php echo URL.'Delete/delete/'.$value["IdUser"]; ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>

    </table>