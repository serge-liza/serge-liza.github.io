<?php 
error_reporting(0);
session_start();
include "header.php";


if (isset($_POST['name'])){
$_SESSION['name']=$_POST['name'];
}

if (isset($_POST['sex'])){
$_SESSION['sex']=$_POST['sex'];
}

if (isset($_POST['age'])){
$_SESSION['age']=$_POST['age'];
}




if (!isset($_POST['end'])){
$end='begin';
}
else
{
$end=$_POST['end'];
}

if ($end=='end') {
update_opros();
}
else{
content_print(); 
}

function content_print(){

global $cdb;
$sex='man';

if (isset($_SESSION['sex']))

{
if ($_SESSION['sex']==0)
$sex='man';
if ($_SESSION['sex']==1)
$sex='woman';
}

$r=1;
$s="SELECT $sex FROM test1_vopr";
$query=$cdb->query($s);

print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
while($res=$cdb->fetch_array($query))
  {
print'<h3>'.$res[$sex].'</h3>';  
print'<input type="radio" name="d'.$r.'" value="-2" id="1"> <label for="1">категорически не согласна (не согласен) с тем, что он (она) делает и говорит в данной ситуации; активно выражаю несогласие и настаиваю на своем</label>'; 
 print'<br>';

print'<input type="radio" name="d'.$r.'" value="-1" id="2"> <label for="2">не согласна (не согласен) с тем, что он (она) делает и говорит в данной ситуации, демонстрирую свое недовольство, но избегаю обсуждени€</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="0" id="3"> <label for="3">ничего не предпринимаю, не высказываю свое отношение, жду дальнейшего развити€ событий</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="1" id="4"> <label for="3">в целом согласен(а) с тем, что говорит он (она), но не считаю необходимым выражать свое отношение</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="2" id="5"> <label for="3">полностью согласен(а) с тем, что он (она) делает и говорит в данной ситуации, активно поддерживаю его (ее) и одобр€ю</label>';
print'<br>';



print"_______________________________________________________________";
$r++;
  }
print'<input type="hidden" name=end value="end">';
print'<input type="submit" value="ќтветить">';

print'</form>';


}

function update_opros(){



$r=1;
$bloc1=0;
$bloc2=0;
$bloc3=0;
$bloc4=0;
$bloc5=0;
$bloc6=0;
$bloc7=0;
$bloc8=0;

$bloc1=($_POST['d1']+$_POST['d5']+$_POST['d8']+$_POST['d20'])/4;
$bloc2=($_POST['d4']+$_POST['d11']+$_POST['d16']+$_POST['d23'])/4;
$bloc3=($_POST['d6']+$_POST['d18']+$_POST['d21']+$_POST['d22'])/4;
$bloc4=($_POST['d2']+$_POST['d12']+$_POST['d27']+$_POST['d29'])/4;
$bloc5=($_POST['d3']+$_POST['d26']+$_POST['d28']+$_POST['d30'])/4;
$bloc6=($_POST['d9']+$_POST['d25']+$_POST['d31']+$_POST['d32'])/4;
$bloc7=($_POST['d13']+$_POST['d14']+$_POST['d17']+$_POST['d24'])/4;
$bloc8=($_POST['d7']+$_POST['d10']+$_POST['d15']+$_POST['d19'])/4;


$bloc1=round($bloc1,2);
$bloc2=round($bloc2,2);
$bloc3=round($bloc3,2);
$bloc4=round($bloc4,2);
$bloc5=round($bloc5,2);
$bloc6=round($bloc6,2);
$bloc7=round($bloc7,2);
$bloc8=round($bloc8,2);

 
print "<br>";
print"<table border=0>";
print"<tr><td>ѕроблемы отношений с родственниками и друзь€ми</td><td>$bloc1</td></tr>";
print"<tr><td>¬опросы, св€занные с воспитанием детей</td><td>$bloc2</td></tr>";
print"<tr><td>ѕро€вление стремлени€ к автономии</td><td>$bloc3</td></tr>";
print"<tr><td>Ќарушение ролевых ожиданий</td><td>$bloc4</td></tr>";
print"<tr><td>–ассогласование норм поведени€</td><td>$bloc5</td></tr>";
print"<tr><td>ѕро€вление доминировани€ одним из супругов</td><td>$bloc6</td></tr>";
print"<tr><td>ѕро€вление ревности</td><td>$bloc7</td></tr>";
print"<tr><td>–асхождени€ в отношении к деньгам</td><td>$bloc8</td></tr>";
print"</table>";

print "«начени€ индексов мен€ютс€ от -2 до 2. ќтрицательное значение индекса говорит о негативной реакции респондента в конфликтных ситуаци€х, положительные Ц о позитивных реакци€х. «начени€, близкие к 1 (или к -1) подчеркивают пассивный характер поведени€ при семейных недоразумени€х, а близкие к 2 (или к -2) говор€т об активной позиции в данной ситуации. ";

print"<a href=tests.php><br>Ќа главную</a><br>";
 
 
global $cdb;
 
 
 $day = date("d");
$Month = date("m");
$Year = date( "Y" );
$hour = date("H");
$Min = date("i");
$data_test="$Year$Month$day";

$name='noname';
$sex=0;
$age=0;

if (isset($_SESSION['name']))
$name=$_SESSION['name'];


if (isset($_SESSION['sex']))
$sex=$_SESSION['sex'];


if (isset($_SESSION['age']))
$age=$_SESSION['age'];


if ($name!='noname'){
$s="INSERT INTO `test1_otv` (`date`,`name`,`age`,`sex`,`bloc1`,`bloc2`,`bloc3`,`bloc4`,`bloc5`,`bloc6`,`bloc7`,`bloc8`) VALUES ('$data_test','$name','$age','$sex','$bloc1','$bloc2','$bloc3','$bloc4','$bloc5','$bloc6','$bloc7','$bloc8');";
$sort=@mysql_query($s) or die ("Ќе внесены данные");
}
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 
 
 

}




include "footer.php";
?>