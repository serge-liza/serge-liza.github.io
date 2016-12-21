<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Блог Apple</title> 
          <link rel="stylesheet" href="../style.css">
           <script  type="text/javascript" src="/Script/upTT2.js"></script>
    </head>
    
    <body>
        <div>
            <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
               <label>
                        Название
                        <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                    </label>
                    <label>
                        Содержимое
                        <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                    </label>
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
    </body>
</html>