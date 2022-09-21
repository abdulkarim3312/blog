<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category, $categories;
    public function index()
    {
        return view('admin.category.index');
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category/add')->with('message', 'Category Info Save Successfully');
    }

    public function edit($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('manage-course')->with('message', 'Category Updated Successfully');
    }

    public function delete($id)
    {
        return $id;
    }
}
