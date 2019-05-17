<html>
    <head>
        <title>task {!! $title !!}</title>
    </head>
    
    <body>
        <h1> Add Task </h1>
        
        @if(Session::has('errors'))
            {!!  Session::get('errors')->get('title')[0] !!}
        @endif

        @if(Session::has('message'))
        {{-- <!-- @if(session()->has('message')) --> --}}
             <span> {!! Session::get('message') !!}</span>
        @endif

        <form action="/create" method="post">
            @csrf
            <!-- {!! csrf_token() !!}; -->
            
            <input name="title" type="text">
            <input name="submit" type="submit" value="submit">
        </form>
        
    </body>
</html>