<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function show(){
        $datas= Post::all();
        // dd($datas->toArray());
        return view('demo',compact('datas'));
    }
    public function destroy($id){
        $datas= Post::find($id);
        $datas->delete();
        return Redirect::to('demo');
    }
    public function create(){
        return view ('create');
    }
    public function store(Request $request){
        $data=new Post;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return Redirect:: to('/demo');

    }
    public function update($id){
        $data=Post::find($id);
        return view ('edit',compact('data'));
    }
    public function editStore(Request $request){
        $data=Post::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return Redirect:: to('/demo');
    }

}
