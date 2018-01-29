
<!-- {{ $todos }} -->
<form 
     action ="/gg" method="POST">
    {{ csrf_field() }}
    "booktitle:"
    <input name ="title" input type="text" placeholder="is empty">
    "qty:"
    <input name ="qty" input type="text" placeholder="is empty">
    <input type="submit" value="submit"> 
</form>
<!-- {{Form::label('title', 'title')}}     {{Form::label('qty', 'qty')}}<br> -->
@foreach ($todos as $value)
    <p>{{ $value->id . '.' . $value->title . ':' .$value->qty}}</p>
    {!! Form::open(['url'=>'gg/'.$value->id.'/edit', 'method'=>'get']) !!}
    <button type="submit">EDIT</button>
    {!! Form::close() !!}
    {!! Form::open(['url'=>'gg/'.$value->id, 'method'=>'delete']) !!}
    <button type="submit">DELETE</button>
    {!! Form::close() !!}
@endforeach
