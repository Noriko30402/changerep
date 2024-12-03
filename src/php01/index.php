<?php

for($fizz =mt_rand(1, 50);$fizz <3; );
if($fizz %3 ===0){  
  echo 'Fizz';
} elseif($fizz %5 ===0){  
  echo 'Buzz';
}elseif($fizz %3 ===0  && $fizz%5 ===0){  
  echo 'FizzBuzz';
  }else echo $fizz;
  ?>

