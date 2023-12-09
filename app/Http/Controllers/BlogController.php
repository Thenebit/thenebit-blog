<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{

   public function blogHome() {
      $data = Blog::all();
      return view('pages.home', compact('data'));
   }

   public function index() {
      $data = Blog::all();
      return view('pages.blog-stories', compact('data'));
   }

   public function stories(Request $request) {
    $blog = new Blog;

   //  Image first
      if ($request->hasFile('image')) {
         $file = $request->file('image');
         $extention = $file->getClientOriginalExtension();
         $imagename = time().'.'.$extention;
         $file->move('blogStorage', $imagename);

         $blog->image=$imagename;
      }

      // $request->validate([
      //    'author' => 'required',
      //    'image' => 'required',
      //    'title' => 'required',
      //    'postType' => 'required',
      //    'description' => 'required',
      // ]);

      $blog->author = $request->author;
      $blog->title = $request->title;
      $blog->postType = $request->postType;
      $blog->description = $request->description;

      $blog->save();

      return redirect()->back()->with('success', 'Sent success');
      
   }

   // public function show($id) {
    
   // }

   public function edit($id) {
      $blogNum = Blog::find($id);
      return view('pages.blog-edit', compact('blogNum'));
   }

   public function update(Request $request, $id) {
      $blogUp = Blog::find($id);

      $blogUp->author = $request->author;
      $blogUp->title = $request->title;
      $blogUp->postType = $request->postType;
      $blogUp->description = $request->description;

      $blogUp->save();

      return redirect()->back()->with('message', 'Updated Successfully');

   }

   // public function timeline() {
    
   // }

   public function destroy($id) {
    $drop = Blog::find($id);
    $drop->delete();

    return redirect()->back()->with('message', 'Deleted');

   }
}
