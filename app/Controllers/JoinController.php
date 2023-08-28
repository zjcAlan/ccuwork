<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sign;

class JoinController extends BaseController
{
    public function signpage(){
        return view('posts/signpage');
    }

    public function insertData(){
        $model = new Sign();

        $data = [
            'school' => $this->request->getVar('school'),
            'department' => $this->request->getVar('department'),
            'firstschool' => $this->request->getVar('firstschool'),
            'firstdepartment' => $this->request->getVar('firstdepartment'),
            'secondschool' => $this->request->getVar('secondschool'),
            'seconddepartment' => $this->request->getVar('seconddepartment'),
            'thirdschool' => $this->request->getVar('thirdschool'),
            'thirddepartment' => $this->request->getVar('thirddepartment')
        ];

        $YN = $model -> save($data);

        return redirect('JoinController');
    }
}