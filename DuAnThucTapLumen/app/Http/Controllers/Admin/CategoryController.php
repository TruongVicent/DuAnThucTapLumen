<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ThemeCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller{


    public function index(){
        $categories = ThemeCategory::all();

        return view('Admin.Layouts.Category.ListCate',compact('categories'));
    }
    public function add(){
        return view('Admin.Layouts.Category.AddCate');
    }
    public function addCategory(Request $request)
    {
        $category = new ThemeCategory(); // Chỉnh sửa tên model nếu cần thiết
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status');

        $category->save();
        return redirect('/dashboard/cate');
    }
    public function edit($id)
    {
        $category = ThemeCategory::findOrFail($id);
        return view('Admin.Layouts.Category.EditCate', compact('category'));
    }

    // Phương thức cập nhật danh mục sau khi sửa
    public function update(Request $request, $id)
    {
        $category = ThemeCategory::findOrFail($id);
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->status = $request->input('status');
        $category->save();

        return redirect('/dashboard/cate');
    }
    public function delete($id)
    {
        $category = ThemeCategory::findOrFail($id);
        $category->delete();

        return response()->json(['success' => 'Danh mục đã được xóa thành công!']);
    }
}
