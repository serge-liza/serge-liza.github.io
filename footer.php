
                                              
                                         </DIV>
                                         <DIV id=sidebar_bottom1></DIV>
                                         </DIV>
                                  </td> 
                           </tr>
                           <tr><td>
                                <form method="POST" action="golos.php">
                                                  <DIV id=sidebar>
	                                          <DIV id=sidebar_top></DIV>
	                                          <DIV id=sidebar_body> 


<?php 
if (!isset($_SESSION['golos']))
{
print <<<END
<UL>
  <table border="0">
    <tr> 
      <td> 
          Ваше мнение о сайте? 
      </td>
    </tr>
    <tr>
      <td><input type="radio" name="answer" value="1">Отлично!</td></tr>
    <tr><td><input type="radio" name="answer" value="2">Нормально </td></tr>
    <tr><td><input type="radio" name="answer" value="3">Мне все равно </td></tr>
    <tr><td><input type="radio" name="answer" value="4">Это что-то страшное!</td></tr>
    <tr><td><input type="Submit" name="vote" value="Отправить"></td></tr>
</table>
</UL>
END;
} 

if (isset($_SESSION['golos']))
{
global $cdb;

$s="SELECT * FROM opros WHERE id=1";
$query=$cdb->query($s);
$res=$cdb->fetch_row($query);

$sum=$res[1]+$res[2]+$res[3]+$res[4];
$good=round($res[1]/$sum*100);
$norm=round($res[2]/$sum*100);
$indiff=round($res[3]/$sum*100);
$bad=round($res[4]/$sum*100);

print"<UL><table border=\"0\">";
print"<tr><td>Результаты голосования: </td></tr>";
print"<tr><td>Отлично! : $good %</td></tr>";
print" <tr><td>Нормально : $norm % </td></tr>";
print"  <tr><td>Мне все равно : $indiff % </td></tr>";
print" <tr><td>Это что-то страшное! : $bad % </td></tr>";
print" <tr><td></td></tr>";
print" <tr><td>Всего проголосовало : $sum  чел. </td></tr>";
print"</table></UL>";

} 
?> 

                                        </DIV>
                                        <DIV id=sidebar_bottom></DIV>
                                        </DIV>  
                                  </form>
                              </td></tr>


                                     </table>
 
 <!-- низ --> 
<DIV style="WIDTH: 100%; HEIGHT: 16px" id=content>
<DIV id=content_bottom>
<DIV id=content_bottom_left></DIV>
<DIV id=content_bottom_right></DIV>
</DIV></DIV>
 
 
</td> 
</tr>
</table>
<BR><BR>
<hr size=1 color=grey>
 
 
 
 <TABLE class="main_down" cellspacing="0" cellpadding="0" border="0">
 <TR>
 <TD>
 <TABLE class="hide" cellspacing="0" cellpadding="0" border="0">
 <TR>
 <TD width="100%" valign="top">
 
 
<Font color=grey>
 При перепечатке материалов ссылка на <A href="./index.html">сайт </A> обязательна.<br>
 Copyright &copy; - 2010 Aksenova Olga<br> </font>
 
 
 
</BODY> </HTML>