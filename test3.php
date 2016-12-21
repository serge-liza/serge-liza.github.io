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

print "
<TABLE BORDER=0 WIDTH=\"100%\" cellpadding=\"0\" cellspacing=\"0\" align=\"left\">
					<form action=".$_SERVER['PHP_SELF']." method=post enctype=multipart/form-data>
					
					
					<TR>
							<TD bgcolor=\"#FFFFFF\"><br><h5>Насколько важным является для Вас каждое из следующих утверждений? <br>(1 - совершенно не важно, 10 - исключительно важно)</h5><br></TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 1. Строить свою карьеру в пределах конкретной профессиональной сферы<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 2. Осуществлять наблюдение и контроль над людьми, влиять на них на всех уровнях управления<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 3. Иметь возможность делать все по-своему, не будучи стесненным правилами какой-либо организации<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 4. Иметь постоянное место работы с гарантированным окладом и социальной защищенностью<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 5. Употреблять свое умение общаться, помогать другим<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 6. Работать над проблемами, которые представляются почти не решаемыми<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 7. Вести такой образ жизни, чтобы интересы семьи и карьеры были уравновешены<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 8. Создать и построить нечто, что будет идеей, всецело мне принадлежащей<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 9. Достичь высокого профессионализма в своей специальности, чтобы получить возможность занять более высокую должность, не обязательно связанную с настоящей сферой моей деятельности<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 10. Быть первым руководителем в организации<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 11. Иметь работу, не связанную с режимом или другими организационными ограничениями<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 12. Работать в организации, которая обеспечит мне стабильность на длительный период времени<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 13. Употреблять свои умения и способности на то, чтобы сделать мир лучше<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 14. Соревноваться с другими и побеждать<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 15. Строить карьеру, которая позволит мне не изменять моему образу жизни<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 16. Создать новое коммерческое предприятие<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 17. Посвятить всю жизнь избранной профессии<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 18. Занять высокую руководящую должность<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 19. Иметь работу, которая предоставляет максимум свободы и автономии в выборе характера занятий, времени выполнения и т.д.<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[3]\"value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[3]\"value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<br> 20. Оставаться на одном месте жительства, чем переезжать в связи с повышением<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"smg[1]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[1]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<br> 21. Иметь возможность использовать свои умения и талант для служения важной цели<br><br>
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"><br><h5>Насколько Вы согласны с каждым из следующих утверждений?<br> (1 – совершенно не согласен, 10 – полностью согласен)</h5><br></TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>22. Единственная действительная цель моей карьеры - находить и решать трудные проблемы, независимо от того, в какой области они возникли<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>23. Я всегда стремлюсь уделять одинаковое внимание моей семье и моей карьере<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>24. Я всегда нахожусь в поиске идей, которые дадут мне возможность начать и построить свое собственное дело<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>25. Я соглашусь на руководящую должность только в том случае, если она находится в сфере моей профессиональной компетенции<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>26. Я хотел бы достичь такого положения в организации, которое давало бы возможность наблюдать за работой других людей и интегрировать их деятельность<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>27. В моей профессиональной деятельности я более всего забочусь о своей свободе и автономии<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>28. Для меня важнее остаться на нынешнем месте жительства, чем получить повышение или новую работу на новой местности<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"smg[2]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[2]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>29. Я всегда искал работу, на которой мог бы приносить пользу другим<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>30. Соревнование и выигрыш - это наиболее важные стороны моей карьеры<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>31. Карьера имеет смысл только в том случае, если она позволяет вести жизнь, которая мне нравится<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>32. Предпринимательская деятельность составляет центральную часть моей карьеры<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[4]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[4]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>33. Я бы скорее ушел из организации, чем стал заниматься работой, не связанной с моей профессией<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"pk[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"pk[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>34. Я буду считать, что достиг успеха в карьере только тогда, когда стану руководителем высокого уровня в солидной организации<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"m[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"m[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>35. Я не хочу, чтобы меня стесняли рамки одной бизнес-организации<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"a[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"a[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>36. Я предпочел бы работать в организации, которая обеспечивает длительный контракт<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"sr[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"sr[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>37. Я хотел бы посвятить свою карьеру достижению важной и полезной цели<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"s[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"s[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>38. Я чувствую себя преуспевающим только тогда, когда я постоянно вовлечен в решение трудных проблем или в ситуацию соревнования<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"v[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"v[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>39. Выбрать и поддержать определенный образ жизни важнее, чем добиваться успеха в карьере<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"i[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"i[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\"  >
								
								<br>40. Я всегда хотел основать и построить свой собственный бизнес<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#FFFFFF\" >
								<input type=\"Radio\" name=\"p[5]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"p[5]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\"  >
								
								<br>41. Я предпочитаю работу, которая не связана с командировками<br><br>
								
							</TD>
						</TR>
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
								<input type=\"Radio\" name=\"smg[3]\" value=\"1\">1</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"2\">2</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"3\">3</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"4\">4</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"5\">5</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"6\">6</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"7\">7</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"8\">8</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"9\">9</option>
								<input type=\"Radio\" name=\"smg[3]\" value=\"10\">10</option>
								
							</TD>
						</TR>
						
						<TR>
							<TD bgcolor=\"#E9E9E9\" >
			<input type=\"Hidden\" name=\"end\" value=\"end\">
			<input type=\"submit\" value=\"Готово\">
							</TD>
						</TR>
					</TABLE>
					<br><br>
			
		</form
";



}

function update_opros(){

$pk=$_POST['pk'];
$m=$_POST['m'];
$a=$_POST['a'];
$sr=$_POST['sr'];
$smg=$_POST['smg'];
$s=$_POST['s'];
$v=$_POST['v'];
$i=$_POST['i'];
$p=$_POST['p'];

$pk=array_sum($pk)/count($pk);
$m=array_sum($m)/count($m);
$a=array_sum($a)/count($a);
$sr=array_sum($sr)/count($sr);
$smg=array_sum($smg)/count($smg);
$s=array_sum($s)/count($s);
$v=array_sum($v)/count($v);
$i=array_sum($i)/count($i);
$p=array_sum($p)/count($p);



$pk=round($pk,2);
$m=round($m,2);
$a=round($a,2);
$sr=round($sr,2);
$smg=round($smg,2);
$s=round($s,2);
$v=round($v,2);
$i=round($i,2);
$p=round($p,2);



print"<br>Профессиональная компетентность $pk";
if($pk>6) 
print"- ярко выраженная ориентация";

print"<br>Менеджмент $m";
if($m>6) 
print"- ярко выраженная ориентация";

print"<br>Автономия (независимость) $a";
if($a>6) 
print"- ярко выраженная ориентация";

print"<br>Стабильность работы $sr";
if($sr>6) 
print"- ярко выраженная ориентация";

print"<br>Стабильность места жительства $smg";
if($smg>6) 
print"- ярко выраженная ориентация";

print"<br>Служение $s";
if($s>6) 
print"- ярко выраженная ориентация";

print"<br>Вызов $v";
if($v>6) 
print"- ярко выраженная ориентация";

print"<br>Интеграция стилей жизни $i";
if($i>6) 
print"- ярко выраженная ориентация";

print"<br>Предпринимательство $p";
if($p>6) 
print"- ярко выраженная ориентация";



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
$s="INSERT INTO `test3_otv` (`date`,`name`,`age`,`sex`,`pk`,`m`,`a`,`sr`,`smg`,`s`,`v`,`i`,`p`) VALUES ('$data_test','$name','$age','$sex','$pk','$m','$a','$sr','$smg','$s','$v','$i','$p');";
$sort=@mysql_query($s) or die ("Не внесены данные");
} 
unset($_SESSION['age']); 
unset($_SESSION['sex']); 
unset($_SESSION['name']);
 
 
 
 
 
 
 

}




include "footer.php";
?>