/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;









INSERT INTO `drivers` (`driver_id`, `driver_name`, `driver_phonenumber`, `driver_address`) VALUES
(1, 'dimas', '085754550557', 'Jl. Semeru');
INSERT INTO `drivers` (`driver_id`, `driver_name`, `driver_phonenumber`, `driver_address`) VALUES
(2, 'Riski', '082155370298', 'Jl. Merbabu');
INSERT INTO `drivers` (`driver_id`, `driver_name`, `driver_phonenumber`, `driver_address`) VALUES
(3, 'Bagus', '089832423222', 'Jl. Veteran');









INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_05_10_070954_create_booking_approvals_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2024_05_10_070954_create_bookings_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2024_05_10_070954_create_cache_locks_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_05_10_070954_create_cache_table', 1),
(5, '2024_05_10_070954_create_drivers_table', 1),
(6, '2024_05_10_070954_create_failed_jobs_table', 1),
(7, '2024_05_10_070954_create_fuel_usages_table', 1),
(8, '2024_05_10_070954_create_job_batches_table', 1),
(9, '2024_05_10_070954_create_jobs_table', 1),
(10, '2024_05_10_070954_create_mines_table', 1),
(11, '2024_05_10_070954_create_offices_table', 1),
(12, '2024_05_10_070954_create_password_reset_tokens_table', 1),
(13, '2024_05_10_070954_create_regions_table', 1),
(14, '2024_05_10_070954_create_service_schedules_table', 1),
(15, '2024_05_10_070954_create_sessions_table', 1),
(16, '2024_05_10_070954_create_users_table', 1),
(17, '2024_05_10_070954_create_vehicles_table', 1),
(18, '2024_05_10_070957_add_foreign_keys_to_booking_approvals_table', 1),
(19, '2024_05_10_070957_add_foreign_keys_to_bookings_table', 1),
(20, '2024_05_10_070957_add_foreign_keys_to_fuel_usages_table', 1),
(21, '2024_05_10_070957_add_foreign_keys_to_mines_table', 1),
(22, '2024_05_10_070957_add_foreign_keys_to_offices_table', 1),
(23, '2024_05_10_070957_add_foreign_keys_to_service_schedules_table', 1);

INSERT INTO `mines` (`mine_id`, `mine_name`, `mine_address`, `office_id`) VALUES
(1, 'NS Tambang 1', 'Jl. Angsa', 2);
INSERT INTO `mines` (`mine_id`, `mine_name`, `mine_address`, `office_id`) VALUES
(2, 'NS Tambang 2', 'Jl. Bebek', 2);
INSERT INTO `mines` (`mine_id`, `mine_name`, `mine_address`, `office_id`) VALUES
(3, 'NS Tambang 3', 'Jl. Macan', 2);
INSERT INTO `mines` (`mine_id`, `mine_name`, `mine_address`, `office_id`) VALUES
(4, 'NS Tambang 4', 'Jl. Ikan', 2),
(5, 'NS Tambang 5', 'Jl. Kucing', 1),
(6, 'NS Tambang 6', 'Jl. Harimau', 1);

INSERT INTO `offices` (`office_id`, `office_name`, `office_address`, `office_phonenumber`, `office_type`, `region_id`) VALUES
(1, 'GP Nikel Sejahtera', 'Jl. Jakarta', '542-232-12', 'pusat', 1);
INSERT INTO `offices` (`office_id`, `office_name`, `office_address`, `office_phonenumber`, `office_type`, `region_id`) VALUES
(2, 'GC Nikel Sejahtera 1', 'Jl. Bandung', '232-322-22', 'cabang', 2);




INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Kalimantan Timur');
INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(2, 'Kalimantan Selatan');
INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(3, 'Sumatera Selatan');



INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('awBuFdqvqseU6NwgEjzj4gf3pUMYpc4hhBYE2wKV', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicWI4QUVYN0VLUzI1cUo0TFRFWGtHMTVvYjlHQ0JleGpnMWVmTUlwcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQvYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1715322556);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EkJssyO3UoQe5KJMnKiOG3ukXahhJuf4d8DYZYtq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmYxczN6MTVkQ1JWRmcwaGdhWGtkcmdWTjJmc1VtRWJzQk14VUZCcCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkL2Jvb2tpbmdzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1715327288);


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$htpS2x9Q5.xOcYXO1Rx1ge1aSjn/TRKRy6v4yIjBI.s9y0oMPy0JO', 'admin', NULL, '2024-05-10 05:59:25', '2024-05-10 05:59:25');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Budi', 'budi@gmail.com', NULL, '$2y$12$AT5uDDLncXahgIgE/jUF0ev6YUdL9ghd2UXJxv2vp3ARpGE.ZWyVm', 'supervisor', NULL, '2024-05-10 07:10:48', '2024-05-10 07:10:48');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'dimas', 'dimas@gmail.com', NULL, '$2y$12$Si2EPGP50.zaJjlEq24qUeKbrRFYuTDWpuFM72bZtrfoceYMr8miO', 'manager', NULL, '2024-05-10 07:11:09', '2024-05-10 07:11:09');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Setiawan', 'seti@gmail.com', NULL, '$2y$12$5030HvLNcnJE7JDO5vkXT.WaGIxPJKCWMAfzvoVSvZIN7CSxAkmci', 'supervisor', NULL, '2024-05-10 07:11:29', '2024-05-10 07:11:29');

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_type`, `vehicle_manufacturer`, `vehicle_model`, `vehicle_license_plate`, `is_rented`, `rental_company`) VALUES
(1, 'angkutan barang', 'Toyota', 'Hilux', ' KT 232 BA', 0, NULL);
INSERT INTO `vehicles` (`vehicle_id`, `vehicle_type`, `vehicle_manufacturer`, `vehicle_model`, `vehicle_license_plate`, `is_rented`, `rental_company`) VALUES
(2, 'angkutan barang', 'Toyota', 'Tacoma', 'KT 112 BB', 1, 'Sekar Rental Jaya');
INSERT INTO `vehicles` (`vehicle_id`, `vehicle_type`, `vehicle_manufacturer`, `vehicle_model`, `vehicle_license_plate`, `is_rented`, `rental_company`) VALUES
(3, 'angkutan orang', 'Mitsubishi', 'Pajero Sport', 'KU 112 CC', 0, NULL);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;