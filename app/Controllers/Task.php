<?php

namespace App\Controllers;

class Task extends BaseController
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

    public function show()
    {

        $tasks = $this->model->findAll();

        return $tasks;
    }

    public function create()
    {
        $task = $this->request->getPost('task');

        $result = $this->model->insert([
            'task' => $task
        ]);

        if ($result === false) {
            return redirect()->back()
                ->with('errors', $this->model->errors());
        }

        return redirect()->back()->with('info', 'Your task added succesfully');



        // return redirect()->back()
        // ->with('errors', $this->model->errors())
        // ->with('warning', 'Something went wrong!');

    }

    public function edit($id)
    {
        $task = $this->getTaskOr404($id);

        return view('task/edit', ['task' => $task]);
    }

    private function getTaskOr404($id)
    {
        $task = $this->model->find($id);

        if ($task === null) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Task not found");
        }
        return $task;
    }

    public function update($id)
    {
        $task = $this->getTaskOr404($id);


        $data = [
            'task' => $this->request->getPost('task')
        ];

        if ($task['task'] === $data['task']) {
            return redirect()->to('')->with('info', 'Nothing changed');
        } else if (empty($data['task'])) {
            return redirect()->to('')->with('info', 'This field is required');
        } else if ($this->model->update($task, $data)) {
            return redirect()->to('')->with('info', 'Edited successfuly');
        } else {
            return redirect()->back()->with('warning', 'Invalid data');
        }
    }

    public function delete($id)
    {

        $task = $this->getTaskOr404($id);

        if (isset($_POST['yes'])) {
            $this->model->delete($task);
            return redirect()->to('')
                ->with('info', 'Task deleted');
        } 
        if (isset($_POST['no'])) {
            return redirect()->to('');
        } 

        return view('task/delete', ['task' => $task]);
    }
}
