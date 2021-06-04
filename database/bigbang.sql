-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2021 г., 10:26
-- Версия сервера: 5.6.47
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bigbang`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `status_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ИД статуса для переговоров',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user1_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД юзер1 ',
  `user2_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД юзер2 '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `status_id`, `created_at`, `updated_at`, `user1_id`, `user2_id`) VALUES
(1, 1, '2021-05-24 19:06:55', '2021-05-24 19:06:55', 3, 5),
(2, 1, '2021-05-24 19:09:51', '2021-05-24 19:09:51', 3, 1),
(3, 1, '2021-05-24 19:10:18', '2021-05-24 19:10:18', 3, 2),
(10, 1, '2021-05-25 17:47:08', '2021-05-25 17:47:08', 0, 0),
(11, 1, '2021-05-25 17:48:27', '2021-05-25 17:48:27', 0, 0),
(12, 1, '2021-05-25 17:49:49', '2021-05-25 17:49:49', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Название',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Россия', NULL, NULL),
(2, 'США', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Название',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'яз1', NULL, NULL),
(2, 'яз2', NULL, NULL),
(3, 'яз3', NULL, NULL),
(4, 'яз4', NULL, NULL),
(6, 'яз5', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messengers`
--

CREATE TABLE `messengers` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Название',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messengers`
--

INSERT INTO `messengers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Skype', NULL, NULL),
(2, 'WhatsApp', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_17_061156_add_field_users_table', 1),
(5, '2021_05_19_010409_create_languages_table', 1),
(6, '2021_05_19_014439_create_users_languages_table', 1),
(7, '2021_05_19_020817_create_select_status_table', 1),
(8, '2021_05_19_020820_create_selected_users_table', 1),
(9, '2021_05_19_044032_create_talks_table', 1),
(10, '2021_05_19_044225_add_native_lang_users_table', 1),
(11, '2021_05_19_053214_add_selected_users_talks_table', 1),
(12, '2021_05_19_064803_add_gender_users_table', 1),
(13, '2021_05_20_000415_del_constr_lang_id_users_table', 2),
(14, '2021_05_20_014006_add_role_users_table', 3),
(15, '2021_05_25_035254_rn_talks_users_table', 4),
(16, '2021_05_25_040530_del_constr_user_id_talks_table', 5),
(18, '2021_05_25_043516_rn_column_talks_table', 6),
(19, '2021_05_26_013346_rn_column_master_id_talks_table', 7),
(20, '2021_05_26_013349_rn_column_master_id_contacts_table', 7),
(21, '2021_05_26_230727_create_countries_table', 8),
(22, '2021_05_26_230835_create_messengers_table', 8),
(23, '2021_05_26_232042_add_country_field_users_table', 9),
(24, '2021_05_26_232637_create_user_messengers_table', 10),
(25, '2021_05_26_233337_rn_users_languages_table', 11),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 12),
(27, '2021_06_03_220047_add_learn_language_field_users_table', 13),
(28, '2021_06_03_225300_rn_column_messenger_id_userms_table', 14),
(29, '2021_06_03_230442_rn_column_women_users_table', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_id` int(10) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_id`, `tokenable_type`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(11, 8, 'App\\Models\\User', 'authToken', '87ea0bacc3571e8867c98dd1fd69d96ff54b7bf80970bd8c1624ce8116e69700', '[\"*\"]', '2021-06-04 03:54:32', '2021-06-03 06:05:30', '2021-06-04 03:54:32');

-- --------------------------------------------------------

--
-- Структура таблицы `select_status`
--

CREATE TABLE `select_status` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Название'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `talks`
--

CREATE TABLE `talks` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `mess` text COLLATE utf8mb4_unicode_ci COMMENT 'Сообщение',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contacts_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД контакта',
  `user1_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД юзер1 ',
  `user2_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД юзер2 '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `talks`
--

INSERT INTO `talks` (`id`, `mess`, `created_at`, `updated_at`, `contacts_id`, `user1_id`, `user2_id`) VALUES
(5, 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству', NULL, NULL, 1, 3, 5),
(6, 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству', NULL, NULL, 2, 3, 1),
(7, 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству', NULL, NULL, 3, 3, 2),
(15, 'Hi, it\'s very nice! I accept your invitation', NULL, NULL, 2, 1, 1),
(16, 'nice to meet you!', NULL, NULL, 2, 1, 1),
(17, 'Я тоже рад знакомству!\r\nКакой мессенджер предпочитаете? telegram, whatsapp или skype?', NULL, NULL, 2, 3, 1),
(18, 'What do you think about skype?', NULL, NULL, 2, 1, 1),
(19, 'Очень хорошо!', NULL, NULL, 2, 3, 1),
(20, 'test', NULL, NULL, 2, 1, 1),
(21, 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству', NULL, NULL, 11, 1, 0),
(22, 'Здравствуйте! Вы изучаете русский язык. Я являюсь носителем русского языка и учу английский. С целью изучения языков, приглашаю к сотрудничеству', NULL, NULL, 12, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `userlangs`
--

CREATE TABLE `userlangs` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ИД юзера',
  `language_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ИД язык'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `userms`
--

CREATE TABLE `userms` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ИД',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД юзер ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `messenger_id` int(11) DEFAULT NULL COMMENT 'ИД мессенджера '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `userms`
--

INSERT INTO `userms` (`id`, `user_id`, `created_at`, `updated_at`, `messenger_id`) VALUES
(1, 8, NULL, NULL, 1),
(2, 8, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Имя',
  `foto` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Фото',
  `birthdate` date DEFAULT NULL COMMENT 'Дата рождения',
  `language_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'ИД родной язык',
  `role` int(11) NOT NULL DEFAULT '0' COMMENT '1=адм,0=юзер',
  `country_id` int(11) NOT NULL DEFAULT '0' COMMENT 'Страна',
  `learning_language_id` int(11) NOT NULL DEFAULT '0' COMMENT 'ИД Изучаемый язык',
  `gender` tinyint(1) DEFAULT NULL COMMENT 'Пол: 1=м, 0=ж, null=не указан'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_name`, `foto`, `birthdate`, `language_id`, `role`, `country_id`, `learning_language_id`, `gender`) VALUES
(1, 'nik1', 'nik1@email.com', NULL, '$2y$10$8nffm6L39dX/.B6O4fKy0eMR3S1pxGViuM78pawZtO9nrL7yCa4py', NULL, '2021-05-19 14:12:34', '2021-05-19 14:12:34', NULL, NULL, NULL, 2, 0, 0, 0, NULL),
(3, 'adm', 'admin@email.com', NULL, '$2y$10$8nffm6L39dX/.B6O4fKy0eMR3S1pxGViuM78pawZtO9nrL7yCa4py', NULL, '2021-05-19 14:12:34', '2021-06-04 02:57:24', 'Федор', NULL, '2000-11-21', 1, 1, 1, 1, NULL),
(5, 'nik2', 'nik2@email.com', NULL, '$2y$10$8nffm6L39dX/.B6O4fKy0eMR3S1pxGViuM78pawZtO9nrL7yCa4py', NULL, '2021-05-19 14:12:34', '2021-05-19 14:12:34', NULL, NULL, NULL, 2, 0, 0, 0, NULL),
(6, 'nik3', 'nik3@email.com', NULL, '$2y$10$8nffm6L39dX/.B6O4fKy0eMR3S1pxGViuM78pawZtO9nrL7yCa4py', NULL, '2021-05-19 14:12:34', '2021-05-19 14:12:34', NULL, NULL, NULL, 3, 0, 0, 0, NULL),
(7, 'тест1', 'test1@email.com', NULL, '$2y$10$7EpLxGCNEmxXrJUy6ofSxOGW4pHDNaYVQa38OSvbTuq.44Xlrc5iO', NULL, '2021-05-26 21:18:54', '2021-05-26 21:18:54', NULL, NULL, NULL, 0, 0, 0, 0, NULL),
(8, '1111', 'nik1111@email.com', NULL, '$2y$10$/sqaNehntEWd24pBEuGVuO1k2f6htne9EIyZU4VUd/aZqyq6uLwta', NULL, '2021-06-02 16:14:53', '2021-06-04 03:17:04', 'name3', NULL, '2000-01-21', 1, 0, 1, 2, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selected_users_status_id_foreign` (`status_id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messengers`
--
ALTER TABLE `messengers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_id_index` (`tokenable_id`);

--
-- Индексы таблицы `select_status`
--
ALTER TABLE `select_status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `talks`
--
ALTER TABLE `talks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userlangs`
--
ALTER TABLE `userlangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_languages_user_id_foreign` (`user_id`),
  ADD KEY `users_languages_language_id_foreign` (`language_id`);

--
-- Индексы таблицы `userms`
--
ALTER TABLE `userms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_language_id_foreign` (`language_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `messengers`
--
ALTER TABLE `messengers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `select_status`
--
ALTER TABLE `select_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД';

--
-- AUTO_INCREMENT для таблицы `talks`
--
ALTER TABLE `talks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `userlangs`
--
ALTER TABLE `userlangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД';

--
-- AUTO_INCREMENT для таблицы `userms`
--
ALTER TABLE `userms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ИД', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
