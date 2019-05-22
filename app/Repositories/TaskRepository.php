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
            return $this;
        }

        public function fetchAll()
        {
            return $this->taskModel::all();
        }

        public function fetch($task_id)
        {
            sreturn $this->taskModel::find($task_id);
        }
    }

