<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    // Hiển thị danh sách categories
    public function index()
    {
        $categories = Category::all(); // Lấy tất cả các categories
        return view('admin.categories', compact('categories')); // Trả về view với danh sách categories
    }

    // Thêm category
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
            'description' => 'nullable|max:255',
        ]);

        Category::create($request->all()); // Thêm category mới

        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
    }

    // Hiển thị form sửa category
    public function edit($id)
{
    $category = Category::findOrFail($id); // Tìm category theo ID
    $categories = Category::all(); // Lấy tất cả các categories để hiển thị
    return view('admin.edit.edit_categories', compact('category', 'categories')); // Trả về view chỉnh sửa
}

    // Cập nhật category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $id,
            'description' => 'nullable|max:255',
        ]);

        $category = Category::findOrFail($id); // Tìm category theo ID
        $category->update($request->all()); // Cập nhật category

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    // Xóa category
    public function destroy($id)
{
    $category = Category::findOrFail($id); // Tìm category theo ID
    $category->delete(); // Xóa category

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
}
}