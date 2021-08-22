-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_programing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'php'),
(2, 'Vuejs');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `title`, `img`, `description`, `date`, `cate_id`) VALUES
(85, 'Introduction to Vue', 'php-6121baca994829.87502501.jpg', 'The start of a brand new tutorial series about Vue.js 2.0! We will start learning the fundamentals and then move onto more advanced stuff. In this video I introduce the series and explain the organization of the next few lessons.We will start by learning the basics.  Afterwards we will build some Vue.js apps that rely on no other framework (other than Html & CSS). Finally we will build a full scale app that relies on a backend built in Laravel. However it can easily be adapted to any framework as it will follow general CRUD principles.', '2021-08-22 09:47:18', 2),
(86, 'Vue.js Project Setup ', 'php-6121bb8eb02385.30066211.jpg', 'Learn how to setup a Vue.js 2.0 project in this tutorial. It is actually incredibly simple! All we have to do is load the Vuejs script from a CDN (or locally), then initialize it with one line of code.You will love how simple it is to get up and running.', '2021-08-22 09:49:58', 2),
(87, 'Directives in Vue.js ', 'vue-6121bc0fb905f0.76063863.jpg', 'Tutorial covering Directives in Vue.js 2.0. Directives are like mini-functions that we add to html elements to “boost” them with extra functionality. These are common functions that we tend to find ourselves re-writing every time we make a new website. For example binding values of inputs to variables, tying events to html elements, hiding elements until they load and much more.We can replicate this functionality using easy directives. All directives are prefixed with a “v-“ and are attached directly to HTML elements.In this video we cover the basic directives, while saving the more commonly used directives to their own respective text.', '2021-08-22 09:53:03', 2),
(88, 'Using V-Bind Directive ', 'php-6121beb795c621.31303899.jpg', 'This Vue.js tutorial covers the use of V-bind  attach data models to our view attributes. This is an easy and helpful way to take our Vue data models and attach them to attributes on html elements with the same power of binding that you see with everything else in Vue.The concepts are actually extremely simple, we attach v-bind: followed by the attribute you want to change and then set it equal to the data model you want it to equal.v-bind:title=“message” v-bind:src=“imageURL” v-bind:alt=“message” ', '2021-08-22 09:55:29', 2),
(89, 'Looping with V-For', 'php-6121bd4e77d2c3.92877743.jpg', 'Tutorial covering the v-for directive allowing us to create loops in our html elements. This is great for making lists, or looping through resources for a truly dynamic experience.The v-for directive requires an array or object to loop through. Each iteration of the loop will have access to a loop object and access to each parameter of that current iterated object.', '2021-08-22 09:57:25', 2),
(90, '2-Way Binding with V-Model ', 'vue-6121bdc8db1542.33451589.jpg', 'This Vue.js tutorial covers 2 way binding in Vue.js and what it means for our applications. Actually putting 2 way binding to use it very simple because it happens automatically, so we will spend the majority of this episode discussing why it is powerful and how you can use it.', '2021-08-22 10:00:24', 2),
(91, 'Event Handling ', 'php-61225bae745f36.69580631.jpg', 'Vue.js 2.0 Tutorial demonstrating how to use events in Vue. You might be familiar with events already if you  from any other javascript background or framework. Events are things like Hover or Click that happen when your application is running.  In Vue.js we can tie various methods in when these events occur. This allows us further customization over what happens and how a user interacts with the application.  Vue.js events can be designated with the v-event directive or with a simple @ sign before the event name.  Coming Up: Computer Properties in Vue.js  ====  LINKS  ====  Vue.JS API on V-Bind https://vuejs.org/v2/api/#v-model  ==== DOWNLOAD SOURCE CODE ====  Download from GitHub: https://github.com/DevMarketer/VueJS_...   ====  MORE FROM THIS SERIES . ====  Previous Video [Part 6]: https://youtu.be/nEdsu6heW9o Next video [Part 8]: Coming Soon  Full Playlist for the ', '2021-08-22 10:02:03', 2),
(94, 'Introduction to PHP', 'php-6121c10d460839.28425248.png', 'PHP is also known as Hypertext Pre-processor. PHP is an open-source and server-side scripting language, which is mainly used for developing web applications. The syntax of the PHP language is similar to the C language. PHP was originally created by Rasmus Lerdorf, and it first appeared in 1995. PHP is widely used in developing web applications and has become one of the major languages for the developers to create new applications.', '2021-08-22 10:14:21', 1),
(95, 'Introduction of PHP Keywords', 'php-6121c1e5aed686.83231922.png', 'Keywords are the words hold some meaning. In regular use of PHP language, these words cannot be used as a constant, a variable name, a method name, a class name, etc. ', '2021-08-22 10:17:57', 1),
(96, 'Introduction to Advantages of PHP', 'php-6121c24fb71fe8.92277146.jpg', 'PHP is known as the general purpose programming language. It is used as a server-side scripting language that is mainly used for the development of web sites. The PHP frameworks also make web development easier. This framework helps in reusing the same code and there is no need to write the lengthy and complex code for the web applications.', '2021-08-22 10:19:43', 1),
(97, 'Definition of PHP Global Variable', 'php-6121c2997d0715.00138653.jpg', 'In any programming language, global variables are those variable which are declared outside the method or functions, also they can be declared inside of the functions as well. Global variable is just like any other variable but the difference is that this scope is global in application. If we make any variable global then we can access that variable from our whole application which means inside or outside of the script as well. Global variable functions the same way everywhere, as the name, suggests they are global for other resources. In the coming section, we will discuss more this PHP Global Variable in detail.', '2021-08-22 10:20:57', 1),
(98, 'Definition of Local Variable in PHP', 'php-6121c2efb50302.48219645.jpg', 'Local variables are those variables that are declared inside the function of a Php program and have their scope inside that function only. Local variables have no scope outside the function (variable cannot be referenced outside the function), so cannot be used outside its scope in the program. If any other variable with the same name is used in a program outside a function(a global variable), it is considered differently and has its own identity, and considered as a completely different variable. ', '2021-08-22 10:22:23', 1),
(99, 'Introduction to PHP Commands', 'php-6121c343514611.59816015.jpg', 'PHP stands for hypertext processor which are designed as a server-side scripting language for developing the web application. The PHP code is mainly combined or embedded with HTML syntax, but it can be used for any template system of the web application or available web framework.', '2021-08-22 10:23:47', 1),
(100, 'Introduction to PHP Loops', 'php-6122478503eef1.44002228.jpg', 'PHP Loops are a type of code which can help us to run some code inside of the loop to run over and over again according to our requirement as the input and these loops will help run the code and complete the task infinitely as we want in order to execute the same code inside of the loop again and again until our condition becomes false or else the code runs continuously. The word itself says that it is going to be repeated but only if a certain condition is true which is mentioned in the loop parameters to check the condition for the PHP loop/loops.', '2021-08-22 10:25:18', 1),
(101, 'Introduction to For Loop in PHP', 'php-6121c41170fe03.38629491.png', 'Loops in PHP are used to perform a task repeatedly. For Loop in PHP has various forms. For loop loops a number of times like any other loop ex. while loop. While loop and for loop executes a block of code, which is based on a condition. When it is known beforehand that a particular block of code should execute this number of times say 5 times we use for loop. ', '2021-08-22 10:27:13', 1),
(102, 'PHP Do While Loop', 'php-6122448f6f7117.88231824.png', 'A server-side scripting language, PHP is a very popular and widely used open-source language. Initially, PHP was known as –Personal Home Page. In this topic, we are going to learn about PHP Do While Loop.', '2021-08-22 10:29:21', 1),
(113, 'v-bind', 'php-61226ccaa7c9c5.41750232.png', 'you will know how to use v-bind(1)', '2021-08-22 21:12:44', 2),
(122, 'upload image', 'php-61226496e9e6e5.36280784.jpg', 'how to set condition validation in php.', '2021-08-22 21:52:06', 1),
(123, 'upload image', 'php-6122650763f797.61162174.jpg', 'how to upload image ', '2021-08-22 21:53:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `profile` varchar(400) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `profile`, `email`, `password`, `userType`) VALUES
(9, 'NOLY', 'profile-6121c77c690586.32199633.png', 'noly@gmail.com', '456', 'user'),
(11, 'NONA', 'profile-6121c804b31520.25672534.jpg', 'nona@gmail.com', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `cate_id` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
