<?php
$name = htmlspecialchars($_POST['name']);
$comment = htmlspecialchars($_POST['comment']);
file_put_contents("comments.txt", "$name: $comment\n", FILE_APPEND);
echo "����� ��ϵǾ����ϴ�.<br>";
readfile("comments.txt");
?>