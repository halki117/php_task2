<?php 


$fizz_num = (int)$_POST['fizz_num'];

$buzz_num = (int)$_POST['buzz_num'];

var_dump($fizz_num);
var_dump($buzz_num);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>FizzBuzz問題</h1>

  <form method="post">
    <p>FizzNum<input type="text" name="fizz_num"></p>
    <p>BuzzNum<input type="text" name="buzz_num"></p>
    <p><input type="submit" name="submit"></p>
    <p><input type="hidden" value="token"></p>
  </form>

  <?php
    $i = 1;
    while( $fizz_num < 100 && $buzz_num < 100){ ?>
      <?php  if( $fizz_num % (int)$_POST['buzz_num'] === 0 ){ ?>
        <p><?php echo "fizzbuzz"."\t".$fizz_num?></p>
      <?php } else { ?>
      <p>fizz<?php echo $fizz_num ; ?></p>
      <?php } ?>
      <?php  if($buzz_num % (int)$_POST['fizz_num'] === 0 ){ ?>
        <p><?php echo "fizzbuzz"."\t".$buzz_num?></p>
      <?php } else { ?>
      <p>buzz<?php echo $buzz_num ; ?></p>
      <?php } ?>

      <?php
      $i++; 
      $fizz_num =  (int)$_POST['fizz_num'] * $i ;
      $buzz_num =  (int)$_POST['buzz_num'] * $i ;
      ?>
  <?php }?>
  
</body>
</html>