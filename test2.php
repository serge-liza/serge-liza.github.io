<?php 
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
$r=1;
$s="SELECT * FROM test2_vopr";
$query=$cdb->query($s);

print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
while($res=$cdb->fetch_array($query))
  {
print'<h3>'.$res['ques'].'</h3>';  
print'<input type="radio" name="d'.$r.'" value="'.$res['v1'].'" id="1"> <label for="1">'.$res['var1'].'</label>'; 
 print'<br>';

print'<input type="radio" name="d'.$r.'" value="'.$res['v2'].'" id="2"> <label for="2">'.$res['var2'].'</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="'.$res['v3'].'" id="3"> <label for="3">'.$res['var3'].'</label>';
print'<br>';


print"_______________________________________________________________";
$r++;
  }
print'<input type="hidden" name=end value="end">';
print'<input type="submit" value="Ответить">';

print'</form>';


}

function update_opros(){

$r=1;
$ball=0;
while ($r<11)
{

if (isset($_POST["d$r"])){
$ball=$ball+$_POST["d$r"];
}
$r++;
}
print "Вы набрали $ball баллов  <br>";

print "
Оба супруга должны сложить вместе те очки, которые у них набраны...<br>

От 0 до 10 очков: в вашей семье принято рассказывать о своих проблемах. Каждый из вас делится тем, что его тяготит, и партнер его внимательно выслушивает. У вас нет потребности делиться с кем то другим (друзьями, родственниками), потому что дома вас понимают лучше.<br>
 
От 11 до 29: нельзя сказать, что в вашей семье совершенно не делятся друг с другом своими проблемами. Но есть ряд вещей, о которых вам нужно и можно было бы говорить. Но вот этого не происходит. Существуют вопросы, о которых вы не говорите, и вы оба не решаетесь обсуждать их. А это ведет к отчуждению, потому что каждый чувствует необходимость иметь рядом человека, который бы его понимал. И такого человека ищут...   <br>


";
 
print "<br>";



print"<a href=tests.php>На главную</a><br>";
 
 
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
$s="INSERT INTO `test2_otv` (`date`,`name`,`age`,`sex`,`ball`) VALUES ('$data_test','$name','$age','$sex','$ball');";
$sort=@mysql_query($s) or die ("Не внесены данные");
}
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>