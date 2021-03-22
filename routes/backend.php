<?php 
Route::group(['prefix'=>'admin','namespace'=>'backend','as'=>'admin.'],function(){
    Route::resource('category','ControllerCategory');
    Route::resources([
    'dashboard' => 'ControllerName',
    // 'blog_type' => 'Blog_typeController',
    // 'method' => 'MethodController',
    // 'features' => 'FeaturesController',
    // 'contact' => 'ContactController',
    // 'order' => 'OrderController',
    // 'promotion' => 'PromotionController',
    // 'user' => 'UserController',
    // 'order_detail' => 'Order_detailController',
    // 'pay' => 'PayController',
    // 'slide' => 'SlideController',
    // 'comment_blog' => 'CommentblogController',
    // 'comment' => 'CommentController',
   
    ]);
    // Route::resource('product','ProductController');
    // Route::resource('menu','MenuController');
    // Route::resource('storelocaltion','StorelocaltionController');
    // Route::resource('admin','AdminController');
});

 ?>