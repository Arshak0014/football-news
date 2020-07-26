-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 26 2020 г., 22:54
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
(26, 8, 3, 'Why do we use it?', 'contrary-to-popular', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 0, 1, 0, NULL, 'Bash.jpg', '2020-07-18 01:22:55'),
(35, 1, 9, 'Մխիթարյանը՝ Ինտերի դեմ խաղի մասին․ Իհարկե, ավելիին էինք արժանի', 'mkhitaryany-interi-dem-khakhi-masin', 'Իտալիայի առաջնության 34-րդ տուրում «Ռոման» «Ինտերի» հետ խաղի վերջնամասում ձեռքից բաց թողեց հաղթանակն ու խաղն ավարտվեց 2-2 հաշվով։\r\nՀռոմեացիների կազմում գոլի հեղինակ դարձավ նաև Հենրիխ Մխիթարյանը, որը ֆեյսբուքյան էջում խաղի վերաբերյալ գրառում է կատարել։\r\n«Անցած գիշեր մեծ խաղ, մեծ ջանքեր թիմի կողմից։ Իհարկե, ավելիին էինք արժանի, բայց գլուխներս բարձր ենք պահում առաջիկա խաղերի համար»,- գրել է Մխիթարյանը։', 1, 1, 1, 'https://www.youtube.com/embed/AK0jxBwT9lY', '109840744_3228781580515856_6837825830626162608_o-e1595244798316.jpg', '2020-07-20 23:55:16'),
(36, 2, 9, 'Պատմության մեջ առաջին անգամ «Ոսկե գնդակ» մրցանակը չի շնորհվի', 'patmutyan-mej-arajin-angam-voske', 'France Football-ը որոշել է, որ Եվրոպայի լավագույն ֆուտբոլիստի համար նախատեսված «Ոսկե գնդակը» չի շնորհվի 2020 թվականին: France Football-ը այս մրցանակի կազմակերպիչն է:\r\n\r\n\r\n«Ոսկե գնդակը» առաջին անգամ չի շնորհվի իր պատմության մեջ: Մրցանակաբաշխությունն անցկացվում է 1956 թվականից:\r\n\r\nԸստ Goal-ի «Ոսկե գնդակի» հավակնորդների վարկանիշային ցուցակի առաջատարը «Բավարիայի» լեհ հարձակվող Ռոբերտ Լևանդովսկին է: Երկրորդ տեղում է «Յուվենտուսի» պորտուգալացի հարձակվող Կրիշտիանու Ռոնալդուն: Երրորդ տեղն է զբաղեցնում «Մանչեսթեր Սիթիի» բելգիացի կիսապաշտպան Կևին դե Բրույնեն:\r\n\r\n\r\n«Ոսկե գնդակը» ամենամյա ֆուտբոլային մրցանակ է, որը տրվում է Եվրոպայի տարվա լավագույն ֆուտբոլիստին: Մրցանակը սահմանել է France Football ամսագրի գլխավոր խմբագիր Գաբրիել Անոն, ով 1956-ին խնդրել էր քվեարկություն կազմակերպել գործընկերների շրջանում՝ Եվրոպայի տարվա լավագույն խաղացողին որոշելու համար: Անցյալ տարվա արդյունքներով Մեսսին դարձավ լավագույնը՝ վեցերորդ անգամ նվաճելով մրցանակը:', 0, 0, 0, '', 'Golden-Ball.jpg', '2020-07-21 13:24:16'),
(37, 1, 9, 'Ռոմայի մեկնարկային կազմը Սպալի դեմ խաղում, ուղիղ եթեր', 'romai-meknarkayin-kazmy-spali-dem', 'Իտալիայի Ա սերիայի 35-րդ տուրի շրջանակում Հենրիխ Մխիթարյանի «Ռոման» հյուրընկալվում է «Սպալին»: ԵԼ-ի ուղեգրի համար պայքարող հռոմեական թիմին հաղթանակ է անհրաժեշտ՝ 5-րդ հորիզոնական վերադառնալու համար:\r\n«Սպալը» եզրափակում է մրցաշարային աղյուսակը ու այլևս մրցաշարային ակնկալիքներ չունի:\r\n<b>Հենրիխ Մխիթարյանը մեկնարկային կազմում չէ:</b>\r\nՖոնսեկան մեկնարկային կազմի համար ընտրել է հետևյալ 11 խաղացողին.\r\n\r\n13. Լոպես, 4. Կրիստանտե, 6. Սմոլինգ, 7. Պելեգրինի, 11. Կոլարով, 19. Կալինիչ, 23. Մանսինի, 31. Պերեզ, 33. Պերես, 37. Սպինացոլա, 42. Դիավարա\r\n\r\nԽաղի ուղիղ հեռարձակումը՝ <a href=\"google.com\">այստեղ:</a>', 0, 0, 0, '', 'Mkhitayan.jpg', '2020-07-22 23:05:09'),
(38, 1, 2, 'Ռիվալդո․ Դուգլաս Կոստայի՝ Յուվեից Ման․Սիթի տեղափոխությունը հետաքրքիր տարբերակ է', 'rivaldo-duglas-costayi-manchester-city-teghapokhvely', 'Ռիվալդո․ Դուգլաս Կոստայի՝ Յուվեից Ման․Սիթի տեղափոխությունը հետաքրքիր տարբերակ է', 0, 0, 1, '', 'douglas-costa-juventus-2019-20_1v9uhvz5n1kej1bn9cdxjptiws.jpg', '2020-07-24 00:51:22'),
(39, 1, 9, 'Ուրարտուն ընկերական խաղում հաղթեց Վանին', 'urartun-haghtec-vanint', 'Երևանի «Ուրարտուն» սկսել է նախապատրաստությունը նոր մրցաշրջանին:\r\n\r\nԱլեքսանդր Գրիգորյանի թիմը սեփական հարկի տակ խաղացել է «Վանի» հետ և հաղթել 3:2 հաշվով:</br>\r\n\r\nԵրևանյան թիմի կազմում աչքի են ընկել Գրիգորյանը, Գուզն ու Կոբզարը: Հյուրերի կազմում գոլի հեղինակ են դարձել Գաբան և Մնացականյանը:', 0, 1, 0, '', 'Ուռա.jpg', '2020-07-24 01:07:06'),
(42, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:09'),
(43, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:26'),
(44, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:32'),
(45, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:37'),
(46, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:43'),
(47, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:49'),
(48, 1, 3, 'Կոնտեն՝ ԵԼ-ում Ինտերի խնդրի մասին. Յունայթեդը ևս մտածում է հաղթանակի մասին', 'konten-el-um-interi-xndri-masin', '«Այլ թիմեր ևս կան, որ ֆավորիտ են: Օրինակ, Անգլիայում կարծում են, որ «Յունայթեդը» պետք է հաղթի այդ մրցաշարում, որպեսզի ապահովի տեղը ՉԼ-ում:\r\n\r\nՄենք ցանկանում ենք հանդես գալ, որքան հնարավոր է լավ: Նույնպես, 1/8-ում «Խետաֆեի» հետ բարդ է: Նրանք պաշտպանվում են ու չեն վախենում կռիվ տալուց»-ասել է Կոնտեն:', 0, 0, 1, NULL, 'Konte.jpg', '2020-07-26 16:46:55');

-- --------------------------------------------------------

--
-- Структура таблицы `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sports`
--

INSERT INTO `sports` (`id`, `sport_name`, `slug`, `icon_image`) VALUES
(1, 'Ֆուտբոլ', 'football', 'far fa-futbol'),
(2, 'Բասկետբոլ', 'basketball', 'fas fa-basketball-ball'),
(5, 'Բեյսբոլ', 'baseball', 'fas fa-baseball-ball'),
(6, 'Գոլֆ', 'golf', 'fas fa-golf-ball'),
(7, 'Թենիս', 'tennis', 'far fa-tennis'),
(8, 'Այլ', 'other', ''),
(9, 'Ծանրամարտ', 'weightlifting', '');

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
  ADD KEY `country_id` (`country_id`),
  ADD KEY `slug` (`slug`);

--
-- Индексы таблицы `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
