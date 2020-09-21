<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Memo;

class MemoController extends Controller
{
    public function showHome()
    {
      $memos = Memo::get();
      return view("home",['memos' => $memos]);
    }

    public function showSubmit($id = 0)
    {
      if($id != 0){
        $memo = Memo::where('id',$id)->get()->first();
      }else{
        $memo = (object)["id" => 0,"title" => "","content" => ""];
      }
      return view('submit',['memo' => $memo]);
    }

    public function postSubmit(Request $request,$id = 0)
    {
      $title = $request->input('title');
      $content = $request->input('content');
      if($id==0){
        Memo::create([
          'title' => $title,
          'content' => $content
        ]);
      }else{
        $memo = Memo::find($id);
        $memo->update([
          'title' => $title,
          'content' => $content
        ]);
      }
      return redirect()->route('home');
    }
    public function deleteMemo($id)
    {
      Memo::destroy($id);
      return redirect()->route('home');
    }

}
