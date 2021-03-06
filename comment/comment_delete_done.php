<?php
session_start();
@session_regenerate_id(true);

require_once('../db_connect.php');
require_once('../function.php');

if(isset($_SESSION['flash'])){
    $flash_messages = $_SESSION['flash']['message'];
    $flash_type = $_SESSION['flash']['type'];
    }
    unset($_SESSION['flash']);
  
  $error_messages = array();
?>

<body>
    <?php

    try {

        $comment_id = $_POST['id'];
        $comment_image_name = $_POST['image_name'];
        $user_id = $_POST['user_id'];
        $post_id = $_POST['post_id'];

        $dbh = dbConnect();
        $sql = 'DELETE FROM comment WHERE id OR comment_id=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $comment_id;
        $stmt->execute($data);

        $dbh = null;

        if ($comment_image_name != '') {
            unlink('./image/' . $comment_image_name);
        }
    } catch (Exception $e) {
        print 'ただいま障害により大変ご迷惑をお掛けしております。';
        exit();
    }

    set_flash('sucsess', 'コメントを削除しました');
    reload();

    ?>

</body>
<?php require_once('../footer.php'); ?>

</html>