-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2020 г., 23:56
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `football-news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `country_name`) VALUES
(1, 'Իսպանիա'),
(2, 'Անգլիա'),
(3, 'Իտալիա'),
(4, 'Գերմանիա'),
(5, 'Ֆրանսիա'),
(6, 'Ռուսաստան'),
(7, 'Ղազախստան'),
(9, 'Այլ'),
(10, 'Բելառուսիա');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `is_important` tinyint(1) NOT NULL,
  `is_armenian_news` tinyint(1) NOT NULL,
  `is_for_banner` tinyint(1) NOT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `sport_id`, `country_id`, `title`, `slug`, `text`, `is_important`, `is_armenian_news`, `is_for_banner`, `video_link`, `image`, `post_date`) VALUES
(2, 1, 1, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 0, 1, 1, NULL, 'Bash.jpg', '2020-07-14 22:10:11'),
(10, 7, 2, 'Where can I get some?\r\n', 'where-can-I-get-some', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', 1, 0, 0, NULL, 'noimage.png', '2020-07-16 18:43:23'),
(11, 1, 5, 'Where can I get some?\r\n', 'where-can-I-get-some', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', 1, 0, 0, NULL, 'noimage.png', '2020-07-16 18:43:34'),
(13, 1, 3, 'Where can I get w?\r\n', 'where-can-I-get-w', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\r\n\r\n', 1, 1, 0, NULL, 'noimage.png', '2020-07-16 18:43:47'),
(16, 2, 4, 'Where does it come from?', 'where-does-it-from', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 0, 0, NULL, 'Bash.jpg', '2020-07-18 00:53:37'),
(18, 7, 2, 'Where does it come from?', 'where-does-it-from', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 0, 1, NULL, 'Bash.jpg', '2020-07-18 00:54:32'),
(20, 7, 4, 'Where does it come from?', 'where-does-it-from', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 0, 0, NULL, 'Bash.jpg', '2020-07-18 00:54:55'),
(22, 8, 5, 'Why do we use it?', 'why-do-we-use-it', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 1, 0, NULL, 'Bash.jpg', '2020-07-18 01:22:30'),
(23, 8, 4, 'Why do we use it?', 'why-do-we-use-it', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 1, 0, NULL, 'Bash.jpg', '2020-07-18 01:22:37'),
(26, 8, 3, 'Why do we use it?', 'why-do-we-use-it', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 1, 0, NULL, 'Bash.jpg', '2020-07-18 01:22:55'),
(35, 1, 9, 'Մխիթարյանը՝ Ինտերի դեմ խաղի մասին․ Իհարկե, ավելիին էինք արժանի', 'mkhitaryany-interi-dem-khaghi-masin', 'Իտալիայի առաջնության 34-րդ տուրում «Ռոման» «Ինտերի» հետ խաղի վերջնամասում ձեռքից բաց թողեց հաղթանակն ու խաղն ավարտվեց 2-2 հաշվով։\r\nՀռոմեացիների կազմում գոլի հեղինակ դարձավ նաև Հենրիխ Մխիթարյանը, որը ֆեյսբուքյան էջում խաղի վերաբերյալ գրառում է կատարել։\r\n«Անցած գիշեր մեծ խաղ, մեծ ջանքեր թիմի կողմից։ Իհարկե, ավելիին էինք արժանի, բայց գլուխներս բարձր ենք պահում առաջիկա խաղերի համար»,- գրել է Մխիթարյանը։', 0, 1, 1, 'https://www.youtube.com/embed/AK0jxBwT9lY', '109840744_3228781580515856_6837825830626162608_o-e1595244798316.jpg', '2020-07-20 23:55:16'),
(36, 1, 9, 'Պատմության մեջ առաջին անգամ «Ոսկե գնդակ» մրցանակը չի շնորհվի', 'patmutyan-mej-arajin-angam-voske-gndak-mrcanaky', 'France Football-ը որոշել է, որ Եվրոպայի լավագույն ֆուտբոլիստի համար նախատեսված «Ոսկե գնդակը» չի շնորհվի 2020 թվականին: France Football-ը այս մրցանակի կազմակերպիչն է:\r\n\r\n\r\n«Ոսկե գնդակը» առաջին անգամ չի շնորհվի իր պատմության մեջ: Մրցանակաբաշխությունն անցկացվում է 1956 թվականից:\r\n\r\nԸստ Goal-ի «Ոսկե գնդակի» հավակնորդների վարկանիշային ցուցակի առաջատարը «Բավարիայի» լեհ հարձակվող Ռոբերտ Լևանդովսկին է: Երկրորդ տեղում է «Յուվենտուսի» պորտուգալացի հարձակվող Կրիշտիանու Ռոնալդուն: Երրորդ տեղն է զբաղեցնում «Մանչեսթեր Սիթիի» բելգիացի կիսապաշտպան Կևին դե Բրույնեն:\r\n\r\n\r\n«Ոսկե գնդակը» ամենամյա ֆուտբոլային մրցանակ է, որը տրվում է Եվրոպայի տարվա լավագույն ֆուտբոլիստին: Մրցանակը սահմանել է France Football ամսագրի գլխավոր խմբագիր Գաբրիել Անոն, ով 1956-ին խնդրել էր քվեարկություն կազմակերպել գործընկերների շրջանում՝ Եվրոպայի տարվա լավագույն խաղացողին որոշելու համար: Անցյալ տարվա արդյունքներով Մեսսին դարձավ լավագույնը՝ վեցերորդ անգամ նվաճելով մրցանակը:', 0, 0, 1, '', 'Golden-Ball.jpg', '2020-07-21 13:24:16');

-- --------------------------------------------------------

--
-- Структура таблицы `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(255) NOT NULL,
  `icon_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sports`
--

INSERT INTO `sports` (`id`, `sport_name`, `icon_image`) VALUES
(1, 'Ֆուտբոլ', 'far fa-futbol'),
(2, 'Բասկետբոլ', 'fas fa-basketball-ball'),
(5, 'Բեյսբոլ', 'fas fa-baseball-ball'),
(6, 'Գոլֆ', 'fas fa-golf-ball'),
(7, 'Թենիս', 'far fa-tennis'),
(8, 'Այլ', ''),
(9, 'Ծանրամարտ', 'b');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$Mw56dm5Rh4AloZo9MtsM7e85Cixk4.v7TGWPUACTriViheRC3sgae');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sport_id` (`sport_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Индексы таблицы `sports`
--
ALTER TABLE `sports`
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
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`sport_id`) REFERENCES `sports` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
