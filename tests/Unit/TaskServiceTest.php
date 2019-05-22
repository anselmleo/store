<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use App\Services\TaskService;
use App\Repositories\TaskRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskServiceTest extends TestCase
{
    public function testIfMakeInsertsDataWithRepository()
    {
        $formData = ['title' => 'Title One'];

        $mock = Mockery::mock(TaskRepository::class);
        $mock->shouldReceive('insert')
             ->with($formData)
             ->once();

        $this->app->instance(TaskRepository::class, $mock);
        $taskService = $this->app->make(TaskService::class);

        $this->assertNull($taskService->make($formData));

        Mockery::close();
    }
}
