<html>
    <head>
        <title>showtasks</title>
    </head>
    
    <body>
        <h1 id="header">SHOW TASKS</h1>
        <div id="nav">Lorem Ipsum.. Thanks for coming around.</div>

        <ul>
            @foreach($tasks as $task)
                <li><a href="/showtaskdetail/{!! $task->id !!}">{!! $task->title !!}</a></li>
            @endforeach
        </ul>    
    </body>
</html>