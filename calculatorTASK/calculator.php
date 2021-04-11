<?php

/*//this program is to output hello world to the browser
//Task given by ZURI 
//author by AJIBOYE TOYIN THEOPHILUS

$greetings="HELLO WORLD";
echo ($greetings.'<br/>');

//////programs to perform basic calculation
 class Number {
    public $num1=6;
    public $num2=5;
    public $answer;

///////////////this class perform addition
     function add(){
    $this->answer = $this->num1 + $this->num2;
     return $this->answer;
     }
// ///////////////addition function ends here

///////////////this class perform subtraction
function sub(){
    $this->answer = $this->num1 - $this->num2;
     return $this->answer;
     }
// //////////////subtraction function ends here

///////////////this class perform multipliction
function mul(){
    $this->answer = $this->num1 * $this->num2;
     return $this->answer;
     }
// ///////////////multipliction function ends here

///////////////this class perform module
function module(){
    $this->answer = $this->num1 % $this->num2;
     return $this->answer;
     }
// ///////////////module function ends here

function divide(){
     $this->answer = $this->num1 / $this->num2;
     return $this->answer;
}

 }
 ///creating object of class Number;
 $calculation=new Number();
echo ("Simple Calculation between two static number 6 and 5.<br/>");
echo( "6 + 5= ". $calculation->add().'<br/>');
echo( "6 - 5= ". $calculation->sub().'<br/>');
echo( "6 * 5= ". $calculation->mul().'<br/>');
echo( "6 % 5= ". $calculation->module().'<br/>');
echo( "6 / 5= ". $calculation->divide().'<br/>');
*/
?>
<?php
//basic simple calculator
$number1=7;
$number2=6;
$answer;

echo ("7+6= ".$answer=$number1 + $number2."</br>");
echo ("7*6= ".$answer=$number1 * $number2."</br>");
echo ("7/6= ".$answer=$number1 / $number2."</br>");
echo ("7-6= ".$answer=$number1 - $number2."</br>");
echo ("7%6 = ".$answer=$number1 % $number2."</br>");

?>