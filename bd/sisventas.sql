/*
private user = root;
private host = localhost;
private password = ;
private name = sisventas;
*/

CREATE TABLE `categoria` (
  `categoria_id` int(7) NOT NULL,
  `categoria_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `categoria` (`categoria_id`, `categoria_nombre`) VALUES
(1, 'Sillas'),
(2, 'Mesas'),
(3, 'Sofás'),
(4, 'Camas'),
(5, 'Muebles de jardín'),
(6, 'Estanterías'),
(7, 'Escritorios'),
(8, 'Sillas ergonómicas'),
(9, 'Muebles rústicos'),
(10, 'Camas infantiles'),
(11, 'pepe');

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cliente_tipo_documento` varchar(20) NOT NULL,
  `cliente_numero_documento` varchar(35) NOT NULL,
  `cliente_nombre` varchar(50) NOT NULL,
  `cliente_apellido` varchar(50) NOT NULL,
  `cliente_provincia` varchar(30) DEFAULT NULL,
  `cliente_ciudad` varchar(30) DEFAULT NULL,
  `cliente_direccion` varchar(255) DEFAULT NULL,
  `cliente_telefono` varchar(20) DEFAULT NULL,
  `cliente_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cliente` (`cliente_id`, `cliente_tipo_documento`, `cliente_numero_documento`, `cliente_nombre`, `cliente_apellido`, `cliente_provincia`, `cliente_ciudad`, `cliente_direccion`, `cliente_telefono`, `cliente_email`) VALUES
(1, 'DNI', '12345678', 'Juan', 'Pérez', 'Cusco', 'Cusco', 'Av. del Sol 123', '987654321', 'juan.perez@gmail.com'),
(2, 'DNI', '87654321', 'María', 'Gómez', 'Cusco', 'Cusco', 'Calle Lima 456', '987123456', 'maria.gomez@hotmail.com'),
(3, 'DNI', '12348765', 'Carlos', 'Lopez', 'Cusco', 'Cusco', 'Av. de la Cultura 789', '965432178', 'carlos.lopez@gmail.com'),
(4, 'DNI', '98765432', 'Ana', 'Martínez', 'Cusco', 'Cusco', 'Jr. Puno 101', '974563210', 'ana.martinez@gmail.com'),
(5, 'DNI', '45678912', 'Luis', 'Fernández', 'Cusco', 'Cusco', 'Calle Cusco 202', '983456789', 'luis.fernandez@gmail.com'),
(6, 'DNI', '32165498', 'Sofía', 'Torres', 'Cusco', 'Cusco', 'Av. La Paz 303', '961234567', 'sofia.torres@mail.com'),
(7, 'DNI', '65432178', 'Jorge', 'Cruz', 'Cusco', 'Cusco', 'Calle Arequipa 404', '952345678', 'jorge.cruz@gmail.com'),
(8, 'DNI', '78965412', 'Patricia', 'Paredes', 'Cusco', 'Cusco', 'Av. Huayna Cápac 505', '923456789', 'patricia.paredes@gmail.com'),
(9, 'DNI', '14725836', 'Fernando', 'Alvarez', 'Cusco', 'Cusco', 'Calle Ayacucho 606', '914567890', 'fernando.alvarez@hotmail.com'),
(10, 'DNI', '25896314', 'Lucía', 'Mendoza', 'Cusco', 'Cusco', 'Av. Túpac Amaru 707', '905678901', 'lucia.mendoza@gmail.com');

CREATE TABLE `detalle_venta` (
  `detalle_id` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `producto_nombre` varchar(100) DEFAULT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL,
  `descuento` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `detalle_venta` (`detalle_id`, `venta_id`, `producto_id`, `producto_nombre`, `cantidad`, `precio_unitario`, `subtotal`, `descuento`, `total`) VALUES
(1, 1, 1, 'Comoda Alta, De Madera', 1.00, 469.99, 469.99, 20.00, 449.99),
(2, 1, 2, 'Escritorio 4 cajones banco tapizado', 1.00, 299.99, 299.99, 10.00, 289.99),
(3, 2, 3, 'Estante o biblioteca de Madera de 6 divisiones', 2.00, 179.00, 358.00, 0.00, 358.00),
(4, 2, 4, 'Estantería de Madera con Ruedas', 1.00, 99.99, 99.99, 0.00, 99.99),
(5, 3, 5, 'Mesa de Comedor de Madera', 1.00, 469.99, 469.99, 20.00, 449.99),
(6, 3, 6, 'Mesa de Madera clasica color blanco', 1.00, 399.99, 399.99, 0.00, 399.99),
(7, 4, 7, 'Ropero de Madera de 2 puertas', 1.00, 179.99, 179.99, 0.00, 179.99),
(8, 4, 8, 'Banco de madera para exteriores, con respaldo y reposabrazos', 2.00, 99.99, 199.98, 10.00, 189.98),
(9, 5, 9, 'Escritorio de Madera con Cajones', 1.00, 119.99, 119.99, 0.00, 119.99),
(10, 5, 10, 'Mesa De Madera Y Formica Con 2 Divisiones Inferiores', 1.00, 109.00, 109.00, 0.00, 109.00),
(11, 6, 11, 'Banco de madera grande', 1.00, 199.99, 199.99, 0.00, 199.99),
(12, 6, 12, 'Estantes De Exhibición de madera de 6 Capas', 1.00, 117.99, 117.99, 0.00, 117.99);

CREATE TABLE `producto` (
  `producto_id` int(11) NOT NULL,
  `producto_codigo` varchar(77) NOT NULL,
  `producto_nombre` varchar(100) NOT NULL,
  `producto_precio_compra` decimal(10,2) DEFAULT NULL,
  `producto_stock` int(11) DEFAULT NULL,
  `producto_precio_venta` decimal(10,2) DEFAULT NULL,
  `producto_marca` varchar(45) DEFAULT NULL,
  `producto_modelo` varchar(35) DEFAULT NULL,
  `producto_estado` varchar(50) DEFAULT NULL,
  `producto_foto` varchar(500) DEFAULT NULL,
  `servicio_id` int(11) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `producto_color` varchar(50) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `producto` (`producto_id`, `producto_codigo`, `producto_nombre`, `producto_precio_compra`, `producto_stock`, `producto_precio_venta`, `producto_marca`, `producto_modelo`, `producto_estado`, `producto_foto`, `servicio_id`, `categoria_id`, `producto_color`, `fecha_ingreso`) VALUES
(1, 'P001', 'Comoda Alta, De Madera', 449.99, 20, 469.99, 'Cosme', 'MC-2024', 'Disponible', 'img/p1.jpg', 5, 5, 'Madera', '2023-01-15'),
(2, 'P002', 'Escritorio 4 cajones banco tapizado', 379.00, 40, 299.99, 'Cosme Muebles', 'OF-2023', 'Disponible', 'img/p2.jpg', 2, 2, 'Madera', '2023-02-01'),
(3, 'P003', 'Estante o biblioteca de Madera de 6 divisiones', 159.00, 15, 179.00, 'Cosme Muebles', 'ES-2023', 'Disponible', 'img/p3.jpg', 3, 3, 'Madera', '2023-02-05'),
(4, 'P004', 'Estantería de Madera con Ruedas', 79.99, 30, 99.99, 'Cosme Muebles', 'MC-2023', 'Disponible', 'img/p4.jpg', 4, 4, 'Madera', '2023-02-10'),
(5, 'P005', 'Mesa de Comedor de Madera', 449.99, 25, 469.99, 'Cosme Muebles', 'CA-2023', 'Disponible', 'img/p5.jpg', 5, 5, 'Madera', '2023-02-15'),
(6, 'P006', 'Mesa de Madera clasica color blanco', 379.99, 40, 399.99, 'Cosme Muebles', 'MJ-2023', 'Disponible', 'img/p6.jpg', 6, 6, 'Madera', '2023-02-20'),
(7, 'P007', 'Ropero de Madera de 2 puertas', 159.99, 10, 179.99, 'Cosme Muebles', 'SC-2023', 'Disponible', 'img/p7.jpg', 5, 5, 'Madera', '2023-02-25'),
(8, 'P008', 'Banco de madera para exteriores, con respaldo y reposabrazos', 79.99, 15, 99.99, 'Cosme Muebles', 'ER-2023', 'Disponible', 'img/p8.jpg', 4, 4, 'Madera', '2023-02-28'),
(9, 'P009', 'Escritorio de Madera con Cajones', 99.99, 20, 119.99, 'Cosme Muebles', 'MO-2023', 'Disponible', 'img/p9.jpg', 2, 2, 'Madera', '2023-03-01'),
(10, 'P010', 'Mesa De Madera Y Formica Con 2 Divisiones Inferiores', 89.99, 10, 109.00, 'Cosme Muebles', 'ST-2023', 'Disponible', 'img/p10.jpg', 1, 2, 'Negro', '2023-03-05'),
(11, 'P011', 'Banco de madera grande', 179.99, 5, 199.99, 'Cosme Muebles', 'ME-2023', 'Disponible', 'img/p11.jpg', 5, 5, 'Madera', '2023-03-10'),
(12, 'P012', 'Estantes De Exhibición de madera de 6 Capas', 110.99, 30, 117.99, 'Cosme Muebles', 'SP-2023', 'Disponible', 'img/p12.jpg', 6, 6, 'Madera', '2023-03-15');

CREATE TABLE `servicio` (
  `servicio_id` int(11) NOT NULL,
  `tiposervicio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `servicio` (`servicio_id`, `tiposervicio`) VALUES
(1, 'Montaje de muebles'),
(2, 'Personalización de muebles'),
(3, 'Reparación de muebles'),
(4, 'Restauración de muebles antiguos'),
(5, 'Limpieza y mantenimiento de muebles'),
(6, 'Instalación de estanterías');

CREATE TABLE `usuario` (
  `usuario_id` int(7) NOT NULL,
  `usuario_nombre` varchar(50) NOT NULL,
  `usuario_apellido` varchar(50) NOT NULL,
  `usuario_email` varchar(50) NOT NULL,
  `usuario_usuario` varchar(30) NOT NULL,
  `usuario_clave` varchar(535) NOT NULL,
  `usuario_foto` varchar(200) NOT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_email`, `usuario_usuario`, `usuario_clave`, `usuario_foto`, `rol`) VALUES
(1, 'Administrador', 'Principal', '', 'Administrador', '$2y$10$Jgm6xFb5Onz/BMdIkNK2Tur8yg/NYEMb/tdnhoV7kB1BwIG4R05D2', '', NULL),
(2, 'VIL MIJAEL', 'CASTRO MUÑOZ', 'vmijael153@gmail.com', 'admin', '$2y$10$p08bBQfJtDYvGqJ.ctuW1.DHSkgtrpzwSA6LwkHtGLZ5QgNFw7f2i', 'VIL_MIJAEL_92.png', NULL),
(3, 'JOSUE ARREDONDO', 'DA COSTA', 'josuec12@gmail.com', 'admin', '$2y$10$p08bBQfJtDYvGqJ.ctuW1.DHSkgtrpzwSA6LwkHtGLZ5QgNFw7f2i', 'JOSUE.png', NULL),
(4, 'ANGHELO JESUS', 'QUINTANA PUMA', 'quintana.78@gmail.com', 'admin', '$2y$10$p08bBQfJtDYvGqJ.ctuW1.DHSkgtrpzwSA6LwkHtGLZ5QgNFw7f2i', 'asd.png', NULL),
(5, 'SEBASTIAN', 'CORZO GONZALES', 'corzo912sebastian@gmail.com', 'admin', '$2y$10$p08bBQfJtDYvGqJ.ctuW1.DHSkgtrpzwSA6LwkHtGLZ5QgNFw7f2i', 'sebass2.png', NULL);

CREATE TABLE `venta` (
  `venta_id` int(11) NOT NULL,
  `venta_codigo` varchar(200) NOT NULL,
  `venta_fecha` date NOT NULL,
  `venta_hora` varchar(17) DEFAULT NULL,
  `venta_total` decimal(10,2) DEFAULT NULL,
  `venta_pagado` decimal(10,2) DEFAULT NULL,
  `venta_cambio` decimal(10,2) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `venta` (`venta_id`, `venta_codigo`, `venta_fecha`, `venta_hora`, `venta_total`, `venta_pagado`, `venta_cambio`, `usuario_id`, `cliente_id`, `tipo`) VALUES
(1, 'V001', '2023-01-15', '10:30', 500.00, 600.00, 100.00, 1, 1, 'Efectivo'),
(2, 'V002', '2023-01-16', '11:00', 300.00, 400.00, 100.00, 2, 2, 'Tarjeta'),
(3, 'V003', '2023-01-17', '12:15', 250.00, 300.00, 50.00, 1, 3, 'Efectivo'),
(4, 'V004', '2023-01-18', '14:45', 150.00, 200.00, 50.00, 2, 4, 'Efectivo'),
(5, 'V005', '2023-01-19', '09:20', 450.00, 500.00, 50.00, 1, 5, 'Tarjeta'),
(6, 'V006', '2023-01-20', '10:00', 600.00, 700.00, 100.00, 2, 6, 'Efectivo'),
(7, 'V007', '2023-01-21', '11:30', 350.00, 400.00, 50.00, 1, 7, 'Tarjeta'),
(8, 'V008', '2023-01-22', '12:00', 200.00, 250.00, 50.00, 2, 8, 'Efectivo'),
(9, 'V009', '2023-01-23', '13:15', 450.00, 500.00, 50.00, 1, 9, 'Efectivo'),
(10, 'V010', '2023-01-24', '14:00', 300.00, 350.00, 50.00, 2, 10, 'Tarjeta');

CREATE TABLE `favorito` (
  `favorito_id` int(15) NOT NULL,
  `favorito_fecha` date NOT NULL,
  `producto_id` int
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;


ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`);

ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`detalle_id`),
  ADD KEY `venta_id` (`venta_id`),
  ADD KEY `producto_id` (`producto_id`);

ALTER TABLE `producto`
  ADD PRIMARY KEY (`producto_id`),
  ADD KEY `servicio_id` (`servicio_id`),
  ADD KEY `categoria_id` (`categoria_id`);

ALTER TABLE `servicio`
  ADD PRIMARY KEY (`servicio_id`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

ALTER TABLE `venta`
  ADD PRIMARY KEY (`venta_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `cliente_id` (`cliente_id`);

ALTER TABLE `categoria`
  MODIFY `categoria_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `detalle_venta`
  MODIFY `detalle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `producto`
  MODIFY `producto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `servicio`
  MODIFY `servicio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `usuario`
  MODIFY `usuario_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `venta`
  MODIFY `venta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`venta_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`) ON DELETE CASCADE;

ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`servicio_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE SET NULL;

ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE SET NULL;
COMMIT;