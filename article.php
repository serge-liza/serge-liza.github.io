<?php
//Контроллер
    require_once("database.php");//файл для работы с БД
    require_once("models/articles_models.php");//файл функций для работы со статьями
    
    $link = db_connect();
    $article = articles_get($link, $_GET['id']);//из url строки берем id
    
    include("views/article_view.php");

?>