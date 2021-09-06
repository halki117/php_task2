<?php 

session_start();

// リロードした際は、新しくトークンが発行されフォームから送られてきたトークンと異なる様になる。
if ($_POST["token"] == $_SESSION["token"])
{
  $fizz_num = $_POST['fizz_num'];

  $buzz_num = $_POST['buzz_num'];
}

$_SESSION['token'] = mt_rand();

$token = $_SESSION['token'];

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
    <input type="hidden" name="token" value="<?php echo $token; ?>">
  </form>

  <p>【出力】</p>
  <?php
  if($_POST['submit']){

    // 値が 0（空文字）、文字 で送信された場合は”整数値を入力してください”と表示する。
    // ctype_digit関数は文字型の値が数字であるかを判定する。数字であればtrueを返す（しかし例えば 1.5 や 1a など数字意外に小数点や文字が含まれていた場合は該当しないのでfalseを返す）
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

  }
  
  ?>

</body>
</html>