<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\TaskModel;
    }

    public function index()
    {
        $data = $this->model->findAll();

        return view('index', ['tasks' => $data]);
    }
}
