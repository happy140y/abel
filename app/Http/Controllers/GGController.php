<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gg;
class GGController extends Controller
{
    public function index ()
    {
        return view('gg.index');
   
    }
    public function update (Request $request)
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
        return $todo;
        
    }
}
