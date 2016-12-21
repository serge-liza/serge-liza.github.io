<?php 
session_start();
include "header.php";

unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
?>
<B>ON-LINE тесты</H1>
                                                   <B>
                                                      <STRONG>
<a href="info.php?location=index.php"></a><br><br> 													 
<a href="info.php?location=test1.php">Конфликтность в парах</a><br><br> 
<a href="info.php?location=test2.php">Тест супружеских отношений</a><br><br> 
<a href="info.php?location=test3.php">Тест Якоря карьеры</a><br><br> 
<a href="info.php?location=test4.php">Удовлетворенность браком</a><br><br> 
<a href="info.php?location=test5.php">Удовлетворенность отношениями в паре</a><br><br> 
                                                       </STRONG> 
                                                   <BR>

<?php
include "footer.php";
?>