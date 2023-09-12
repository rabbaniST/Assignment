<?php

$marks = 61;

if($marks >= 80 && $marks <= 100){
    echo "You got A+.";
}else if($marks >= 70 && $marks < 80){
    echo "You got A";
}else if($marks >= 60 && $marks < 70){
    echo "You got A-.";
}else if($marks >=50 && $marks < 60){
    echo "You got B.";
}else if($marks >=40 && $marks < 50 ){
    echo "You got C.";
}else if($marks >= 33 && $marks < 40){
    echo "You got D.";
}else if($marks <33){
    echo "You are falied in the exam.";
}else{
    echo "Invalid Number of Marks";
}


?>