
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
@foreach ($todos as $value)
    <p>{{ $value->id . '.' . $value->title . ':' .$value->qty}}</p>
    <!-- <a href="gg/{{$value->id}}">Delete</a> -->
    <form action="/gg/{{$value->id}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="submit" value="Delete"> 
@endforeach
