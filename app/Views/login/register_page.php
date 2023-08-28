<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>註冊頁面</title>
        <!-- <script src="../asset/JS/login_script.js"> </script> -->
    </head>
    <!-- <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"> -->
    <body>

        <div style = "text-align:center";>
            <h1>register_page 註冊頁面</h1><br>
            <h2>請輸入個人資料</h2><br>

            <form class="" action="/LoginController/store" enctype="mutipart/form-data" method="post">

                <label style="font-size:30px;">中文姓名:
                    <input type="text" name="name" id="name" style="font-size:25px; width:300px; height:50px;" maxlength="8" oninput="value=value.replace(/[^\u4e00-\u9fa5]/g,'')" placeholder="王大甲" required><br>
                </label><br><br>
                <label style="font-size:30px;">gmail信箱:
                    <input type="email" name="email" id="email" style="font-size:25px; width:400px; height:50px;" maxlength="30" pattern=".+@gmail.com" placeholder="example@gmail.com" required><br>
                </label><br><br>
                <label style="font-size:30px;">身分證字號:
                    <input type="text" name="identity_number" id="identity_number" style="font-size:25px; width:300px; height:50px;" maxlength="10" oninput="value=value.replace(/[^A-Z0-9]/g,'')" placeholder="O123456789" required><br>
                </label><br><br>
                <label style="font-size:30px;">手機號碼:
                    <input type="tel" name="phone" id="phone" style="font-size:25px; width:350px; height:50px;" maxlength="10" oninput="value=value.replace(/[^\d]/g,'')" placeholder="0912312345" required><br>
                </label><br><br>
                <label style="font-size:30px;">戶籍地住址:
                    <input type="text" name="address" id="address" style="font-size:25px; width:600px; height:50px;" placeholder="XX市X區XX路XX巷XX弄XX號" required><br>
                </label><br><br>
                <label style="font-size:30px;">密碼:
                    <input type="password" name="password" id="pw" style="font-size:25px; width:300px; height:50px;" required>
                </label>
                <i id="checkEye" class="fas fa-eye"></i><br><br>
                <label style="font-size:30px;">確認密碼:
                    <input type="password" name="pwcheck" id="pwcheck" style="font-size:25px; width:300px; height:50px;" required>
                </label>
                <i id="checkEye2" class="fas fa-eye"></i><br><br>
  
                <input type="submit" name="" style="font-size:25px; width:200px; height:50px;" onclick=check(); value="註冊"><br>
            </form>

        </div>

    </body>

</html>

<script>
    //讓密碼顯示的功能
    var checkEye = document.getElementById("checkEye");
    var floatingPassword =  document.getElementById("pw");
    checkEye.addEventListener("click", function(e)
    {
        if(e.target.classList.contains('fa-eye')){
            e.target.classList.remove('fa-eye');
            e.target.classList.add('fa-eye-slash');
            floatingPassword.setAttribute('type','text')
        }
        else{
            floatingPassword.setAttribute('type','password');
            e.target.classList.remove('fa-eye-slash');
            e.target.classList.add('fa-eye')
        }
    });

    var checkEye2 = document.getElementById("checkEye2");
    var floatingPassword2 =  document.getElementById("pwcheck");
    checkEye2.addEventListener("click", function(e)
    {
        if(e.target.classList.contains('fa-eye')){
            e.target.classList.remove('fa-eye');
            e.target.classList.add('fa-eye-slash');
            floatingPassword2.setAttribute('type','text')
        }
        else{
            floatingPassword2.setAttribute('type','password');
            e.target.classList.remove('fa-eye-slash');
            e.target.classList.add('fa-eye')
        }
    });

</script>