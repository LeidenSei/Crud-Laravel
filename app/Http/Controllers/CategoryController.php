<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function Cate() {
        $category = DB::table('categories')->get();
        return view('Category',compact('category'));
    }
    public function app() {
        return view('App');
    }
    public function save(Request $request)  {
        DB::table('categories')->insert(
            $request->only('name','status')
        );
        return redirect()->route('Cate.index');
    }
    public function chooseCate($id) {
        $category=DB::table('categories')->find($id);
        return view('Fix',compact('category'));
    }
    public function returnFix(Request $request,$id)  {
        DB::table('categories')->where('id',$id)->update(
            $request->only('name','status')
        );
        return redirect()->route('Cate.index')->with('success','Item created successfully!');
    }
    public function Del($id) {
        DB::table('categories')->delete($id);
        return redirect()->route('Cate.index');
    }

}
