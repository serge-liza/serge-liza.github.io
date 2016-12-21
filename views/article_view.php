<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Новости Apple</title> 
          <link rel="stylesheet" href="/style.css">
    </head>
    
    <body>
        <div> 
            <div>
                
                <div class="article">
                    <h3>
                        <?=$article['title']?>
                    </h3>
                    <em>Опубликовано: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                </div>

            </div>
            
            <footer>
                Новостной портал Apple <br>Copyright &copy; 2016
            </footer>
        </div>
    </body>
</html>