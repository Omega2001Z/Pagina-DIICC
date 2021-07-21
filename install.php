<?php
	// Datos admin SQL
	$servidor = "localhost";
	$usuario  = "root";
	$password = "";
	$database = "paginaDIICC";

	// Crear conexión
	$conexion = new mysqli($servidor, $usuario, $password);
	if ($conexion->connect_error) {
	    die("Conexion fallida: ".$conexion->connect_error);
	} else {
		echo "Conexión exitosa.<br><br>";
	}

	// Creación de la base de datos "paginaDIICC"
	$sql = "create database {$database};";
	if ($conexion->query($sql) === true) {
		echo "Base de datos '{$database}' creada correctamente.<br>";
	} else {
		die("No pudo crearse la base de datos '{$database}': ".$conexion->error);
	}

	// Selección de la base de datos "paginaDIICC"
	if (mysqli_select_db($conexion, $database) === true) {
		echo "Base de datos '{$database}' seleccionada correctamente.<br><br>";
	} else {
		die("No pudo seleccionarse la base de datos '{$database}': ".$conexion->error);
	}

	// Creación de la tabla de Usuarios
	$sql = "create table Usuarios
	(
		correo    varchar(45) not null primary key,
		password  varchar(255) not null,
		nombre    varchar(25) not null,
		apellido  varchar(25) not null
	);";
	if ($conexion->query($sql) === true) {
		echo "Tabla 'Usuarios' creada correctamente.<br>";
	} else {
		die("No pudo crearse la tabla 'Usuarios': ".$conexion->error);
	}

	// Ojo, se considera mala práctica contener imágenes en la BD, usar dirección de la imagen

	// Creación de la tabla de Noticias
	$sql = "create table Noticias
	(
	   id    		int(11) auto_increment not null primary key,
	   titulo       varchar(250) not null,
	   fecha        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	   descripcion  text not null,
	   imagen       longblob,
	   correo       varchar(45) not null,
	   FOREIGN KEY (correo) REFERENCES Usuarios(correo) 
	);";

	if ($conexion->query($sql) === true) {
		echo "Tabla 'Noticias' creada correctamente.<br><br>";
	} else {
		die("No pudo crearse la tabla 'Noticias': ".$conexion->error);
	}

	// Datos administrador
	$correo   = "admin@uda.cl";
	$pass     = "admin";
	$nombre   = "Admin";
	$apellido = "Istrador";

	// Creación del hash de la contraseña
	$hash = password_hash( $pass, PASSWORD_DEFAULT );

	// Inserción del administrador a la tabla Usuarios
	$sql = "INSERT INTO `usuarios` (`correo`, `password`, `nombre`, `apellido`)
		    VALUES ('".$correo."','".$hash."','".$nombre."','".$apellido."');";
	
	if ($conexion->query($sql) === true) {
		echo "Administrador creado correctamente.<br>";
		echo "Usuario: admin@uda.cl<br>";
		echo "Password: admin<br>";
	} else {
		die("No pudo crearse el Administrador: ".$conexion->error);
	}
	/*
	INSERT INTO `noticias` (`id`, `titulo`, `fecha`, `descripcion`, `imagen`, `correo`)
	VALUES (NULL, 'Tulio se ha arrancado con los ahorros del canal!', current_timestamp(), 'El presentador Tulio Triviño Tufillo ha estafado el canal de 31 minutos!', NULL, 'admin@uda.cl')
	*/
?> 