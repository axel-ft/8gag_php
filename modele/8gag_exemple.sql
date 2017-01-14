-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 14 Janvier 2017 à 21:46
-- Version du serveur :  5.7.16-0ubuntu0.16.04.1
-- Version de PHP :  7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `8gag`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `date_upload` datetime NOT NULL,
  `ip_user` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `name_img` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`id`, `date_upload`, `ip_user`, `id_user`, `link`, `name_img`, `description`) VALUES
(1, '2017-01-14 20:43:12', '88.185.161.26', 1, 'vue/images/upload/a555d9f875b92bdf0b6a64e8ad15ec95.jpg', 'Image 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus ex sit amet justo tristique consectetur. Proin id sem rhoncus, tempor velit nec, molestie purus. Morbi suscipit odio massa nunc.'),
(2, '2017-01-14 20:43:54', '88.185.161.26', 1, 'vue/images/upload/0e856c04fa1855c35c923d6626e39ec1.jpg', 'Image 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere eleifend mi, in hendrerit sed.'),
(3, '2017-01-14 20:44:22', '88.185.161.26', 1, 'vue/images/upload/a04854d71fca7787edf1208fa8cfa7c3.jpg', 'Image 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id lobortis metus. Nullam risus sapien, blandit a sapien ut, consectetur euismod neque. Maecenas et elit id urna interdum vestibulum. In dictum odio nec neque bibendum, in dapibus amet.'),
(4, '2017-01-14 20:51:22', '88.185.161.26', 1, 'vue/images/upload/e685de535d69e8eeaca72bd3917b33f1.jpg', 'Image 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur massa quis tristique elementum. Integer facilisis arcu eu nunc pellentesque mattis. Fusce vehicula arcu eget pretium congue. Nunc iaculis sit amet leo non eleifend. Morbi eget placerat lacus. Vestibulum sagittis tempor diam amet.'),
(5, '2017-01-14 20:52:31', '88.185.161.26', 1, 'vue/images/upload/f234dfef48d932fc2a8f960640075a78.jpg', 'Image 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id erat dapibus, fringilla velit ut, consequat nibh. Phasellus est quam, porttitor quis fermentum non, tincidunt a libero. Aenean imperdiet magna ante, a volutpat.'),
(6, '2017-01-14 20:57:34', '88.185.161.26', 1, 'vue/images/upload/176b7ad0a59158173af52f4940fc450c.jpg', 'Image 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut urna lacinia, pellentesque nibh ut, tincidunt mauris. Fusce lacus nulla turpis duis.'),
(7, '2017-01-14 20:58:08', '88.185.161.26', 1, 'vue/images/upload/04d052546226e21dfbe6e2d8154db3ee.jpg', 'Image 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tortor condimentum, mollis ante ut, pulvinar turpis. Vivamus laoreet massa in tellus eleifend, ut sollicitudin mauris finibus. Integer placerat venenatis leo in accumsan. Vivamus quis erat ipsum. Aliquam fringilla orci vel velit sodales volutpat.'),
(8, '2017-01-14 20:58:34', '88.185.161.26', 1, 'vue/images/upload/dc58d375f33bb4a840cec92d6dd0fa06.jpg', 'Image 8', 'Lorem ipsum dolor sit amet, consectetur viverra fusce.'),
(9, '2017-01-14 20:59:03', '88.185.161.26', 1, 'vue/images/upload/0d6e040a3e1e65ddeca58412df42db74.jpg', 'Image 9', 'Lorem ipsum dolor sit amet.'),
(10, '2017-01-14 20:59:45', '88.185.161.26', 1, 'vue/images/upload/87f2629ef71d036df7d95cae612aa978.jpg', 'Image 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sodales non ante sed vestibulum. Quisque sit amet ultrices tellus, vel auctor nisl. Quisque ac augue dolor. Suspendisse sed.'),
(11, '2017-01-14 21:14:18', '88.185.161.26', 1, 'vue/images/upload/1078fd5aaee8e5b3378ad1bbcbbe6155.jpg', 'Image 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis tellus eu finibus sollicitudin. Etiam eget metus non ligula vehicula feugiat molestie ut elit. Integer rutrum turpis in cras amet.'),
(12, '2017-01-14 21:16:40', '88.185.161.26', 1, 'vue/images/upload/350d0f9a73ec22d3cf8c485599fbf5da.jpg', 'Image 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis tellus eu finibus sollicitudin. Etiam eget metus non ligula vehicula feugiat molestie ut elit. Integer rutrum turpis in cras amet.'),
(13, '2017-01-14 21:19:39', '88.185.161.26', 1, 'vue/images/upload/9fee5ab49fb1890df84d6b8dd1403f01.jpg', 'Image 13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis tellus eu finibus sollicitudin. Etiam eget metus non ligula vehicula feugiat molestie ut elit. Integer rutrum turpis in cras amet.'),
(14, '2017-01-14 21:21:58', '88.185.161.26', 1, 'vue/images/upload/88e24adba9c67bb99bc1f34afef0d087.jpg', 'Image 14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis tellus eu finibus sollicitudin. Etiam eget metus non ligula vehicula feugiat molestie ut elit. Integer rutrum turpis in cras amet.'),
(15, '2017-01-14 21:24:26', '88.185.161.26', 1, 'vue/images/upload/9b2fa0953be0c3d50cd47e40081a1244.jpg', 'Image 15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc iaculis tellus eu finibus sollicitudin. Etiam eget metus non ligula vehicula feugiat molestie ut elit. Integer rutrum turpis in cras amet.'),
(16, '2017-01-14 21:32:32', '88.185.161.26', 1, 'vue/images/upload/a8bccfcea7cc06f7142b1c7282b5fbe2.jpg', 'Image 16', 'Nunc facilisis sem metus, sed porta tortor rutrum ac. Fusce vulputate arcu ut imperdiet sagittis. Nulla vitae volutpat nisi.'),
(17, '2017-01-14 21:32:09', '88.185.161.26', 1, 'vue/images/upload/75983faee7d914e7be281120bf147cf1.jpg', 'Image 17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ultricies, velit at consequat facilisis, augue erat faucibus lorem, vitae feugiat lorem risus ultricies augue. Sed in nisl accumsan, consequat ex at, porta nisl. Fusce porta accumsan faucibus.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `name`, `pseudo`, `mail`, `password`, `admin`, `active`) VALUES
(1, 'Test', 'TEST', 'Testeur', 'test@test.fr', '$2a$07$302838711915bef2db65cOfYnH.rzeWIHJ/6ggBk1/v8vap9OcejC', 0, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
