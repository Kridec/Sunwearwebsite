<?php
    $correct_answers = array($svar2,$svar6, $svar9);
for ($i = 0; $i < $number_of_questions; $i++)
{
   $s_var = 's'.$i;
   if ($_POST[$ans_var] == $correct_answers[$i])
   {
      $score++;
   }
}
//GIK PÅ DET CEDRIK https://stackoverflow.com/questions/10480676/php-quiz-displaying-number-of-correct-and-number-of-wrong-answers
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

