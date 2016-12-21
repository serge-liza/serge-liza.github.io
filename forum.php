<?php 
session_start();
include "header.php";
global $cdb;

if (isset ($_POST['type']))
{
if ($_POST['type']=='new_top')
{

$top_name='noname';
$name='noname';
$message='';

if (isset ($_POST['top_name']))
$top_name=$_POST['top_name'];

if (isset ($_POST['name']))
$name=$_POST['name'];

if (isset ($_POST['message']))
$message=$_POST['message'];




$date=date("Y-m-d H:i:s");



if ($top_name!='noname' and $name!='noname'){
$s="INSERT INTO `topics` (`top_name`,`name`,`message`,`replies`,`post_date`,`last_reply`) VALUES ('$top_name','$name','$message','0','$date','$date');";
$sort=@mysql_query($s) or die ("Не внесены данные");
}

print"Тема создана <br><br>";

}




if ($_POST['type']=='new_message')
{



$top_id='noname';
$name='noname';
$message='';


if (isset ($_POST['top_id']))
$top_id=$_POST['top_id'];

if (isset ($_POST['name']))
$name=$_POST['name'];

if (isset ($_POST['message']))
$message=$_POST['message'];

$date=date("Y-m-d H:i:s");




if ($top_id!='noname' and $name!='noname' and $message!=''){
//$s="INSERT INTO `replies` (`name`,`top_id,`reply`,`reply_date`) VALUES ('$name','$top_id','$message','$date');";
//$sort=@mysql_query($s) or die ("Не внесены данные");


$s="INSERT INTO `replies` (`name`,`top_id`,`reply`,`reply_date`) VALUES ('$name','$top_id','$message','$date');";
$sort=@mysql_query($s) or die ("Не внесены данные");

}

//$query="update topics set pass='$n2_pass' where id='$id_ses'";
//$result=mysql_query($query) or die ('Не изменен');

$sql="UPDATE `topics` SET last_reply='$date' WHERE top_id='$top_id'";
mysql_query($sql) or die ('Не изменил дату последнего мессага');

$sql="UPDATE `topics` SET replies=replies+1 WHERE top_id='$top_id'";
mysql_query($sql) or die ('Не прибавил счетчик');


print"Cообщение добавлено<br><br>";


}



}


if (!isset ($_GET['type'])){
all_top();
}
elseif ($_GET['type']=='add_top'){
add_top();
}
elseif ($_GET['type']=='add_message'){
add_message();
}
elseif ($_GET['type']=='read_top'){
read_top();
}





function all_top()
{
global $cdb;

print"<a href=?type=add_top>Создать тему</a>";

$s="SELECT * FROM topics";
$query=$cdb->query($s);
Print"<table border=1>";
 Print"<tr><td>Тема</td><td>Автор</td><td>Сообщений</td><td>Создано</td><td>Последнее сообщение</td></tr>"; 
while($res=$cdb->fetch_array($query))
  {
 Print"<tr><td><a href=?type=read_top&&top=$res[top_id]> $res[top_name] </a></td><td>$res[name]</td><td>$res[replies]</td><td>$res[post_date]</td><td>$res[last_reply]</td></tr>"; 
  }
Print"</table>";

}

function read_top()
{
global $cdb;
print"<a href=?>К выбору тем || </a>";
print"<a href=?type=add_message&&top=".$_GET['top'].">Добавить сообщение</a>";

$s="SELECT * FROM topics WHERE top_id=".$_GET['top']."";
$query=$cdb->query($s);
$res=$cdb->fetch_array($query);

Print"<table border=1 width=95%>";
Print"<tr><td rowspan=2>Автор темы :<br>".$res['name']."</td><td colspan=2>Название темы: ".$res['top_name']."<br><br>Дата создания темы: ".$res['post_date']."</td></tr>
<tr ><td colspan=2>Сообщение: <br> ".$res['message']."</td></tr>"; 



$s="SELECT * FROM replies WHERE top_id=".$_GET['top']."";
$query=$cdb->query($s);

Print"<tr><td bgcolor=EEEEEE>Автор cообщения</td><td bgcolor=EEEEEE>Сообщение</td><td bgcolor=EEEEEE>Создано</td></tr>"; 
while($res=$cdb->fetch_array($query))
  {
 Print"<tr><td>$res[name]</td><td>$res[reply]</td><td>$res[reply_date]</td></tr>"; 
  }
Print"</table>";


}

function add_top()
{
print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
print"<table border=0 width=80% align=center>";
print"<tr><td><b>Ваша подпись</b><br><small>(не больше 150ти символов)";
print"<td align=right><input type=text name=name size=20>";

print"<tr><td><b>Название темы</b> <br><small>(не больше 150ти символов)";
print"<td align=right><input type=text name=top_name size=20>";


print"<tr><td height=20>";
print"<tr><td colspan=2><b>Сообщение</b>";
print"<tr><td colspan=2><textarea name=message style='width:100%; height:100px;'></textarea>";



print"<tr><td><input type=hidden name=type value=new_top size=20>";
print"<td align=right><input type=submit value='Готово' size=20>";
print"</table>";
print"</form>";
}

function add_message()
{
print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
print"<table border=0 width=80% align=center>";
print"<tr><td><b>Ваша подпись</b><br><small>(не больше 150ти символов)";
print"<td align=right><input type=text name=name size=20>";


print"<tr><td height=20>";
print"<tr><td colspan=2><b>Сообщение</b>";
print"<tr><td colspan=2><textarea name=message style='width:100%; height:100px;'></textarea>";



print"<tr><td><input type=hidden name=type value=new_message size=20>";
print"<input type=hidden name=top_id value=".$_GET['top']." size=20>";
print"<td align=right><input type=submit value='Готово' size=20>";
print"</table>";
print"</form>";
}





include "footer.php";
?>