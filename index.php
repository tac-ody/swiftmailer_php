<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>メール送信</title>
  <link rel="stylesheet" href="index.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>

<body>
 <div>
 <form action="send_result.php" method="POST">
    <input type="email" id="From" name="From" placeholder="From" required>
    <input type="email" id="To" name="To" placeholder="To ※入力必須" required>
    <!-- <input type="email" id="Cc" name="Cc" placeholder="Cc"> -->
    <!-- <input type="email" id="Bcc" name="Bcc" placeholder="Bcc"> -->
    <input type="text" id="Subject" name="Subject" placeholder="件名 ※入力必須" required>
    <textarea id="Body" name="Body" placeholder="本文 ※入力必須" required></textarea>
    <input type="text" id="Attach" name="Attach" placeholder="添付ファイル">
    <input type="submit" id="send_button" value="送信">
  </form>
 </div>

</body>
</html>