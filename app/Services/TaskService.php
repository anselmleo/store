<?php

    namespace App\Services;

    use App\Repositories\TaskRepository;

    Class TaskService 
    {
        protected $taskRepository;

        public function __construct(TaskRepository $taskRepository)
        {
            $this->taskRepository = $taskRepository;
        }

        public function make($formData)
        {
            $this->taskRepository->insert($formData);
        }

        public function get($id)
        {
            $this->taskRepository->fetch($id);
        }

        public function getAll()
        {
            $this->taskRepository->fetchAll();
        }
    }