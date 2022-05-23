-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2020 г., 00:42
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `category`, `price`, `image`, `text`) VALUES
(1, 'Пюре', 'Гарниры', 250, 'mashed_potato.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(2, 'Рис', 'Гарниры', 250, 'rise.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(3, 'Калифорния', 'Суши', 1200, 'kalifornia.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(8, 'Сырные шарики', 'Гарниры', 450, 'cheese_balls.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(9, 'Фри', 'Гарниры', 400, 'fried_poato.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(10, 'Гарнир сложный', 'Гарниры', 450, 'complex_garnish.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(11, 'Маслина', 'Гарниры', 200, 'olives.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(12, 'Зеленый горошек', 'Гарниры', 200, 'green_pea.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(13, 'Кукуруза', 'Гарниры', 200, 'corn.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(14, 'Эби маки', 'Суши', 800, 'ebi_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(15, 'Роллы с угрем и кунжутом', 'Суши', 900, 'rolls_with_eel_and_sesame.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(16, 'Филадельфия маки', 'Суши', 1400, 'filadelfia_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(17, 'Ясай маки', 'Суши', 800, 'yasai_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(18, 'Каппа маки', 'Суши', 800, 'kappa_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(19, 'Унаги маки', 'Суши', 750, 'unagy_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(20, 'Крем маки', 'Суши', 1200, 'krem_maki.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(21, 'Тирамису', 'Десерты', 1350, 'tiramisu.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(22, 'Чизкейк', 'Десерты', 1050, 'cheese_cake.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(23, 'Блины в карамели', 'Десерты', 650, 'pancake_in_caramel.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(24, 'Панакоте', 'Десерты', 650, 'panakote.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(25, 'Фруктовое ассорти', 'Десерты', 2500, 'fruit_assorti.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(26, 'Морожное в ассортименте', 'Десерты', 600, 'icecream.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(27, 'Маргарита', 'Пицца', 1500, 'margarita.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(28, 'Салями', 'Пицца', 1500, 'salami.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(29, 'Мясная пицца', 'Пицца', 1500, 'meat_pizza.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(30, 'Тропиканка', 'Пицца', 1400, 'tropic.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(31, 'Джульетта', 'Пицца', 1500, 'juliet.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(32, 'С курицей', 'Пицца', 1300, 'pizza_with_chicken.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(33, 'Овощная', 'Пицца', 1500, 'vegetable_pizza.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(34, 'Столичная', 'Пицца', 1550, 'metropolitan.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(35, 'Чили пицца', 'Пицца', 1500, 'chile_pizza.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(36, 'Морепродукты', 'Соусы', 900, 'seafood.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(37, 'С курицей', 'Соусы', 700, 'sauce_with_chicken.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(38, 'Болоньзе', 'Соусы', 700, 'bolonze.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(39, 'С овощами', 'Соусы', 500, 'sauce_with_vegtable.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s'),
(40, 'Мясной', 'Соусы', 600, 'sauce_meat.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `text_mini` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text_mini`, `text`) VALUES
(1, 'Новая кулинарная книга', 'https://images.unsplash.com/photo-1528712306091-ed0763094c98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=680&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id. Praesent tincidunt neque sit amet erat ultricies, eget tempor nisi bibendum. Aenean cursus dolor sit amet lobortis euismod. Nam viverra vel lacus at bibendum. Nam nunc nunc, mattis vitae pellentesque ut, tempus ut nibh. Sed lacinia magna sit amet enim consectetur iaculis. Phasellus pharetra convallis nulla, et eleifend augue scelerisque ac. Mauris porttitor sollicitudin nisl, a elementum nulla rhoncus vel. Nunc volutpat nunc in ornare dignissim. Nam luctus velit urna, eu elementum lorem interdum et. Integer vehicula purus velit, sit amet consectetur nisi iaculis sed. Donec dictum urna quis pretium porttitor. Donec tellus diam, hendrerit at dolor eu, gravida rhoncus lorem.\r\n\r\nNunc lobortis egestas mi eu scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ligula mattis, lobortis lectus eget, posuere ligula. Aenean aliquam enim id odio ornare molestie. Nunc ultrices enim at dolor rhoncus pulvinar. Sed interdum urna sit amet tellus efficitur tempus. Aenean a massa vehicula augue laoreet lobortis ac at magna. Nam in sapien pellentesque, rhoncus mauris vitae, consectetur magna.\r\n\r\nSuspendisse congue cursus velit sed pulvinar. Fusce nec est ut tellus vehicula commodo. Suspendisse consectetur ullamcorper orci aliquet tempor. Sed euismod nibh nec nulla pretium suscipit. Suspendisse ultricies, leo ac egestas maximus, nisi nibh ornare est, at auctor tortor eros sed nulla. Vestibulum sem mauris, dictum sit amet ante sit amet, accumsan sodales dolor. Donec scelerisque massa non mi condimentum ornare a a mauris.'),
(2, 'Новое меню', 'https://images.unsplash.com/photo-1515697320591-f3eb3566bc3c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id. Praesent tincidunt neque sit amet erat ultricies, eget tempor nisi bibendum. Aenean cursus dolor sit amet lobortis euismod. Nam viverra vel lacus at bibendum. Nam nunc nunc, mattis vitae pellentesque ut, tempus ut nibh. Sed lacinia magna sit amet enim consectetur iaculis. Phasellus pharetra convallis nulla, et eleifend augue scelerisque ac. Mauris porttitor sollicitudin nisl, a elementum nulla rhoncus vel. Nunc volutpat nunc in ornare dignissim. Nam luctus velit urna, eu elementum lorem interdum et. Integer vehicula purus velit, sit amet consectetur nisi iaculis sed. Donec dictum urna quis pretium porttitor. Donec tellus diam, hendrerit at dolor eu, gravida rhoncus lorem.\r\n\r\nNunc lobortis egestas mi eu scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ligula mattis, lobortis lectus eget, posuere ligula. Aenean aliquam enim id odio ornare molestie. Nunc ultrices enim at dolor rhoncus pulvinar. Sed interdum urna sit amet tellus efficitur tempus. Aenean a massa vehicula augue laoreet lobortis ac at magna. Nam in sapien pellentesque, rhoncus mauris vitae, consectetur magna.\r\n\r\nSuspendisse congue cursus velit sed pulvinar. Fusce nec est ut tellus vehicula commodo. Suspendisse consectetur ullamcorper orci aliquet tempor. Sed euismod nibh nec nulla pretium suscipit. Suspendisse ultricies, leo ac egestas maximus, nisi nibh ornare est, at auctor tortor eros sed nulla. Vestibulum sem mauris, dictum sit amet ante sit amet, accumsan sodales dolor. Donec scelerisque massa non mi condimentum ornare a a mauris.'),
(3, 'Реставрация помещения', 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id. Praesent tincidunt neque sit amet erat ultricies, eget tempor nisi bibendum. Aenean cursus dolor sit amet lobortis euismod. Nam viverra vel lacus at bibendum. Nam nunc nunc, mattis vitae pellentesque ut, tempus ut nibh. Sed lacinia magna sit amet enim consectetur iaculis. Phasellus pharetra convallis nulla, et eleifend augue scelerisque ac. Mauris porttitor sollicitudin nisl, a elementum nulla rhoncus vel. Nunc volutpat nunc in ornare dignissim. Nam luctus velit urna, eu elementum lorem interdum et. Integer vehicula purus velit, sit amet consectetur nisi iaculis sed. Donec dictum urna quis pretium porttitor. Donec tellus diam, hendrerit at dolor eu, gravida rhoncus lorem.\r\n\r\nNunc lobortis egestas mi eu scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ligula mattis, lobortis lectus eget, posuere ligula. Aenean aliquam enim id odio ornare molestie. Nunc ultrices enim at dolor rhoncus pulvinar. Sed interdum urna sit amet tellus efficitur tempus. Aenean a massa vehicula augue laoreet lobortis ac at magna. Nam in sapien pellentesque, rhoncus mauris vitae, consectetur magna.\r\n\r\nSuspendisse congue cursus velit sed pulvinar. Fusce nec est ut tellus vehicula commodo. Suspendisse consectetur ullamcorper orci aliquet tempor. Sed euismod nibh nec nulla pretium suscipit. Suspendisse ultricies, leo ac egestas maximus, nisi nibh ornare est, at auctor tortor eros sed nulla. Vestibulum sem mauris, dictum sit amet ante sit amet, accumsan sodales dolor. Donec scelerisque massa non mi condimentum ornare a a mauris.'),
(4, 'Современный стиль готовки', 'https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id. Praesent tincidunt neque sit amet erat ultricies, eget tempor nisi bibendum. Aenean cursus dolor sit amet lobortis euismod. Nam viverra vel lacus at bibendum. Nam nunc nunc, mattis vitae pellentesque ut, tempus ut nibh. Sed lacinia magna sit amet enim consectetur iaculis. Phasellus pharetra convallis nulla, et eleifend augue scelerisque ac. Mauris porttitor sollicitudin nisl, a elementum nulla rhoncus vel. Nunc volutpat nunc in ornare dignissim. Nam luctus velit urna, eu elementum lorem interdum et. Integer vehicula purus velit, sit amet consectetur nisi iaculis sed. Donec dictum urna quis pretium porttitor. Donec tellus diam, hendrerit at dolor eu, gravida rhoncus lorem.\r\n\r\nNunc lobortis egestas mi eu scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ligula mattis, lobortis lectus eget, posuere ligula. Aenean aliquam enim id odio ornare molestie. Nunc ultrices enim at dolor rhoncus pulvinar. Sed interdum urna sit amet tellus efficitur tempus. Aenean a massa vehicula augue laoreet lobortis ac at magna. Nam in sapien pellentesque, rhoncus mauris vitae, consectetur magna.\r\n\r\nSuspendisse congue cursus velit sed pulvinar. Fusce nec est ut tellus vehicula commodo. Suspendisse consectetur ullamcorper orci aliquet tempor. Sed euismod nibh nec nulla pretium suscipit. Suspendisse ultricies, leo ac egestas maximus, nisi nibh ornare est, at auctor tortor eros sed nulla. Vestibulum sem mauris, dictum sit amet ante sit amet, accumsan sodales dolor. Donec scelerisque massa non mi condimentum ornare a a mauris.'),
(5, 'Рецепты от шеф повара', 'https://images.unsplash.com/photo-1502364271109-0a9a75a2a9df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt purus a nisi ultrices varius. Maecenas rutrum metus quam, nec auctor leo pulvinar id. Praesent tincidunt neque sit amet erat ultricies, eget tempor nisi bibendum. Aenean cursus dolor sit amet lobortis euismod. Nam viverra vel lacus at bibendum. Nam nunc nunc, mattis vitae pellentesque ut, tempus ut nibh. Sed lacinia magna sit amet enim consectetur iaculis. Phasellus pharetra convallis nulla, et eleifend augue scelerisque ac. Mauris porttitor sollicitudin nisl, a elementum nulla rhoncus vel. Nunc volutpat nunc in ornare dignissim. Nam luctus velit urna, eu elementum lorem interdum et. Integer vehicula purus velit, sit amet consectetur nisi iaculis sed. Donec dictum urna quis pretium porttitor. Donec tellus diam, hendrerit at dolor eu, gravida rhoncus lorem.\r\n\r\nNunc lobortis egestas mi eu scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean sit amet ligula mattis, lobortis lectus eget, posuere ligula. Aenean aliquam enim id odio ornare molestie. Nunc ultrices enim at dolor rhoncus pulvinar. Sed interdum urna sit amet tellus efficitur tempus. Aenean a massa vehicula augue laoreet lobortis ac at magna. Nam in sapien pellentesque, rhoncus mauris vitae, consectetur magna.\r\n\r\nSuspendisse congue cursus velit sed pulvinar. Fusce nec est ut tellus vehicula commodo. Suspendisse consectetur ullamcorper orci aliquet tempor. Sed euismod nibh nec nulla pretium suscipit. Suspendisse ultricies, leo ac egestas maximus, nisi nibh ornare est, at auctor tortor eros sed nulla. Vestibulum sem mauris, dictum sit amet ante sit amet, accumsan sodales dolor. Donec scelerisque massa non mi condimentum ornare a a mauris.');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `list` text NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `list`, `total_price`) VALUES
(1, 1, ',1,2,3', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `telephone` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `telephone`, `password`) VALUES
(1, 'Арыстан', 'Амангельды', 'nissocialnetwork@gmail.com', '87029945517', '90132f762f4d1a0a08ae6a3eecee0654');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
