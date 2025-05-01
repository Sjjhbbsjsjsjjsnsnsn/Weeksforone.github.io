<?php
$name = htmlspecialchars($_POST['name']);
$comment = htmlspecialchars($_POST['comment']);
file_put_contents("comments.txt", "$name: $comment\n", FILE_APPEND);
echo "댓글이 등록되었습니다.<br>";
readfile("comments.txt");
?>