<!DOCTYPE html>
<html lang="en">
    <head>
        <title>回执页面</title>
        <meta charset="UTF-8">
        <!--<link href="css/style.css" rel="stylesheet">-->
    </head>
    <body>
    <h1>已经收到你提交的信息</h1>
    <?php
        $sex = $_POST['sex'];
        $favouritelanguage = $_POST['favouritelanguage'];
        $year = $_POST['number'];
        $location = $_POST['location'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
        $to = 'chinnsyouki@qq.com';
        $subject = '一条新的评论'; 
        $msg = "性别是 $sex\n" .
               "最喜欢的语言是 $favouritelanguage\n" .
               "写了 $year 年程序\n" .
               "现在在 $location\n" .
               "邮箱是 $email\n" . 
               "想说的话是 $comment";

       mail($to, $subject, $msg, 'From:' . $email);

        echo '感谢你的提交。<br>';
        echo '你的性别是 ' . $sex . '<br>';
        echo '你最喜欢的编程语言是 ' . $favouritelanguage . '<br>';
        echo '你写了 ' . $year . '年程序' . '<br>';
        echo '你在' . $location . '<br>';
        echo '你的邮箱是' . $email . '<br>';
        echo '你想说 ' . $comment . '<br>';
    ?>
    </body>
</html>
