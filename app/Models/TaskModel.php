<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';

    protected $allowedFields = ['task'];

    protected $useTimestamps = true;

    protected $validationRules = [
        'task' => 'required'
    ];

    protected $validationMessages = [
        'task' => [
            'required' => 'Please enter a task'
        ]
    ];
    
}