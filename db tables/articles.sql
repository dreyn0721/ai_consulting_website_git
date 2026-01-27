-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2026 at 05:08 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtualdominance`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `img_url` text NOT NULL,
  `posted_by_id` int NOT NULL,
  `datetimeinserted` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `img_url`, `posted_by_id`, `datetimeinserted`) VALUES
(3, 'Lorem Ipsum Dolor Sit Amit 1', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/fa4da625a2fc87210197e18ec3016a59x83.jpg', 1, '01/26/2026 19:41:04'),
(4, 'Lorem Ipsum Dolor Sit Amit 2', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/1cc28a10bf148e29c3976d5e26d47177x41.jpg', 1, '01/26/2026 19:41:10'),
(5, 'Lorem Ipsum Dolor Sit Amit 3', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/bf9b9cd94f2b3d1a57e79da521fd2ceax0.jpg', 1, '01/26/2026 19:41:17'),
(6, 'Lorem Ipsum Dolor Sit Amit 4', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/57323fb3a2875cbcb08c964639249af9x57.jpg', 1, '01/26/2026 19:41:24'),
(7, 'Lorem Ipsum Dolor Sit Amit 5', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/709b61b191bc2a2b67e5244211279928x20.jpg', 1, '01/26/2026 19:41:33'),
(8, 'Lorem Ipsum Dolor Sit Amit 6', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/7a54618de2ecf2852dcf7ff8124bd05fx17.jpg', 1, '01/26/2026 19:41:36'),
(9, 'Lorem Ipsum Dolor Sit Amit 7', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/bae90790b526b976121d8858188597eax31.jpg', 1, '01/26/2026 19:41:47'),
(10, 'Lorem Ipsum Dolor Sit Amit 8', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/7d85e1eed2255505d0a3222d0668a9fex77.jpg', 1, '01/26/2026 19:41:55'),
(11, 'Lorem Ipsum Dolor Sit Amit 9', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/4663220be2fa1770b970a4c7466ef78cx69.jpg', 1, '01/26/2026 19:42:02'),
(12, 'Lorem Ipsum Dolor Sit Amit 10', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/3d3f13f4da847bc27e404d0fd41fed4fx14.jpg', 1, '01/26/2026 19:42:08'),
(13, 'Lorem Ipsum Dolor Sit Amit 11', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/cccff8da9624207250a3759e73435323x6.jpg', 1, '01/26/2026 19:42:14'),
(14, 'Lorem Ipsum Dolor Sit Amit 12', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/3ed7c53100ca51c6df7546069c7997f4x58.jpg', 1, '01/26/2026 19:42:26'),
(15, 'Lorem Ipsum Dolor Sit Amit 13', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/b53f4d2a9cf3b0428587c75f5ae23256x60.jpg', 1, '01/26/2026 19:50:41'),
(16, 'Lorem Ipsum Dolor Sit Amit 14', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/f0d7658406b1c320b559285c4c44c153x66.jpg', 1, '01/26/2026 19:51:00'),
(17, 'Lorem Ipsum Dolor Sit Amit 15', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a convallis tellus. Sed et orci non lacus dapibus vestibulum. Praesent venenatis imperdiet nunc convallis vehicula. Aenean sit amet risus scelerisque, aliquam lorem et, interdum nisl. Curabitur non varius diam, quis pretium turpis. Praesent pharetra augue non ligula pulvinar interdum. In hac habitasse platea dictumst. Fusce sodales dolor sed nisi ullamcorper, faucibus vulputate libero interdum.', '/assets/article_imgs/b5d62fc4dbab2c27a388326dbd0bc39cx40.jpg', 1, '01/27/2026 07:19:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
