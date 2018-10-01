<?php
//access the global array called $_POST to get the values from the text fields
$score = 0;
//scoring
if($_POST["q1"]=="C++")
{
	$score++;
}
if($_POST["q2"]=="VHDL")
{
	$score++;
}
if($_POST["q3"]=="Haskell")
{
	$score++;
}
if($_POST["q4"]=="Fortran")
{
	$score++;
}
if($_POST["q5"]=="3-Operand RISC")
{
	$score++;
}


//output
echo "Score: <b>".$score."</b> out of 5<br>";
echo "Percent: <b>".(($score/5)*100)."%</b><br><br>";

echo "Question 1: Which language is strongly typed?<br>You answered:".$_POST["q1"]."<br>Correct answer: C++<br>";
echo "Question 2: Which language uses -- for comments?<br>You answered:".$_POST["q2"]."<br>Correct answer: VHDL<br>";
echo "Question 3: Which language is considered purely functional?<br>You answered:".$_POST["q3"]."<br>Correct answer: Haskell<br>";
echo "Question 4: Which language is the oldest?<br>You answered:".$_POST["q4"]."<br>Correct answer: Fortran<br>";
echo "Question 5: What type of Instruction Set Architecture (ISA) describes MIPS?<br>You answered:".$_POST["q5"]."<br>Correct answer: 3-Operand RISC<br>";

?>
