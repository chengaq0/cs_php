<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
    <!--创建form表单 用于向服务器提交数据，提交方式为post-->
    <form action="./server.php?ac=login" name="form1" method="post" >
        <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="username" placeholder="请输入用户名"></td>
            </tr>

            <tr>
                <td>密码：</td>
                <td><input type="password" name="password" placeholder="请输入密码"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交1"></td>
                <!--隐藏域，用于表单验证-->
                <td><input type="hidden" name="ac" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>


