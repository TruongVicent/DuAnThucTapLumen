<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\ThemeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ThemeController extends Controller
{


    public function index()
    {
        $themes = Theme::all();
        $category = ThemeCategory::all();
        return view('Admin.Layouts.Theme.ListTheme', compact('themes', 'category'));
    }

    public function add()
    {
        $categories = ThemeCategory::all();
        return view('Admin.Layouts.Theme.AddTheme', compact('categories'));
    }

    public function addTheme(Request $request)
    {
        $theme = new Theme();
        $theme->name = $request->name;
        $theme->price = $request->price;
        $theme->description = $request->description;

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('thumbnails', $filename, 'public'); // Lưu file vào thư mục 'storage/app/public/thumbnails'
            $theme->thumbnail = $path;
        }

        $theme->slug = $request->slug;
        $theme->status = $request->status;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('files', $filename, 'public'); // Lưu file vào thư mục 'storage/app/public/thumbnails'
            $theme->file = $path;
        }
        $theme->category_id = $request->category_id;
        $theme->save();

        return redirect('/dashboard/theme');
    }
    

    public function edit($id)
    {
        $categories = ThemeCategory::all();
        $theme = Theme::findOrFail($id);
        
        return view('Admin.Layouts.Theme.EditTheme', compact('categories', 'theme'));
    }
    public function update(Request $request, $id)
    {
        $theme = Theme::findOrFail($id);
        $theme->name = $request->name;
        $theme->price = $request->price;
        $theme->description = $request->description;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('thumbnails', $filename, 'public'); // Lưu file vào thư mục 'storage/app/public/thumbnails'
            $theme->thumbnail = $path;
        }
        $theme->slug = $request->slug;
        $theme->status = $request->status;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('files', $filename, 'public'); // Lưu file vào thư mục 'storage/app/public/thumbnails'
            $theme->file = $path;
        }
        $theme->category_id = $request->category_id;
        $theme->save();

        return redirect('/dashboard/theme');
    }
    public function delete($id)
    {
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return redirect('/dashboard/theme');
    }
}
