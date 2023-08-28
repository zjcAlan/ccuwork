
function register()
{
    alert('Switching to register page');

    window.open('register_index');
}

function password()
{
    alert('Switching to password page');

    window.open('password_index');
}

function check()
{
    var pw_value = document.getElementById('pw').value;
    var pw_check = document.getElementById('pwcheck').value;
    if(pw_value===pw_check && pw_value!='' && pw_check!=''){
        alert('註冊成功');
    }
    else{
        document.getElementById('pw').value = "";
        document.getElementById('pwcheck').value = "";
        alert('請輸入密碼');
    }
}


