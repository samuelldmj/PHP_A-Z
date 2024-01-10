<?php  
//control structure (if, else, elseif, else if)
//control structures allows you to group multiple statement and allows you to control the flow of the code execution

//if
$score = 70;
// if ($score >= 70){
//     //echo "A"; //output: A
//     //we can have a nested ifs
//     if($score == 100){
//         echo "A++" . "<br>";
//     }
// }
// //if it is a single statement, you can exclude the curly braces
// if ($score >= 70)
    //echo "A"; //output: A

//else
//when the condition fails, we need to introduce the else case
// if ($score >= 70){
//     //echo "A"; //output: A
// }else{
//     echo "F";
// }

//elseif
//we can use the else if too
//from the above it would be unfair to get F because you didn't score 70, then we need multiple conditions to capture various scores
// // if ($score >= 70){
// //     echo "A"; //output: A
// // }elseif($score >= 60 && $score < 70){
// //     echo "B";
// // }elseif($score >= 50 && $score < 60){
// //     echo "C"; 
// // }elseif($score >= 40 && $score < 50){
// //     echo "D"; 
// // }else {
// //     echo "You are a failure!";
// }
?>


<!-- //ALTERNATIVE SYNTAX -->
<html>
<head>
</head>
<body>

    
<?php    $score = 70  ?>
<?php if ($score >= 70):   ?>
    <strong>A</strong> //output: A 
    <!-- if you use the else if this way you will get an error, use elseif instead -->
<?php elseif ($score >= 60 && $score < 70): ?>
         <strong>B</strong>
<?php elseif($score >= 50 && $score < 60):  ?>
    <strong>C</strong>
<?php elseif($score >= 40 && $score < 50): ?>
    <strong>D</strong>
    <?php else: ?>
     <strong>You are a failure!</strong>
<?php endif ?>
</body>
</html>




















