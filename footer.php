
                                              
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
          ���� ������ � �����? 
      </td>
    </tr>
    <tr>
      <td><input type="radio" name="answer" value="1">�������!</td></tr>
    <tr><td><input type="radio" name="answer" value="2">��������� </td></tr>
    <tr><td><input type="radio" name="answer" value="3">��� ��� ����� </td></tr>
    <tr><td><input type="radio" name="answer" value="4">��� ���-�� ��������!</td></tr>
    <tr><td><input type="Submit" name="vote" value="���������"></td></tr>
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
print"<tr><td>���������� �����������: </td></tr>";
print"<tr><td>�������! : $good %</td></tr>";
print" <tr><td>��������� : $norm % </td></tr>";
print"  <tr><td>��� ��� ����� : $indiff % </td></tr>";
print" <tr><td>��� ���-�� ��������! : $bad % </td></tr>";
print" <tr><td></td></tr>";
print" <tr><td>����� ������������� : $sum  ���. </td></tr>";
print"</table></UL>";

} 
?> 

                                        </DIV>
                                        <DIV id=sidebar_bottom></DIV>
                                        </DIV>  
                                  </form>
                              </td></tr>


                                     </table>
 
 <!-- ��� --> 
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
 ��� ����������� ���������� ������ �� <A href="./index.html">���� </A> �����������.<br>
 Copyright &copy; - 2010 Aksenova Olga<br> </font>
 
 
 
</BODY> </HTML>