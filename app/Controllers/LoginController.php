<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Account;


class LoginController extends BaseController
{
    public function login_index()
    {
        return view('login/login_page');
    }

    public function register_index()
    {
        return view('login/register_page');
    }

    public function password_index()
    {
        return view('login/password_page');
    }

    public function store()
    {
        
        $model = new Account();

        $data = [
            
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'identity_number' => $_POST['identity_number'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'password' => $_POST['password']
        
        ];

        $YN = $model->save($data);

        //註冊成功三秒後關閉註冊頁面
        sleep(3);
        echo "<script type='text/javascript'>
            opener.location.reload(true); 
            document.onload = window.close();
        </script>";
        
    }

    public function login()
    {
        $model = new Account();

        $data=[
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];

        if($model->where('email',$data['email'])->first())
        {
            if(($model->where('email',$data['email'])->first())['password']==$data['password'])
            {
                session_start();
                $_SESSION['email']=$data['email'];
                return view('login/session_test.php');
            }
            else{
                echo "<script> alert ('Wrong password');</script>";
                return view('login/login_page.php');
            }
        }
        else{
            echo "<script> alert ('Wrong mail');</script>";
            return view('login/login_page.php');
        }
        
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $_SESSION = array(); 
    }

    public function sessionT()
    {
        return view('login/session_test');
    }

}
?>