CREATE DATABASE Alquilartemis;

USE Alquilartemis;

CREATE TABLE clientes(
id_cliente INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Nombre_cliente VARCHAR(90) NOT NULL,
Telefono VARCHAR(50) NOT NULL,
ciudad_cliente VARCHAR(60) NOT NULL,
Direccion VARCHAR(90) NOT NULL
);

CREATE TABLE empleados(
id_empleado INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Nombre_empleado VARCHAR(90) NOT NULL,
Celular_empleado VARCHAR(50) NOT NULL,
Direccion VARCHAR(90) NOT NULL
);

CREATE TABLE cotizacion(
id_cotización INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
id_cliente_co INT,
id_empleado_co INT,
fecha_cotizacion DATE NOT NULL,
Hora_cotización TIME NOT NULL,
Foreign Key (id_cliente_co) REFERENCES clientes(id_cliente),
Foreign Key (id_empleado_co) REFERENCES empleados(id_empleado)
);

CREATE TABLE cotizacion_detalle(
id_detalle INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
id_producto_det INT,
id_cotización_det INT,
cantidad_producto INT,
precio_venta INT NOT NULL,
Cantidad_dia INT NOT NULL,
Ciudad_entrega VARCHAR(90),
Dirección_entrega VARCHAR(90),
Foreign Key (id_producto_det) REFERENCES productos(id_producto),
Foreign Key (id_cotización_det) REFERENCES cotizacion(id_cotización)
);

CREATE TABLE productos(
id_producto INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Nombre_producto VARCHAR(90) NOT NULL,
precio_unitario INT NOT NULL,
unidades_pedidas INT NOT NULL,
stock INT NOT NULL
);