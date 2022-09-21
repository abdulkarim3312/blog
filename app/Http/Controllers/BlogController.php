<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories;

    public function index()
    {
        $this->categories = Category::where('status', 1)->get();
        return view('admin.blog.index', ['categories' => $this->categories]);
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.blog.manage', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog/add')->with('message', 'Blog Info Save Successfully');
    }

    public function edit()
    {
        return view('admin.blog.edit');
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
