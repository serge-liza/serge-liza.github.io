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
mysql_query($sql) or die ('������ 1 �� �������');

$_SESSION['golos']=1;
print"�������. ��� ����� �����<br>";
print"<a href=\"index.php\">������� ���� ���� ��� ������� �� ������������ �������������� �������</a>";
include "footer.php";
?>
<META HTTP-EQUIV="Refresh" CONTENT="3; URL=index.php">
