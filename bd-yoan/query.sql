CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),

)

CREATE TABLE usuario(
id INT AUTO_INCREMENT PRIMARY KEY not null,
nombre VARCHAR(40) not null ,
apellido VARCHAR(40) not null ,
edad  int(4) not null,
rut VARCHAR(10) not NULL,
telefono int(9) ,
);


INSERT INTO table_name (Column1, Column 2....)
  VALUES (value1, value2, ...);

  insert into usuario (nombre,apellido,edad,rut,telefono) 
	values ('jose','ramiro','34','1234567-9','1123456');


  DELETE FROM usuario WHERE id = 3