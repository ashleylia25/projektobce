<?php

namespace App\Controllers;

use App\Models\OkresModel;
use App\Models\ObecModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function okresy()
    {
        $okresModel = new OkresModel();
        $data['okresy'] = $okresModel->findAll();
        return view('districts', $data);
    }

    public function obce($okresId)
    {
        $obecModel = new ObecModel();
        $perPage = 20;
        $currentPage = $this->request->getVar('strana') ? $this->request->getVar('strana') : 1;

        $data['obce'] = $obecModel->getObceByOkres($okresId, $perPage, $currentPage);
        $data['pager'] = $obecModel->pager;
        return view('obce', $data);
    }
}
