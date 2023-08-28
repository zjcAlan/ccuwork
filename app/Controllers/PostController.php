<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class PostController extends BaseController
{
    public function index()
    {
        $model = new Post();

        $data =[
            'posts' => $model->findAll()
        ];

        return view('posts/index', $data);
    }
    
    public function create()
    {
        return view('posts/create');
    }

    public function main()
    {
        return view('posts/mainpage');
    }

    public function store(){
        $model = new Post();

        $data = [
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content')
        ];
        
        $YN = $model -> save($data);

        return redirect('PostController');
    }
}