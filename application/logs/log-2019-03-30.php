<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-30 14:01:25 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-03-30 14:03:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:03:19 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:03:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:03:20 --> 404 Page Not Found: Request/favicon.ico
ERROR - 2019-03-30 14:05:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:05:26 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:05:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:05:41 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:05:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:05:57 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:05:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:06:12 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:12:13 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:12:49 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:16:41 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:17:14 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:36:39 --> Severity: error --> Exception: Call to a member function set_rules() on null H:\xampp\htdocs\contact\application\controllers\Request.php 84
ERROR - 2019-03-30 14:37:13 --> Severity: error --> Exception: Call to undefined method Request_Model::update_request() H:\xampp\htdocs\contact\application\controllers\Request.php 100
ERROR - 2019-03-30 14:37:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:37:40 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:37:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:37:47 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:38:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:38:05 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:38:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:38:10 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:40:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:40:07 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:40:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:44:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:44:04 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:44:04 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:44:11 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:45:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:45:21 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:45:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:49:42 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:52:56 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:52:56 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:52:56 --> Query error: Table 'contact.chr_schedules' doesn't exist - Invalid query: SELECT *, `us`.`id` as `id`, CASE 
                    WHEN user_type_id = 1 THEN 'Staff' 
                    WHEN user_type_id = 2 THEN 'Client' 
                    WHEN user_type_id = 3 THEN 'Agent' 
                END AS user_type_id, CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status, CONCAT(`time_in`, ' - ', `time_out`) AS schedule
FROM `chr_users` `us`
INNER JOIN `chr_schedules` `sch` ON `sch`.`id`=`us`.`schedule_id`
WHERE `us`.`is_deleted` = 0
 LIMIT 10
ERROR - 2019-03-30 14:52:58 --> 404 Page Not Found: User/favicon.ico
ERROR - 2019-03-30 14:53:37 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:53:37 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:53:37 --> Query error: Table 'contact.chr_schedules' doesn't exist - Invalid query: SELECT *, `us`.`id` as `id`, CASE 
                    WHEN user_type_id = 1 THEN 'Staff' 
                    WHEN user_type_id = 2 THEN 'Client' 
                    WHEN user_type_id = 3 THEN 'Agent' 
                END AS user_type_id, CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status, CONCAT(`time_in`, ' - ', `time_out`) AS schedule
FROM `chr_users` `us`
INNER JOIN `chr_schedules` `sch` ON `sch`.`id`=`us`.`schedule_id`
WHERE `us`.`is_deleted` = 0
 LIMIT 10
ERROR - 2019-03-30 14:53:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:53:42 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:53:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:53:45 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:54:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:54:07 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:54:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:54:11 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:55:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:55:32 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:55:32 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:55:38 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:56:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:56:00 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:56:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:56:09 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:56:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:56:27 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:56:27 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:58:43 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:58:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 14:58:53 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 14:58:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:07:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:07:14 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:07:14 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:07:19 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:07:52 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:07:52 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:07:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:12:05 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:12:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:12:46 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:12:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:12:52 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:16:47 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:18:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:18:42 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:18:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:43:32 --> 404 Page Not Found: Request/view_user
ERROR - 2019-03-30 15:45:07 --> 404 Page Not Found: Request/view_user
ERROR - 2019-03-30 15:45:10 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:45:15 --> 404 Page Not Found: Request/view_user
ERROR - 2019-03-30 15:45:35 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:45:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:45:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:45:42 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 15:45:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:45:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:21 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 15:46:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:22 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:46:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:34 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:46:34 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:43 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:46:43 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:46:44 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:47:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:47:22 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:47:22 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:47:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:47:45 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:47:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:48:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:48:10 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:48:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:48:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:48:16 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:48:16 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:53:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:53:29 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:53:29 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:53:34 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:54:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 15:54:12 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 15:54:12 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:00:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:00:59 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:00:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:02:52 --> Severity: error --> Exception: Call to undefined function get_groups() H:\xampp\htdocs\contact\application\views\crm-app\user\create_user.php 74
ERROR - 2019-03-30 16:03:15 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:26:13 --> Severity: error --> Exception: Call to undefined function get_groups() H:\xampp\htdocs\contact\application\views\crm-app\user\create_user.php 74
ERROR - 2019-03-30 16:27:10 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:29:26 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:30:43 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:34:10 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:34:29 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:34:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:34:51 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:34:51 --> Query error: Table 'contact.chr_schedules' doesn't exist - Invalid query: SELECT *, `us`.`id` as `id`, CASE 
                    WHEN user_type_id = 1 THEN 'Staff' 
                    WHEN user_type_id = 2 THEN 'Client' 
                    WHEN user_type_id = 3 THEN 'Agent' 
                END AS user_type_id, CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status, CONCAT(`time_in`, ' - ', `time_out`) AS schedule
FROM `chr_users` `us`
INNER JOIN `chr_schedules` `sch` ON `sch`.`id`=`us`.`schedule_id`
WHERE `us`.`is_deleted` = 0
 LIMIT 10
ERROR - 2019-03-30 16:36:19 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:36:19 --> Query error: Table 'contact.chr_schedules' doesn't exist - Invalid query: SELECT *, `us`.`id` as `id`, CASE 
                    WHEN user_type_id = 1 THEN 'Staff' 
                    WHEN user_type_id = 2 THEN 'Client' 
                    WHEN user_type_id = 3 THEN 'Agent' 
                END AS user_type_id, CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status, CONCAT(`time_in`, ' - ', `time_out`) AS schedule
FROM `chr_users` `us`
INNER JOIN `chr_schedules` `sch` ON `sch`.`id`=`us`.`schedule_id`
WHERE `us`.`is_deleted` = 0
 LIMIT 10
ERROR - 2019-03-30 16:36:19 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:38:03 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:38:03 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:38:03 --> Query error: Unknown column 'us.id' in 'field list' - Invalid query: SELECT *, `us`.`id` as `id`, CASE 
                    WHEN user_type = 1 THEN 'Admin' 
                    WHEN user_type = 0 THEN 'User' 
                END AS user_type_id, CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status
FROM `chr_users`
WHERE `is_deleted` = 0
 LIMIT 10
ERROR - 2019-03-30 16:38:35 --> 404 Page Not Found: User/favicon.ico
ERROR - 2019-03-30 16:38:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:38:35 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:38:46 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:38:52 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:38:52 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:38:53 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:39:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:39:51 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:39:52 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:40:47 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:40:47 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:40:49 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:41:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:41:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:41:26 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:41:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:42:26 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:42:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:45:58 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:45:58 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:45:58 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:45:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:45:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:45:59 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:46:00 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:47:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:47:17 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:05 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:49:07 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:41 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:41 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:49:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:42 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:49:42 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:49:44 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:35 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:50:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:35 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:50:40 --> 404 Page Not Found: Attendance/user_time_status
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:52:21 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:10 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:53:10 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:11 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:24 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:25 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:53:25 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:33 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:48 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:57 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:53:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:13 --> 404 Page Not Found: Assets/dist
ERROR - 2019-03-30 16:56:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:13 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:15 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2019-03-30 16:56:20 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:31 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:32 --> 404 Page Not Found: Request/favicon.ico
ERROR - 2019-03-30 16:56:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:56:36 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 16:58:32 --> Severity: error --> Exception: Call to undefined function get_groups() H:\xampp\htdocs\contact\application\views\crm-app\user\edit_user.php 72
ERROR - 2019-03-30 17:09:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:09:28 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:09:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:09:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:10:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:10:45 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:10:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:10:51 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:08 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:08 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:23 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:40 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:54 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:59 --> 404 Page Not Found: Assets/vendors
ERROR - 2019-03-30 17:12:59 --> 404 Page Not Found: Assets/vendors
