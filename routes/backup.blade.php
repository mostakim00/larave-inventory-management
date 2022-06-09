
Route::get('/',function(){
    return view('backend.admindashboard');
})->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
Route::group(['prefix'=>'/product'],function(){
     Route::get('/manage', 'App\Http\Controllers\Backend\ProductController@index')->name('manage');

    Route::post('/store', 'App\Http\Controllers\Backend\ProductController@store')->name('store');

    Route::get('/create', 'App\Http\Controllers\Backend\ProductController@create')->name('create');
    
    Route::get('/edit/{id}', 'App\Http\Controllers\Backend\ProductController@edit')->name('edit');

    Route::post('/update/{id}', 'App\Http\Controllers\Backend\ProductController@update')->name('product.update');

    Route::get('/delete/{id}', 'App\Http\Controllers\Backend\ProductController@destroy')->name('delete');
});

   
    // for Catagory
    Route::group(['prefix'=>'/category'],function(){
        Route::post('/catstore','App\Http\Controllers\Backend\CategoryController@store')->name('catstore');

        Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('catcreate');
    
        Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('catmanage');

        Route::get('/catedit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('catedit');

        Route::get('/catshow','App\Http\Controllers\Backend\CategoryController@catshow')->name('catshow');

        Route::post('/update/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('catupdate');
        
        Route::get('/delete/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('catdelete');
    });

});