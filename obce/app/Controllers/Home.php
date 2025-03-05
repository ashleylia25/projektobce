<?php

namespace App\Controllers;

use App\Models\OkresModel;
use App\Models\ObecModel;

class Home extends BaseController
{use CodeIgniter\I18n\Time;
use CodeIgniter\Log\Logger;
use CodeIgniter\Log\Handlers\FileHandler;

class Home extends BaseController
{
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger(new FileHandler());
    }

    public function index(): string
    {
        $this->logger->info('Home index page loaded');
        return view('welcome_message');
    }

    public function okresy()
    {
        $this->logger->info('Okresy page loaded');
        $okresModel = new OkresModel();
        $data['okresy'] = $okresModel->findAll();
        return view('districts', $data);
    }

    public function obce($okresId)
    {
        $this->logger->info('Obce page loaded for okresId ' . $okresId);
        $obecModel = new ObecModel();
        $perPage = 20;
        $currentPage = $this->request->getVar('strana') ? $this->request->getVar('strana') : 1;

        $data['obce'] = $obecModel->getObceByOkres($okresId, $perPage, $currentPage);
        $data['pager'] = $obecModel->pager;
        return view('obce', $data);
    }
}
}
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

