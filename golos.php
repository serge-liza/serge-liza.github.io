<?php 
session_start();
include "header.php";




$repl='nothing';

if ($_POST['answer']==1)
{
$repl='good';
}
else if ($_POST['answer']==2)
{
$repl='norm';
}
else if ($_POST['answer']==3)
{
$repl='indiff';
}
else if ($_POST['answer']==4)
{
$repl='bad';
}

$sql="UPDATE opros SET $repl=$repl+1";
mysql_query($sql) or die ('вопрос 1 не изменен');

$_SESSION['golos']=1;
print"Спасибо. Ваш голос учтен<br>";
print"<a href=\"index.php\">Нажмите сюда если ваш браузер не поддерживает автоматический переход</a>";
include "footer.php";
?>
<META HTTP-EQUIV="Refresh" CONTENT="3; URL=index.php">
