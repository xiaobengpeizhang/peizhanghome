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

        $dbc = mysqli_connect('localhost', 'root', '', 'peizhanghomedatabase')
                or die('连接失败');

        /* 中文 数据库乱码?
        $query = "INSERT INTO peizhanghome_comments (sex, how_long, " .
                 "favourite_language, location, email, comments) " .
                 "VALUES ('女', '1', 'c', '北京', 'test@qq.com', '八错呢')"; 
        $result = mysqli_query($dbc, $query)
                  or die('查询失败');
        */

        // $query1 = "SET NAMES UTF8";
        $dbc->query("SET NAMES UTF8");

        // $result = mysqli_query($dbc, $query1)
                //   or die('查询失败');

        $query2 = "INSERT INTO peizhanghome_comments (sex, how_long, favourite_language, " .
                 "location, email, comments) " .
                 "VALUES ('$sex', '$year', '$favouritelanguage', '$location', '$email', '$comment')"; 

        $result = mysqli_query($dbc, $query2)
                  or die('查询失败');

        mysqli_close($dbc);

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