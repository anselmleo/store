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

    }
