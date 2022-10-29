<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
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
        $category = Category::orderBy('created_at', 'DESC')->get();
        //$cate= Category::all();
        return view('admin.category.list_category',compact('category'));   
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|unique:categories,name',
            'name_en' => 'required|unique:categories,name_en'
        ]);
     
        if ($validator->passes()) {

            $categories = Category::create($request->all());
            if($categories) {
                return response()->json([
                    'message' => "Data Inserted Successfully",
                    "code"    => 200
                ]);
            } else  {
                return response()->json([
                    'message' => "Internal Server Error",
                    "code"    => 500
                ]);
            }
           
        }
     
        return response()->json(['error'=>$validator->errors()->all()]);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category = Category::orderBy('created_at', 'DESC')->paginate(5);
        $cate_parent= Category::all();
        
        if ($request->has('key')) {
           $key = $request->key;
           $category = Category::where('name', 'like','%'.$key.'%')->orwhere('name_en', 'like','%'.$key.'%')->
           orderBy('created_at', 'DESC')->paginate(4);          
            return response()->json([
                'message' => "Data Found",
                "code"    => 200,
                "data"  => $category
            ]);
        }
        if($category) {
            return response()->json([
                'message' => "Data Found",
                "code"    => 200,
                "data"  => $category,
                "panert_data" =>$cate_parent
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }  
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         $result = Category::where('id_category', $request->id_category)->first();
            
        if ($result) {
            return response()->json([
                'message' => "Data Deleted Successfully!",
                "code"    => 200,
                "data"    => $result
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => [
                        'required',
                        Rule::unique('categories')->ignore($request->id_category, 'id_category'),
                    ],

            'name_en' => [
                        'required',
                        Rule::unique('categories')->ignore($request->id_category, 'id_category'),
                    ],

        ]);
        
        
        if ($validator->passes()) {
             $result = Category::where('id_category',$request->id_category)->update([
                'name'=>$request->name,
                'name_en'=>$request->name_en,
                'parent_id'=>$request->parent_id,
                'status'=>$request->status
            ]); 
            if($result) {
                return response()->json([
                    'message' => "Data Updated Successfully!",
                    "code"    => 200
                     

                ]);
            } else  {
                return response()->json([
                    'message' => "Internal Server Error",
                    "code"    => 500
                ]);
            }
        }
        //dd($validator->errors()->all());
        return response()->json(['error'=>$validator->errors()->all()]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function delete(Request $request)
    {
       $result = Category::where('id_category', $request->id_category)->delete();
       
        if($result) {
            return response()->json([
                'message' => "Data Deleted Successfully!",
                "code"    => 200,
                "data"    => $result
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }
    }
    public function destroy(Request $request)
    {
        $parent = Category::where('parent_id', $request->id_category)->count();
        $parenttrash = Category::where('parent_id', $request->id_category)->onlyTrashed()->count();

        if ($parent>0||$parenttrash>0) {
            return response()->json([
                'message' => "Cannot delete a parent row: a foreign key constraint failed !",
                "code"    => 1451
            ]);
           
        } else {
             $result = Category::where('id_category', $request->id_category)->forcedelete();
            if($result) {
                return response()->json([
                    'message' => "Data Remove Successfully!",
                    "code"    => 200,
                    "data"    => $result
                ]);
            } else  {
                return response()->json([
                    'message' => "Internal Server Error",
                    "code"    => 500
                ]);
            }
        }
        
        
       
    }
    public function untrash(Request $request)
    {
       $result = Category::where('id_category', $request->id_category)->restore();
       
        if($result) {
            return response()->json([
                'message' => "Data UnTrashed Successfully!",
                "code"    => 200,
                "data"    => $result
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }
    }
    public function deleteChecked(Request $request)
    {
        $ids = $request->ids;
        $result = Category::whereIn('id_category', $ids)->delete();
        if($result) {
            return response()->json([
                'message' => "Data Deleted Successfully!",
                "code"    => 200,
                "data"    => $result
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }
        
    }
    public function removeChecked(Request $request)
    {
        $parent = Category::where('parent_id', $request->id_category)->count();
        $parenttrash = Category::where('parent_id', $request->id_category)->onlyTrashed()->count();
        if ($parent>0||$parenttrash>0) {
            return response()->json([
                'message' => "Cannot delete a parent row: a foreign key constraint failed !",
                "code"    => 1451
            ]);
           
        } else {
            $ids = $request->ids;
            $result = Category::whereIn('id_category', $ids)->forcedelete();
            if($result) {
                return response()->json([
                    'message' => "Data Removed Successfully!",
                    "code"    => 200,
                    "data"    => $result
                ]);
            } else  {
                return response()->json([
                    'message' => "Internal Server Error",
                    "code"    => 500
                ]);
            }
        }
        
        
    }
    public function untrashChecked(Request $request)
    {
        $ids = $request->ids;
        $result = Category::whereIn('id_category', $ids)->restore();
        if($result) {
            return response()->json([
                'message' => "Data Untrash Successfully!",
                "code"    => 200,
                "data"    => $result
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }
        
    }
    public function trash(Request $request)
    {
        $category = Category::orderBy('created_at', 'DESC')->onlyTrashed()->paginate(4);

        //dd($category);
        if ($request->has('key')) {
           $key= $request->key;
           $category = Category::where('name', 'like','%'.$key.'%')->
           orderBy('created_at', 'DESC')->onlyTrashed()->paginate(4);          
            return response()->json([
                'message' => "Data Found",
                "code"    => 200,
                "data"  => $category
            ]);
        }
        if($category) {
            return response()->json([
                'message' => "Data Found",
                "code"    => 200,
                "data"  => $category
            ]);
        } else  {
            return response()->json([
                'message' => "Internal Server Error",
                "code"    => 500
            ]);
        }  
    }
}
