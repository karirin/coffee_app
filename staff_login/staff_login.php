<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新規登録</title>
</head>
<body>
スタッフログイン<br />
 
<?php
  if(!empty($_POST)){
  require_once('staff_login_check.php');
}
?>

<?php if (isset($flash_messages)): ?>
      <?php foreach ((array)$flash_messages as $message): ?>
        <p class ="flash_message <?= $flash_type ?>"><?= $message?></p>
      <?php endforeach ?>
<?php endif ?>

<br />

<form method="post"action="#">
スタッフコード<br />
<input type="text" name="code"><br />
パスワード<br />
<input type="password" name="pass"><br />
<br />
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="ログイン">
</form>
</body>
</html>