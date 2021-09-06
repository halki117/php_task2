<?php 

$fizz_num = $_POST['fizz_num'];

$buzz_num = $_POST['buzz_num'];

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

  <p>【出力】</p>
  <?php 
  if( $fizz_num !== 0 && $buzz_num !==0 && ctype_digit($fizz_num) && ctype_digit($buzz_num)){
    for ( $i = 1 ; $i < 100; $i++) {
    
      if (($i % $fizz_num === 0) && ($i % $buzz_num === 0)) {
          echo 'FizzBuzz'."\t".$i."<br />";
      } elseif ($i % $fizz_num === 0) {
          echo 'Fizz'."\t".$i."<br />";
      } elseif ($i % $buzz_num === 0) {
          echo 'Buzz'."\t".$i."<br />";
      }
    }
  } else {
    echo "整数値を入力して下さい。";
  }
  ?>

</body>
</html>