<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = 'maru531.tokyo@gmail.com';
$title = $_POST['title'];
$content = $_POST['content'];

if(mb_send_mail($to, $title, $content)){
echo "メールを送信しました";
} else {
echo "メールの送信に失敗しました";
}
?>
</body>
</html>