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
$s="SELECT * FROM test4_vopr";
$query=$cdb->query($s);

print"<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>";
while($res=$cdb->fetch_array($query))
  {
print'<h3>'.$res['ques'].'</h3>';  
print'<input type="radio" name="d'.$r.'" value="1" id="1"> <label for="1">'.$res['var1'].'</label>'; 
 print'<br>';

print'<input type="radio" name="d'.$r.'" value="2" id="2"> <label for="2">'.$res['var2'].'</label>';
print'<br>';

print'<input type="radio" name="d'.$r.'" value="3" id="3"> <label for="3">'.$res['var3'].'</label>';
print'<br>';

print'<input type="hidden" name="key'.$r.'" value="'.$res['key'].'">';

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
while ($r<25)
{

if ( (isset($_POST["d$r"])) and (isset($_POST["d$r"]))  ){

if ($_POST["d$r"]==$_POST["key$r"])
$ball=$ball+2;

if ($_POST["d$r"]==2)
$ball++;

}
$r++;
}
print "Набрали баллов $ball <br>";

if ($ball<17)
print "0-16 баллов — полная неудовлетворенность";

if ($ball<23 and $ball>16)
print "17-22 балла — значительная неудовлетворенность";

if ($ball<27 and $ball>22)
print "23-26 баллов — скорее неудовлетворенность, чем удовлетворенность";

if ($ball<29 and $ball>26)
print "27-28 баллов — частичная удовлетворенность, частичная (примерно в равной степени) неудовлетворенность";

if ($ball<33 and $ball>28)
print "29-32 балла — скорее удовлетворенность, чем неудовлетворенность";

if ($ball<39 and $ball>32)
print "33-38 баллов — значительная удовлетворенность";

if ($ball>38)
print "39-48 баллов — практически полная удовлетворенность";
 
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
$s="INSERT INTO `test4_otv` (`date`,`name`,`age`,`sex`,`ball`) VALUES ('$data_test','$name','$age','$sex','$ball');";
$sort=@mysql_query($s) or die ("Не внесены данные");
}
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>