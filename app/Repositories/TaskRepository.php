<?php

    namespace App\Repositories;

    use App\Task;


    Class TaskRepository 
    {

        public $taskModel;

        public function __construct(Task $taskModel) 
        {
            $this->taskModel = $taskModel;
        }

        public function insert($orderData)
        {
            $this->taskModel->create($orderData);
        }

        public function fetchAll()
        {
            $this->taskModel::all();
        }

        public function fetch($task_id)
        {
            $this->taskModel::find($task_id);
        }
    }

