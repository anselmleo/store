<?php

namespace Tests\Unit;

use Mockery;
use Tests\TestCase;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
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

        Mockery::close();

    }

    public function testIfFetchAllReturnsACollection()
    {
        $resultSet = new Collection([
            [
                'id' => 1,
                'title' => 'go to work',
                'time' => '3:00PM',
                'completed' => false,
                'created_at' => '2019-05-16 17:11:14',
                'updated_at' => '2019-05-16 17:11:14'
            ],

            [
                'id' => 2,
                'title' => 'buy grocries',
                'time' => '5:00PM',
                'completed' => false,
                'created_at' => '2019-05-16 17:11:14',
                'updated_at' => '2019-05-16 17:11:14'
            ],
        ]);

        $mock = Mockery::mock('\App\Task');
        $mock->shouldReceive('all')
             ->andReturn($resultSet)
             ->once();

        $this->app->instance('App\Task', $mock);
        $repo = $this->app->make('\App\Repositories\TaskRepository');

        $actual = $repo->fetchAll();

        $this->assertInstanceOf(Collection::class, $actual);
        $this->assertEquals($actual, $resultSet);
    }
}
