<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf8"><!--кодировка текста-->
          <title>Блог Apple</title> 
          <link rel="stylesheet" href="../style.css">
           <script  type="text/javascript" src="/Script/upTT2.js"></script>
    </head>
    
    <body>
        
           
            <a href="index.php?action=add">Добавить статью</a>
            <div>
       <table class="admin-table">
            <tr >
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a) : ?> <!--цикл для каждой статьи-->
            <tr>
                <td><?=$a['date']?></td>
                <td><?=$a['title']?></td>
                <td>
                    <a href="index.php?action=edit&id=<?=$a['id']?>"> Редактировать</a>
                </td>
                <td>
                   <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                </td>
            </tr>
                    <?php endforeach ?>
        </table>
            </div>
            
                
               
            
    </body>
</html>