<?php
function is_hhvm() {
return defined('HHVM_VERSION');
}

if (is_hhvm()) {
 echo "Hip Hop working! Version: ";
 echo HHVM_VERSION;
 echo nl2br("\n======================================");
}


interface FibonacciInterface{
  public static function fibonacci();
}

class Fibonacci implements FibonacciInterface{
  private $i = 0;

  public function __construct() {

  }

  public static function fibonacci($n = 30) {
    if($n < 2){
      return 1;
    }else{
      return self::fibonacci($n - 1) + self::fibonacci($n - 2);
    }
  }
}

if(!empty($_GET['q'])){
  $start = microtime(true);
  echo nl2br("\n\n Start: $start milliseconds \n");
  echo nl2br("\n");
  echo Fibonacci::fibonacci($_GET['q']). " function calls";
  echo nl2br("\n");
  $finish = microtime(true);
  echo nl2br("\nFinish: $finish milliseconds \n");
  echo nl2br("\n");
  echo "Time elapsed: ". ($finish - $start). " secs";
}