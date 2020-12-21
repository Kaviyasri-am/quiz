<!Doctype html>
<html>
<head>
</head>
<body>
<h1>Result <h1>
<?php
if($_POST['submit'])
{
$answer1= $_POST['q1'];
$answer2= $_POST['question-2-answers'];
$answer3= $_POST['question-3-answers'];
$answer4= $_POST['question-4-answers'];
$answer5= $_POST['question-5-answers'];
$answer6= $_POST['question-6-answers'];
$answer7= $_POST['question-7-answers'];
$answer8= $_POST['question-8-answers'];
$answer9= $_POST['question-9-answers'];
$answer10= $_POST['question-10-answers'];
}
if{
$total=0;
if($answer1=="B") {$total++;}
if($answer2=="D") {$total++;}
if($answer3=="B") {$total++;}
if($answer4=="C") {$total++;}
if($answer5=="C") {$total++;}
if($answer6=="A") {$total++;}
if($answer7=="C") {$total++;}
if($answer8=="C") {$total++;}
if($answer9=="C") {$total++;}
if($answer10=="C") {$total++;}
$total=$total/10;
}
if($total<5)
{
echo'<h2> Oops... Failed</h2>';
}
else
{
echo'<h2>Pass...'$total.'%.</h2>';
?>
</div>
</body>
</html>