@foreach ($todo as $todo)
    {{Form::open(['url'=>'gg/'.$todo->id, 'method'=>'put'])}}
    {{Form::text('title', $todo->title)}}<br>
    {{Form::textarea('qty', $todo->qty)}}<br>
    {{Form::submit('儲存')}}
    {{Form::close()}}
 @endforeach