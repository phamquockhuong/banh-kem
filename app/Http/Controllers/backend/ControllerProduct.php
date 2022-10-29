<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\SizeProduct;
use App\ProductTranslation;
use Session;
use DB;

class ControllerProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $products = Product::orderBy('created_at', 'DESC')->get();
            $category = Category::all();
            $sizeProduct = SizeProduct::all();
        return view('admin.product.list_product', compact('products','category','sizeProduct'));
      
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        //dd($data);
        $img_req=$request->img_product;
        $imgList_req=$request->img_productList;
        $attr=$request->id_attr;
        $er_img=(json_decode($request->img_product));
        
        if (is_array($er_img)||$img_req==null) {
            return response()->json([
                'message' => "Chon 1 anh thoi",
                "code"    => 500
            ]);
        } else {
            if ($imgList_req==null) {
                return response()->json([
                    'message' => "Chon anh lq",
                    "code"    => 500
                ]);
            }

            $item = explode("uploads/",$request->img_product);
            $img_product = $item[1];//anh chinh
            $images = json_decode($request->img_productList);//chuyen json sang mang
            //dd($img_product);

            // $file = $request->img_product;
            // $file_name = $file->getClientOriginalName();
            // $file->move(base_path('uploads'),$file_name);
            $product = new Product();
            $landata = [
                'vi'=>[
                    'name'=>$data['name:vi'],
                    'title'=>$data['title:vi'],
                    'description'=>$data['description:vi']
                ],
                'en'=>[
                    'name'=>$data['name_en:en'],
                    'title'=>$data['title_en:en'],
                    'description'=>$data['description_en:en']
                ]
            ];

            $product->status = $data['status'];
            $product->price = $data['price'];
            $product->amount = $data['amount'];
            $product->id_category = $data['id_category'];
            $product->img_product = $img_product;
            $product->sale = $data['sale'];

            $product->fill( $landata);
            if ($landata!=null) {
                
                $product->save();
                //dd($product->id);
                foreach ($images as $value) { 
                  // $images = trim($value,"http://localhost/oomato_market/uploads/");
                  $tem = explode("uploads/", $value);
                  // echo ($tem[1])."<br />";
                  $img = $tem[1];
                  // dd($value);
                  DB::table('img_product')->insert([
                    'id_product'=>$product->id,
                    'image'=>$img
                  ]);
                }   
                foreach ($attr as $value) { 
                  DB::table('attrs')->insert([
                    'id_product'=>$product->id,
                    'id_attr'=>$value
                  ]);
                }   
                return response()->json([
                    'message' => "Data Inserted Successfully",
                    "code"    => 200
                ]);
            } else {
                return response()->json([
                    'message' => "Internal Server Error",
                    "code"    => 500
                ]);
            }
           
        }
        
        
        
        

        //return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $locale = Session::get('locale');
        //dd($locale);
        if ($locale == null) {
            $locale ="en";
        };
        
        $product = ProductTranslation::orderBy('id', 'DESC')->where('locale',$locale)->paginate(4);
        
        // if ($request->has('key')) {
        //    $key= $request->key;
        //    // $product = Product::where('name', 'like','%'.$key.'%')->orwhere('name_en', 'like','%'.$key.'%')->
        //    // orderBy('created_at', 'DESC')->paginate(4);          
        //    //  return response()->json([
        //    //      'message' => "Data Found",
        //    //      "code"    => 200,
        //    //      "data"  => $product
        //    //  ]);
        // }
        //dd($products);
        if($product) {
            return response()->json([
                'message' => "Data Found",
                "code"    => 200,
                "data"  => $product
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
