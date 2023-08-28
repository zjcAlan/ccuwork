<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>登入頁面</title>
    </head>
    <body>

        <div style = "text-align:center";>
            <?php
                echo "<h1>".$_SESSION["email"]." 您好</h1>";
                echo "<a href='/LoginController/login_index'>登出</a>";
            ?>
            <!--<input type="button"; name=logout; style="background-color: green; font-size:20px; width:100px; height:40px;" value="登出" onclick="logout()"/><br>-->
        </div>

    </body>

</html>