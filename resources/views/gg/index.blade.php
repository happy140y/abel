<form action ="/gg" method="POST">
    {{ csrf_field() }}
    "booktitle:"
    <input name ="title" input type="text" placeholder="is empty">
    "qty:"
    <input name ="qty" input type="text" placeholder="is empty">
    <input type="submit" value="submit">
</form>