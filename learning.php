<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Cards</title> 
          <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
           <div class="header">
                <div class="widget">
                  <h3 class="widget-title">Меню</h3>
                  <ul class="widget-list">
                    <li><a href="">О системе</a></li>
                    <li><a href="">Обучение</a></li>
                    <li><a href="">Тестирование</a></li>
                    <li><a href="">Статистика</a></li>
                  </ul>
                </div>
            </div>
        </div>
            <div>
                <?php foreach($cards as $c) : ?> <!--цикл для каждой статьи-->
                <div class="card">
                    <h3>
                        <a href="card.php?id=<?=$c['id']?>">
                            <?=$c['eng']?></a>
                    </h3>
                    <input type="button" onclick="card.php?id=<?=$c['id']?>">
                            <?=$c['rus']?>>
                </div>
                    <?php endforeach ?>
            </div>
             
            <footer>
                Copyright &copy; 2016
            </footer>
        
    </body>
</html>