<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Блог Apple</title> 
          <link rel="stylesheet" href="style.css">
           <script  type="text/javascript" src="/Script/upTT2.js"></script>
    </head>
    
    <body>
        <div class="header">
            <nav>
                <div class="logo-box">
                    <h1 class="logo">
                        <img width="80" height="80" src="Apple_logo.png">
                    </h1>
                </div>
                <ul>
                    <li><a href="index.php">Статьи</a></li>
                    <li><a href="/company_history.html">История компании</a></li>
                    <li><a href="#">Apple Pay</a></li>
                    <li><a href="#">Watch</a></li>
                </ul>
            </nav>
            <a href="/admin">Панель администратора</a>
        </div>
            <div>
                <?php foreach($articles as $a) : ?> <!--цикл для каждой статьи-->
                <div class="article">
                    <h3>
                        <a href="article.php?id=<?=$a['id']?>">
                            <?=$a['title']?></a>
                    </h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=$a['content']?></p>
                </div>
                    <?php endforeach ?>
            </div>
             <div class="leftbar-wrap">
        
              <a href="#" class="left-controlbar">
                <span class="active-area">
                  <span class="bar-desc-top">⇑ Наверх</span>
                </span>
              </a>
        </div>
            <footer>
                Новостной портал Apple <br>Copyright &copy; 2016
            </footer>
        
    </body>
</html>