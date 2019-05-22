<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskRepositoryTest extends TestCase
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

    public function testIfInsertIsSuccessful()
    {
        $formData = ['title' => 'Title One'];
        // $this->app->make('App\Task');
        $mock = Mockery::mock('App\Task');
        $mock->shouldReceive('create')
             ->with($formData)->once();

        $this->app->instance('App\Task', $mock);

        $repo = $this->app->make('App\Repositories\TaskRepository');
       // var_dump($mock);
        $instance = $repo->insert($formData);

        $this->assertInstanceOf(TaskRepository::class, $instance);

    }
}
