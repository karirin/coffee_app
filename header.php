<?php
session_start();
session_regenerate_id(true);
if(isset($_SESSION['login'])==false)
{
    print'<a href="../staff_login/staff_login.html">ログイン</a>';
    print'<a href="../staff/staff_add.php">新規登録</a>';
}
else
{
    print'<a href="../staff/staff_list.php">ユーザー一覧</a>';
    print'<a href="../product/pro_list.php">投稿一覧</a>';
    print'<a href="staff_logout.php">ログアウト</a>';
}
?>