<?php
/* Константы БД */

define ('DBHOST', 'localhost');
define ('DBNAME', 'arduino'); // Имя базы данных
define ('DBUSER', 'mysql'); // Пользователь базы
define ('DBPASS', 'mysql'); // Пароль БД

/* Подключение к БД */
mysql_pconnect(DBHOST, DBUSER, DBPASS) or die('Соединение отсутсвует!');
mysql_select_db(DBNAME) or die ('Соединение с БД отсутсвует!');
mysql_query('SET NAMES utf8');
?>