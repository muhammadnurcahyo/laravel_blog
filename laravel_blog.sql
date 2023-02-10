-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2023 pada 09.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'web programming', 'web-programming', '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(2, 'web design', 'web-design', '2023-02-10 00:18:49', '2023-02-10 00:18:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_01_090420_create_posts_table', 1),
(6, '2023_02_06_062506_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `exceprt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `exceprt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Enim nostrum nesciunt qui ab accusantium dolorum accusantium.', 'eaque-beatae-animi-beatae-aut-repudiandae-aliquid-inventore-nihil', 'Quo ut quo voluptates sapiente. Sit eos rem et quibusdam accusamus assumenda ea. Omnis atque totam dolor doloremque tenetur. Nemo soluta possimus libero.', 'Libero aliquam et facilis. Reiciendis rerum non aut voluptatibus corporis ducimus ea. Reprehenderit quas sequi consequatur et nesciunt. In consectetur nisi ipsum deleniti hic perspiciatis id quia. Est similique quo adipisci quia sit ut. Autem magni aut amet sit aut sunt est enim. Amet tenetur qui praesentium et placeat. Sit doloremque nam voluptatem sed modi fuga. Nisi quas tempora quia itaque ipsam ea. A eum vitae odit sunt voluptatem non. Ipsa aut iure sit harum fugit.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(2, 1, 1, 'Quidem explicabo vel at alias.', 'fugit-provident-quo-et-hic', 'Laborum animi dignissimos perferendis sapiente. Ut facere placeat doloribus molestias ratione. Nesciunt reprehenderit provident ea. Repellendus libero cupiditate quos illo accusamus. Assumenda quidem quaerat dolores aut.', 'Voluptas sed velit quos eaque omnis fugit. Quae quia ea et recusandae distinctio itaque. Rerum nihil incidunt suscipit voluptatem reprehenderit officia. Praesentium deleniti vel excepturi nesciunt consequatur provident quaerat. Veritatis libero eos reiciendis et magni nihil. Et non incidunt recusandae porro aliquid velit. Quo vel natus aut quia quibusdam impedit. Voluptatibus nam harum suscipit enim est. Alias aut eveniet molestias nesciunt. Cupiditate commodi numquam in et. Non ut qui unde sed aut est facilis.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(3, 1, 1, 'Velit sequi ducimus quo saepe eos.', 'error-iste-rem-ipsa-quia-magni-tempore', 'Modi excepturi vel eos expedita totam. Doloremque laborum sed porro et fuga quo.', 'Eum consequatur iste non quae fuga eos voluptatem sit. Distinctio rem dolor ut culpa in asperiores est. Rerum itaque incidunt illo repellat ducimus incidunt vitae. Voluptatum et architecto ea dolore sint dolorem debitis. Ipsam ut odit repellendus rerum. Delectus et voluptas cupiditate ad.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(4, 2, 2, 'Inventore culpa est eum praesentium repellendus blanditiis dolorem.', 'ut-omnis-quasi-totam-expedita-molestias-harum-expedita-est', 'Ut voluptas nihil laborum libero laboriosam ratione. Voluptatem dolor eum illum totam dolores beatae earum aspernatur. Unde non soluta ipsam est. Et accusantium est labore dolorem qui.', 'Aut repellat modi consequuntur ducimus. Rerum eligendi ut et quaerat officia iusto ut. Itaque voluptas accusamus recusandae est inventore voluptatem ratione commodi. Enim eum est veniam voluptatem velit consequatur sed beatae. At quisquam et explicabo dicta rerum.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(5, 1, 2, 'Cumque quas hic illo et.', 'voluptas-consectetur-molestiae-saepe-repellat-consequatur', 'Ducimus placeat eum sed reiciendis atque dolores. Velit suscipit corrupti dolores id ut molestiae vitae. Est est sequi dolores dolor mollitia accusamus laboriosam. Dolorem omnis sit et et rerum eos sit.', 'Sint dolorem molestiae voluptatem quia deleniti. Autem et odio quo facilis illum qui. Expedita aut amet animi vero rerum et ad. Qui perferendis molestiae nihil velit doloremque eum. Fuga molestiae neque consectetur minus totam quam. Vel qui cum et ut non impedit. Omnis ut voluptatem voluptatem dolor laborum non rerum. Vel pariatur sequi ut autem consequatur. Iste sed excepturi tempore quia at. Voluptatem est nemo natus illum tempora quis aliquid. Dolores quas dolorem recusandae est at voluptatem.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(6, 1, 2, 'Aliquam dolorem impedit et rerum.', 'quam-aut-cumque-nihil-quibusdam-ut-quam', 'Aut asperiores enim qui non et inventore. Totam ipsum provident aliquid qui. Dolor rerum quia rem sed natus mollitia provident adipisci. Est impedit sint qui labore nihil quidem atque.', 'Exercitationem ipsam pariatur maiores qui. Sit vel ullam ut ipsa ab aliquid dignissimos. Dolor similique repellendus at et. Consequatur voluptatibus consequatur velit illum nam rerum. Quia ducimus rerum voluptas velit occaecati non. Quis eos tenetur aliquid. Error dolores qui dolorem dolor culpa vel laboriosam et. Ut cupiditate ut quos voluptas facilis quae non consequatur. Impedit eos voluptatibus tempora.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(7, 1, 2, 'Impedit ex dolor eum.', 'enim-minima-aspernatur-natus-id-non-dolore-nam', 'Dolorum quia rerum non fuga quia. Ut recusandae est ut quibusdam.', 'Omnis et velit provident qui magnam labore. Ut eos voluptatum nisi nostrum dolores doloribus. Eligendi ut est voluptatem. Ipsum eum aspernatur est facere facilis qui quas. Adipisci non vel aut.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(8, 2, 2, 'Possimus numquam laudantium qui corporis qui perferendis.', 'quia-enim-provident-aut-distinctio-ut-autem', 'Voluptatem ex qui quos dolores aperiam. Ut odit tenetur non. In aut rerum aut sed.', 'Eos delectus sit sequi dolor praesentium molestiae. Error ex sed ut facilis et. Doloribus qui quidem enim ipsa fuga corporis. Iure corrupti illum accusantium eos. Quia quos non nisi omnis ut sint voluptas nostrum. Voluptatem atque nulla exercitationem nemo dolores. Nesciunt qui est dolorum sit aut.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(9, 2, 1, 'Sunt rerum corrupti omnis sed quis culpa nemo.', 'eligendi-occaecati-aspernatur-maiores-aliquam', 'Quis enim dolores eligendi exercitationem nemo doloribus. Voluptates earum consequuntur sit saepe aut dignissimos vel. Voluptatem quis vel placeat autem quod aut vel.', 'Aut rerum ducimus occaecati illum. Aut reprehenderit laborum ratione magni. Nihil et voluptate eveniet voluptatem. Hic facere voluptas ratione. Praesentium natus optio occaecati repellat ut. Quam rem distinctio doloribus laudantium optio nulla quod debitis. Facilis neque accusantium in neque.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(10, 2, 2, 'Aut eius quo quis nostrum neque sed consequuntur.', 'nemo-deserunt-sed-iure-omnis-doloribus-voluptas', 'Aut alias neque cupiditate aut ea beatae natus et. Dolorum dignissimos hic velit esse. Et nulla nobis nisi et qui fugiat. Maxime voluptas quaerat dicta rerum nemo corrupti velit.', 'Provident porro magni et ducimus. Nemo non alias est sit sint nisi. Mollitia eum eius officia in nesciunt quia. Et ut magnam aliquid rem ut voluptas. Ut reiciendis distinctio libero dolor aut aut est. Maxime tenetur eos delectus et sed vel. Cupiditate et aspernatur fugiat praesentium. Iure officia aut error molestias. Expedita iure corrupti sit omnis porro dicta commodi. Sint amet repudiandae deserunt amet modi velit nihil eligendi. Et enim quod officia soluta. Vitae unde dicta exercitationem ut quaerat eaque. Earum aliquid aut praesentium facilis sint quidem magni.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(11, 2, 2, 'Deserunt ea dolores aliquam.', 'nihil-iste-est-qui-quia-voluptas-sed-aut', 'Dignissimos ratione recusandae sit tenetur magnam quia. Nulla adipisci dolores explicabo ea vitae voluptates molestias dicta. Quibusdam dolores aut voluptas voluptas ea laboriosam.', 'Quia culpa recusandae voluptatem molestiae. Vel eius magnam ea sequi animi deleniti aut. A sed culpa cumque voluptatem maiores quas dolor. Ipsam exercitationem placeat expedita voluptas. Quibusdam in impedit velit alias. Enim ipsam non qui deserunt perspiciatis assumenda dignissimos.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(12, 1, 2, 'Praesentium odio nihil voluptatibus est fugiat itaque.', 'dolorum-minima-in-autem-est-unde-dolores-dicta-sequi', 'Dolores dolores dolores inventore illo sed iste eos. Nesciunt itaque est quia itaque consectetur consequatur.', 'Quibusdam in aliquid aut ipsa numquam laborum maxime fugit. Cum adipisci omnis in est. Quibusdam commodi nulla perferendis dolor minus. Quas eligendi ut est eum alias omnis aut labore. Perspiciatis inventore veniam vitae iste quis voluptatem. Eos eos numquam sapiente suscipit voluptatem maiores. Nulla fugit maxime enim aut eveniet suscipit sit. Consequatur perspiciatis recusandae praesentium suscipit aperiam. Deserunt veritatis aut enim inventore ut doloribus molestiae. Non veritatis nobis eum iure hic sit rerum. Tenetur veritatis reprehenderit deleniti autem suscipit commodi et.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(13, 1, 1, 'Sed cumque et sit.', 'odio-itaque-vel-unde-ipsam-vero', 'Quos iste omnis quasi sed laboriosam maxime. Recusandae vel nesciunt pariatur ut molestias fuga iusto dolores. Consequatur veniam soluta ullam voluptas ipsum. Doloribus voluptatem occaecati molestias reiciendis in.', 'Inventore ab et dolores suscipit aliquid et. Ipsam est nulla et perspiciatis in ex. Adipisci voluptas praesentium consequatur numquam laboriosam ullam. Id et eos qui dolor sed delectus. Nostrum sed nisi pariatur ipsum. Ipsum non vero reiciendis corporis itaque unde ipsam. Exercitationem beatae rerum est provident aut qui. Omnis maxime dignissimos et repudiandae veniam cumque beatae. Consequatur molestiae dolores earum reprehenderit laboriosam eligendi. Velit consequuntur unde sint enim et eos pariatur. Repudiandae voluptatem qui voluptatem et voluptas dolorem iusto.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(14, 1, 1, 'Earum expedita possimus esse.', 'iste-eum-possimus-autem-id-modi-consequuntur', 'Ut voluptatem ullam vitae hic accusantium quidem natus. Vel ab maiores odit est mollitia voluptatibus. Minima et quas et autem. Velit ratione vero error. Qui voluptatem deleniti unde quia dolorem voluptate.', 'Nemo omnis vitae nulla voluptatum fugit ut numquam. Est cupiditate at et esse. Aut debitis ut ex illo culpa aliquid. Sed a asperiores consequatur illo labore vel est. Est quia aut unde ducimus ad. Est accusantium minus explicabo assumenda est cupiditate.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(15, 2, 1, 'Earum accusantium ut et voluptas esse.', 'hic-et-consequatur-omnis-omnis-quisquam', 'Dolorem aliquam doloribus molestiae fugiat minima. Reprehenderit consequatur facere voluptatum architecto qui hic. Quia illo non ea non aliquid eum maiores. Qui ratione nostrum aut et.', 'Deleniti quod nulla corrupti. Consequatur cumque commodi ea eum. Sint reprehenderit doloribus dolores libero veniam autem aliquam. Ea delectus odit ab aliquid tempore dolores aliquam. Dolorum voluptatem eligendi est suscipit tempore. Architecto ea expedita nostrum in. Expedita autem voluptatibus deleniti minus voluptas at. Provident porro quos sint velit ut facere fugit. Et voluptas rerum ea assumenda et et.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(16, 1, 1, 'Omnis minus provident est dolorem dolores.', 'est-sapiente-ex-reiciendis-magni-vero-ipsum', 'Minus enim sit dignissimos. Mollitia consequuntur quis itaque dicta voluptatem recusandae sunt. Alias corrupti voluptas aut voluptatem perferendis at.', 'Eius praesentium hic est voluptatibus omnis fugit eum. Quasi non ad quod. Iusto sed fugiat magni dignissimos culpa id. Animi ea iure velit. Itaque autem ea eius labore. Fuga quo fuga est a sapiente dolorem. Omnis sunt ullam illum ratione reprehenderit dolor. Et aut temporibus quasi consequatur eaque et.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(17, 1, 1, 'Expedita aut ipsa quia non qui molestias.', 'vel-accusamus-non-quasi-debitis-numquam-accusamus-vel', 'Ab accusamus veniam eos voluptatem qui. Soluta nihil consequatur amet. Architecto officia corporis quis consequatur qui alias mollitia. Consequatur dignissimos molestiae voluptatum non est inventore hic.', 'Incidunt soluta repudiandae molestiae aut. In labore perspiciatis et veritatis dolore. Autem eum cupiditate odit provident in neque. Aperiam praesentium consequatur omnis. Magni similique qui error aut aliquid.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(18, 2, 2, 'Omnis voluptas voluptas eum eveniet asperiores sed.', 'temporibus-assumenda-enim-illo-aut-voluptatem-et-cupiditate', 'Nesciunt aut incidunt pariatur. Exercitationem molestiae quia a aspernatur. Mollitia porro et odio expedita odio est quia. Et aut voluptas dignissimos reiciendis sunt.', 'Dolor delectus quos ipsum qui in. Non nam minus nesciunt praesentium rem consequatur. Qui sunt et neque ut facilis. Nihil quae eveniet fugit doloremque error labore. Itaque perspiciatis nesciunt dicta ut ut ipsum. Quia repudiandae et mollitia illo natus magnam quas. Voluptas voluptate eum dicta cum ex. Reprehenderit enim vel esse eveniet voluptatem voluptatum ut.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(19, 1, 2, 'Animi est sint ut accusantium recusandae.', 'et-dolor-voluptas-qui-vel-ratione-fugit-fugiat', 'Fugiat mollitia ut maxime et magnam eius. Ab tempora eum eaque architecto. Est quos ut sit occaecati animi accusantium ut. Iste dolorem quod minima.', 'Voluptatem vero accusamus placeat impedit dolorem magni. Sint odio maxime atque. A iure dicta animi. Modi sit tenetur doloremque non eius totam. Aut et ea aut earum sint. Est qui nesciunt id nam aut esse saepe. Itaque corrupti ea dolor ut velit quod. Debitis dolores ab amet molestias nihil quo nam. Soluta quibusdam esse excepturi qui atque et.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(20, 1, 2, 'Facere perferendis fugiat quia omnis eligendi voluptatem doloremque molestias.', 'id-distinctio-laudantium-voluptate', 'Qui ducimus aut optio est officiis. Et provident sint placeat et. Accusantium ad explicabo officiis.', 'Est reiciendis aut animi in. Fuga sit autem perferendis perferendis aperiam reiciendis temporibus quis. Ex perferendis ut possimus et hic maxime aliquid. Libero culpa et rerum exercitationem nihil. Et et voluptas est aut. Possimus odit adipisci quia officia alias sequi modi. Debitis corporis rerum vitae labore non.', NULL, '2023-02-10 00:18:49', '2023-02-10 00:18:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nadine Aryani', 'alambana20', 'margana35@example.com', '2023-02-10 00:18:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dvHiKVN1KE', '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(2, 'Chelsea Puspasari', 'rudi81', 'rizki91@example.net', '2023-02-10 00:18:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GVAB26c6y9', '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(3, 'Ajimin Salahudin', 'tari.padmasari', 'yyuniar@example.com', '2023-02-10 00:18:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6npNDneL2b', '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(4, 'Carla Hana Yuniar M.TI.', 'usada.wira', 'gasti.uyainah@example.com', '2023-02-10 00:18:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GH2RYnHyvN', '2023-02-10 00:18:49', '2023-02-10 00:18:49'),
(5, 'Irma Laksmiwati', 'lailasari.hasim', 'wulan03@example.net', '2023-02-10 00:18:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a8NS0g3e1X', '2023-02-10 00:18:49', '2023-02-10 00:18:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
