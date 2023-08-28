<?php include("./asset/template/header.php"); ?>

    <div class="col-8 p-3 h-100 marpad-color">
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>登入頁面</title>
            </head>
            
            <body>
                <div style = "text-align:center";>
                    <h1>login_page 登入頁面</h1><br>
                    <h2>請輸入帳號密碼</h2><br>
                    <form action="/LoginController/login" enctype="multipart/form-data" method="post">
                        <label style="font-size:30px; color: black;">帳號(gmail):
                            <input type="email" name="email" id="email" style="font-size:25px; width:400px; height:50px;" maxlength="30" pattern=".+@gmail.com" placeholder="example@gmail.com" required><br><br>
                        </label><br>
                        <label style="font-size:30px; color: black;">密碼:
                            <input type="password" name="password" id="password" style="font-size:25px; width:300px; height:50px;" required>
                            <i id="checkEye" class="fas fa-eye"></i><br><br>
                        </label><br>
                        <input type="submit"; style="font-size:25px; width:200px; height:50px;" value="登入";/><br><br>
                    </form>
                    <a href="password_index">忘記密碼?</a><br><!--跳轉至忘記密碼介面-->
                    <hr>
                    <input type="button"; name=register; style="background-color: green; font-size:20px; width:100px; height:40px;" value="註冊" onclick="register()"/>
                    <br>
                </div>
            </body>
        </html>
        
        <script>
            //讓密碼顯示的功能
            var checkEye = document.getElementById("checkEye");
            var floatingPassword =  document.getElementById("password");
            checkEye.addEventListener("click", function(e){
                if(e.target.classList.contains('fa-eye')){
            
                e.target.classList.remove('fa-eye');
                e.target.classList.add('fa-eye-slash');
                floatingPassword.setAttribute('type','text')
            }else{
                floatingPassword.setAttribute('type','password');
                e.target.classList.remove('fa-eye-slash');
                e.target.classList.add('fa-eye')
            }
            });
        
        </script>
    </div>

<?php include("./asset/template/footer.php"); ?>