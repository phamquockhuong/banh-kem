<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class ControllerCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();;
        return view('admin.category.list_category',compact('category'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

       return view('admin.category.add_category',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $categories = Category::create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'status'=>$request->status 
        ]);
        //dd($categories);
        return redirect()->route('admin.category.index',compact('categories'))->with('Ok','The category was created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $cate = Category::where('id_category',$id)->first();
        return view('admin.category.edit_category',compact('cate','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Category::where('id_category',$id)->update([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'status'=>$request->status
        ]);
        return redirect()->route('admin.category.index')->with('Ok2','The category was successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id_category',$id)->delete();
        return redirect()->back()->withSucces('Xóa thành công');
    }
}
