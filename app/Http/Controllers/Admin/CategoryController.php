<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Testing\File;

class CategoryController extends Controller
{
    public function index (){
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function add (){
        return view('admin.category.add');
    }
  
    public function insert (Request $request ){
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }

        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == True?'1':'0';
        $category->popular = $request->input('popular') == True?'1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_descrip = $request->input('meta_description');
        $category->save();
        return redirect('/dashboard')->with('status' , "Category Added Successfully!!!");
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request ,$id){
        $category = Category::findOrFail($id);
        if($request->hasFile('image'))
        {
            $path = '/assets/uploads/category/'.$category->image;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == True?'1':'0';
        $category->popular = $request->input('popular') == True?'1':'0';
        $category->meta_title = $request->input('meta_title');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->meta_descrip = $request->input('meta_description');
        $category->update();
        return redirect('/categories')->with('success', 'Category Updated!');
    }

    public function destroy($id){
        $category = Category::find($id);
        if($category->image)
        {
            $path = 'assets/uploads/category'.$category->image;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
        }
        $category->delete();
        return redirect('/categories')->with('success', 'Deleted Successfully!');
    }
}
