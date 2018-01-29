@foreach ($todo as $todo)
    {{Form::open(['url'=>'gg/'.$todo->id, 'method'=>'put'])}}
    {{Form::label('title', 'title')}}
    {{Form::text('title', $todo->title)}}
    {{Form::label('title', 'qty')}}
    {{Form::text('qty', $todo->qty)}}
    {{Form::submit('儲存')}}
    {{Form::close()}}
 @endforeach