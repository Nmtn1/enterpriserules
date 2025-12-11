-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 11 2025 г., 14:20
-- Версия сервера: 5.5.62
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `enterprise`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Безопасность'),
(2, 'IT'),
(3, 'Внутренние процессы');

-- --------------------------------------------------------

--
-- Структура таблицы `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `rules`
--

INSERT INTO `rules` (`id`, `category_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'Обновление программного обеспечения', 'Обеспечивать регулярное обновление всех используемых программных продуктов для устранения уязвимостей.', '2025-12-09 18:01:16', '0000-00-00 00:00:00'),
(2, 2, 'Резервное копирование данных', 'Ежедневно создавать резервные копии важной информации и тестировать их восстановление.', '2025-12-09 18:01:23', '0000-00-00 00:00:00'),
(3, 2, 'Использование антивирусных программ', 'Устанавливать и регулярно обновлять антивирусное ПО на всех рабочих станциях.', '2025-12-09 18:01:30', '0000-00-00 00:00:00'),
(4, 2, 'Контроль доступа к системам', 'Каждому сотруднику создается персональная учетная запись с доступом строго к тем ресурсам и данным, которые необходимы для выполнения его должностных обязанностей. Реализуется принцип минимальных привилегий. При смене должности или увольнении доступ немедленно пересматривается или блокируется для предотвращения несанкционированных действий.', '2025-12-11 10:24:38', '0000-00-00 00:00:00'),
(5, 1, 'Проверка входящих писем', 'Все сотрудники должны проявлять особую бдительность при получении писем от неизвестных отправителей или с нестандартными запросами. Перед открытием вложений или переходом по ссылкам необходимо проверять адрес отправителя, наличие орфографических ошибок и несвойственных формулировок. Сомнительные письма немедленно передаются в IT-отдел.', '2025-12-11 10:24:57', '0000-00-00 00:00:00'),
(6, 1, 'Контроль доступа к помещениям', 'Для физической безопасности используются электронные пропуски с индивидуальным шифрованием. Система видеонаблюдения ведет постоянную запись в ключевых зонах. Все посещения фиксируются в журнале событий. Это позволяет отслеживать перемещения и оперативно реагировать на нарушения.', '2025-12-11 10:25:36', '0000-00-00 00:00:00'),
(7, 1, 'Регулярные проверки уязвимостей', 'Регулярные комплексные проверки IT-инфраструктуры включают анализ уязвимостей, тестирование на проникновение, проверку журналов событий и соответствие политикам. Результаты оформляются в отчеты с рекомендациями по устранению недостатков и улучшению защитных механизмов.', '2025-12-11 10:25:49', '0000-00-00 00:00:00'),
(8, 1, 'Обучение по работе с конфиденциальной информацией', 'Сотрудники проходят обязательные инструктажи по классификации информации (открытая, внутренняя, конфиденциальная, строго конфиденциальная). Разъясняются правила хранения, передачи и уничтожения документов, использование шифрования и безопасных каналов связи для предотвращения утечек.', '2025-12-11 10:26:05', '0000-00-00 00:00:00'),
(9, 3, 'Ежегодное пересмотрение процедур', 'Документация по безопасности пересматривается не реже раза в квартал. Обновления вносятся при изменении законодательства, появлении новых угроз или внедрении технологий. Все изменения доводятся до сотрудников через рассылки, обучающие сессии и обновления на корпоративном портале.', '2025-12-11 10:26:19', '0000-00-00 00:00:00'),
(10, 3, 'Планирование и контроль выполнения задач', 'Использовать системы управления проектами для мониторинга сроков и ответственности.', '2025-12-09 18:03:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(4, 'Иван Иванович Иванов', 'admin@admin.admin', '$2y$13$iCGuvE.rwam7g0imTMtI4.4O2WiIF2G5HfCKSivWcTrFMTpuyB/6C', 1),
(5, 'user1', 'user1@user1.user1', '$2y$13$pNaNpoWcbBcEPuCD3ukQa.tqXdI2X0MB5Tv5UBsT4rjlld/RXQola', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
