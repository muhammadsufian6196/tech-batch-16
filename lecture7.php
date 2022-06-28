<?php


$student1=array(1,"Numan","Ludhiana",28,"Male","33100-26286437-27");

// foreach ($student1 as $value) {
//     echo "$value";
//     echo "<br>";
// }
$student2=array(

                'seriol_no'=>2,
                'name'     => "Umer",
                'city'     => "Faislabad",
                'age'      => 26,
                'gender'   => "Male"


);
// foreach ($student2 as $key => $value) {
//     echo "$key : $value";
//     echo"<br>"; 
// }
$abc=array(
           'std1'=>array(

                'seriol_no'=>2,
                'name'     => "Umer",
                'city'     => "Faislabad",
                'age'      => 26,
                'gender'   => "Male"


),
          'std2'=> array(

                'seriol_no'=>4,
                'name'     => "Noman",
                'city'     => "Karachi",
                'age'      => 26,
                'gender'   => "Male"


),
           'std3'=>array(

                'seriol_no'=>5,
                'name'     => "Nadeem",
                'city'     => "Lahore",
                'age'      => 26,
                'gender'   => "Male"


)
        );

foreach ($abc as $key => $value) {
    foreach ($value as $property => $specifications) {
        echo "$key : $property : $specifications";
        echo "<br>";
    }
}

die();
function addfive(&$num){
    $num+=5;
}
$orignum=10;
addfive($orignum);
echo "The value of orignum is $orignum";





die();
function result($bio,$chem,$math,$urdu,$eng,$comp){
    $obtain_marks=$bio+$chem+$math+$urdu+$eng+$comp;
    echo "Your Total marks are $obtain_marks";
    $avg=$obtain_marks/6;
    echo "<br>";
    echo "Your average marks are $avg";
     echo "<br>";
    $total_marks=600;
    $percent= ($obtain_marks/$total_marks)*100;
    echo"Your percentage is $percent %";
}

result(90,70,40,86,98,35);





die();
function abc(){
    echo "I love Pakistan";
    echo "<br>";
    echo "Kashmir is the part of pakistan";
    echo "<br>";
}

abc();
abc();
abc();



die();
$d= date("D");
if($d=="Mon"){
    echo "Today is Monday";
}elseif($d="Tue"){
    echo "Today is Tuesday";
}
else{
    echo"Today is another day";
}



$marks=30;
if ($marks>90 AND $marks<=100) {
    echo"Your Grade is A";
}elseif ($marks>80 AND $marks<=90) {
    echo "Your Grade is B";
}elseif ($marks>70 AND $marks<=80) {
    echo "Your Grade is C";
}elseif ($marks>60 AND $marks<=70) {
    echo "Your Grade is D";
}elseif ($marks>50 AND $marks<=60) {
    echo "Your Grade is E";
}elseif ($marks>40 AND $marks<=50) {
    echo "Your Grade is F";
}else{
    echo "We dont Understand why dont study";
}





die();
$age=32;
if($age>20 AND $age<=30){
    echo"You Got the Job" ;
}else{
    echo "Alas You have been failed";
}






$x=10;
$y=20;

$x/=2;
$y-=5;

echo "The value of x is $x and y is $y";


 ?>