<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Announcement;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $model = new Announcement();
        $data = [
            'announcements' => $model->findAll()
        ];
        return view('Announcements/browse_page', $data);
    }

    public function add()
    {
        return view('Announcements/add_page');
    }

    public function store()
    {
        // data set
        $model = new Announcement();

        // PDF file upload
        if(isset($_FILES['file']))
        {
            $file_name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location = "assets/PDFs/";
            move_uploaded_file($tmp_name,$location.$file_name);
            $path = $location.$file_name;
        }

        $data = [
            'headtitle'   => $this->request->getVar('headtitle'),
            'subtitle'    => $this->request->getVar('subtitle'),
            'content'     => nl2br($this->request->getVar('content')),
            'start_date'  => $this->request->getVar('start_date'),
            'end_date'    => $this->request->getVar('end_date'),
            'create_date' => date('Y-m-d'),
            'pdf_path' => $path
        ];
        $number = $this->request->getVar('select_box');
        if ($number == 1){$data['theme'] = "簡章訊息";}
        if ($number == 2){$data['theme'] = "招生事務";}
        if ($number == 3){$data['theme'] = "徵選資訊";}
        if ($number == 4){$data['theme'] = "會議簡報";}
        if ($number == 5){$data['theme'] = "其他事項";}

        

        $YN = $model->save($data);
        return redirect('AnnouncementController');
    }

    public function list_ann($announcement_id)
    {
        $model = new Announcement();
        
        $data = [
            'headtitle' => $model->find($announcement_id)
        ];
        return view('Announcements/browse_page', $data);
    }

    public function goto_modify_page()
    {
        $model = new Announcement();
        $data = [
            'announcements' => $model->findAll()
        ];
        return view('Announcements/modify_page', $data);
    }

    public function modify($acc_id)
    {
        if($acc_id == "瀏覽以下標題:"){
            return redirect('AnnouncementController');
        }

        $model = new Announcement();

        if($this->request->getVar('headtitle') !== ""){
            $data = ['headtitle' => $this->request->getVar('headtitle')];
        }

        if($this->request->getVar('subtitle') !== ""){
            $data = ['subtitle' => $this->request->getVar('subtitle')];
        }

        if($this->request->getVar('select_box') !== ""){
            $number = $this->request->getVar('select_box');
            if ($number == 1){$data['theme'] = "簡章訊息";};
            if ($number == 2){$data['theme'] = "招生事務";};
            if ($number == 3){$data['theme'] = "徵選資訊";};
            if ($number == 4){$data['theme'] = "會議簡報";};
            if ($number == 5){$data['theme'] = "其他事項";};
        }
        

        if($this->request->getVar('content') !== ""){
            $data = ['content' => nl2br($this->request->getVar('content'))];
        }//str_replace(' ', '&nbsp;', $dbContent)

        if($this->request->getVar('start_date') !== ""){
            $data = ['start_date' => $this->request->getVar('start_date')];
        }

        if($this->request->getVar('end_date') !== ""){
            $data = ['end_date' => $this->request->getVar('end_date')];
        }

        if(isset($_FILES['file']))
        {
            $file_name = $_FILES['file']['name'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $location = "assets/PDFs/";
            move_uploaded_file($tmp_name,$location.$file_name);
            $path = $location.$file_name;
            $data=['pdf_path' => $path];
        }

        $model->where('id', $acc_id)->set($data)->update();
        return redirect('AnnouncementController');
    
    }

    public function show_ann($ann_id)
    {
        $model = new Announcement();
        $data = [
            'announcements' => $model->find($ann_id)
        ];
        
        return view('Announcements/show_ann_page', $data);
    }

    public function download($announcementId)//For download pdf
    {
        $model = new Announcement();
        // 根据 $announcementId 查询数据库获取相应的公告信息
        $announcement = $model->find($announcementId);

        if (!$announcement) {
            // 处理找不到公告的情况
            return;
        }

        // 获取文件名
        $file_name = explode('/', $announcement['pdf_path']);
        $name = end($file_name);

        // 设置响应头
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $name . '"');
        header('Cache-Control: no-cache, no-store, must-revalidate');
        header('Pragma: no-cache');
        header('Expires: 0');
    
        // 输出文件内容
        readfile($announcement['pdf_path']);
        exit;
    }

}