<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Http\Requests\TaskFormValidator;
use App\Http\Controllers\TaskController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testIfAddTaskCallsServiceAndReturnsMessage() 
    {
        
        
        $formData = ['title' => ''];

        $request = Request::create('/create', 'post', $formData);

        $mock = Mockery::mock(TaskService::class);
        $mock->shouldReceive('make')
             ->once();
        
        $this->app->instance(TaskService::class, $mock);
        $taskController = $this->app->make(TaskController::class);

        $response = $taskController->addTask($request, new TaskFormValidator);

       // $this->assertEquals('302', $response->getStatusCode());
       $this->assertSessionHasErrors();

    }

}
