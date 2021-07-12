-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2021 a las 18:10:09
-- Versión del servidor: 8.0.23
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnoxpetise`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `productId` int NOT NULL,
  `productName` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `stock` int NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`productId`, `productName`, `description`, `price`, `category`, `stock`, `image`) VALUES
(28, 'HP ProBook 440 G7 – Intel Core i7', 'Laptop HP ProBook 440 G7 – Intel Core i7-10510U 1.8 GHZ – 8GB – 512GB SSD', '1277.00', 'Computers', 50, 'HP-ProBook-440-i7.jpg'),
(29, 'Dell Latitude 3410 – i5-10210U', 'Laptop Dell Latitude 3410 – i5-10210U – 8GB – 1TB – 14″ – Win 10 Pro – Español', '972.00', 'Computers', 20, 'Dell-Latitude-3410.jpg'),
(30, 'Apple iPhone 12 ', 'El Apple iPhone 12 es parte de la serie 12 del iPhone de Apple, llegando en el 2020 con un diseño que recuerda al iPhone 4 y conectividad 5G.', '1169.00', 'Phones', 5, 'Apple-iPhone-12-Blue-frontimage.png'),
(31, 'Celular 6.4', 'Xiaomi Redmi 9A cuenta con una pantalla HD+ de 6.53 pulgadas', '149.50', 'Phones', 50, 'xiaomi-redmi-9a-gris-granito.png'),
(32, 'Apple Watch S6 GPS 44mm Aluminio Azul', 'Con el Apple Watch Series 6, podrás llevar una vida más saludable, más activa y mejor conectada.', '569.00', 'Smartwatch', 10, '44-alum-blue-sport-deepnavy-6s-nc.jfif'),
(33, 'Huawei smartband 4 negra', 'Huawei Band 4 es un entrenador inteligente confiable para la salud. ', '65.50', 'Smartwatch', 25, '613C0GB3wZL._AC_SX522_.jpg'),
(34, 'Cámara de acción osmo 4k', ' Cámara de acción con sensor CMOS de 1 / 2.3 ', '269.00', 'Cameras', 15, '61HT+jC-IWL._AC_SY355_.jpg'),
(35, 'Cámara digital eos rebel t7 incluye lente', ' cámara EOS Rebel T7 combina funciones fantásticas con una operación fácil de usar para obtener imágenes de alta calidad que estará orgulloso de compartir. ', '600.00', 'Cameras', 6, 'camara-digital-canon-eos-rebel-t7-incluye-lente-18-55mm-is-ii-uscan.jpg'),
(36, 'LED smart 65', 'Pantalla Crystal Display, sumérgete en las imágenes con una gama de colores más amplia. ', '799.00', 'TV', 17, '81Q7Wm8YwtL._AC_SX450_.jpg'),
(37, 'Pantalla Qled smart 43', 'The Sero se mueve para adaptarse a tu contenido: el modo horizontal para ver televisión y películas, y el modo de retrato para consultar todo tu contenido móvil y aplicaciones.', '799.00', 'TV', 6, 'Smartv-The-Sero-Samsung-780x470.jpg'),
(38, 'Tablet SM-T505N', 'Galaxy Tab A7 está diseñada para impresionar,  almacenamiento de 32 GB y memoria RAM de 3 GB.', '349.00', 'Tablets', 75, 'Inrrg78WT1ZyseyCjKpF6wtGTrVFyvR58MJ7r4bV.jpeg'),
(39, 'Tablet SM-T290 Plateado', ' Con 2GB de RAM y 32GB de almacenamiento interno, y cámara principal de 8 MP.  La combinación perfecta de rendimiento y diseño.', '139.00', 'Tablets', 50, '073484100.1578588792.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `user`, `password`, `type`, `address`, `phone`) VALUES
(1, 'Marleny Sosa', 'marsosa08', '$1$tecnoxp$/6JQBCkajCIbQwKq2effq/', 'User', 'chalatenango', '65748392'),
(2, 'Andrea Castellanos', 'andrea25', '$1$tecnoxp$enzH4S9oaGq8A7E.qL6A31', 'User', 'san salvador', '78950043'),
(3, 'Alberto centeno', 'albert10', '$1$tecnoxp$cu91z0S/IDX/yBW6Q.v.w/', 'Admin', 'san salvador', '78960584'),
(6, 'prueba encriptar', 'encriptar', '$1$tecnoxp$i5LYvcYzMqPTCOucGAm4k0', 'User', 'san salvador', '78940062');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `productId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
