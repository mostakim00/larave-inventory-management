<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Backend\Category;
use App\Models\Backend\Subcategory;
use Image;
use file;


class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcat=Subcategory::all();
        return view('backend.pages.subcategory.managesubcategory', compact('subcat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category=Category::all();
        return view("backend.pages.subcategory.addsubcategory", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'catId'=>'required',
            // 'slug'=>'required',
            'subCatName'=>'required',
            'des'=>'required',
            'image'=>'required',
            'status'=>'required'
        ]);
           $subcategory = new subcategory();
           $subcategory->catId = $request->catId;
           $subcategory->slug = Str::slug($request->subCatName);
           $subcategory->subCatName = $request->subCatName;
           $subcategory->des = $request->des;
        //    $subcategory->image = $request->image;
           $subcategory->status = $request->status;

               $image=$request->file("image");  
               $imgCustomName=rand().'.'.$image->getClientOriginalExtension();
               $location=public_path('backend/subcategoryimages/'.$imgCustomName);
               Image::make($image)->save($location);
               $subcategory->image=$imgCustomName;
    
           $subcategory->save();
           return redirect()->route('subcategory.manage');
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
    public function destroy($id)
    {
        $subcat=Subcategory::find($id);

        if(File::exists('backend/subcategoryimages/'.$subcat->image)){
            File::delete('backend/subcategoryimages/'.$subcat->image);
        }
        $subcat->delete();
        return redirect()->route('subcategory.manage');
    }
}
