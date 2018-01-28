<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gg;
class GGController extends Controller
{
    public function index ()
    {
        $todos=Gg::all();
        // dd($todos);in
        return view('gg.index')->with('todos',$todos);

    }
    public function insert (Request  $request)
    {
        //1 $todo =new Gg();
        // $todo->title=$request->title;
        // $todo->qty=$request->qty;
        // $todo->save();

        // 2$todo=Gg::create([
        //     'title'=>$request->title,
        //     'qty'=>$request->qty,
        // ]);

        //3
        $todo=Gg::create($request->all());
        return redirect('gg');
        
    }
    public function update(Gg $id)
    {
        //$input=Input::all();

        $todo=Gg::find($id);
       // $todo->title=$input['title'];
       // $todo->qty='30678';
        $todo->save();
        dd($todo);
        return Redirect('gg');
    
             

    }
    public function destroy(Gg $id)
    {
        
        $id->delete();
        return redirect('gg');
      

    }
    public function edit(Gg $id)
    {
        $todo=Gg::find($id);
        //dd($todo);
        return view('gg.edit')->with('todo',$todo);

    }
   
}
