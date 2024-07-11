<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\License;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Theme;
class LicensesController extends Controller
{


    public function index()
    {
        $license = License::all();
//        return response()->json($license);
        return view('Admin.Layouts.License.ListLicense', ['license'=>$license]);
    }
    public function show()
    {
        $license = License::all();
        $themes = Theme::all(); 
        return view('Admin.Layouts.License.AddLicense', compact('license','themes'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'key' => 'required|string',
            'theme_id' => 'required|integer',
            'expiration_date' => 'required|date',
            'status' => 'nullable|string',
        ]);
        $license = new License();
        $license->key = $request->input('key');
        $license->theme_id = (int) $request->input('theme_id');
        $license->expiration_date = $request->input('expiration_date');
        $license->status = (int) $request->input('status');
        $license->save();

        return redirect('/dashboard/license');
    }


    public function edit($id)
    {
        $license = License::find($id);
        $themes = Theme::all(); 
        return view('Admin.Layouts.License.EditLicense',compact('license','themes'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'key' => 'required|string',
            'theme_id' => 'required|integer',
            'expiration_date' => 'required|date',
            'status' => 'nullable|string',
        ]);

        $license = License::find($id);
        $license->key = $request->input('key');
        $license->theme_id = $request->input('theme_id');
        $license->expiration_date = $request->input('expiration_date');
        $license->status = $request->input('status');
        $license->update();

        return redirect('/dashboard/license');
    }

    public function delete($id)
    {
        $license = License::find($id);
        if(!$license){
            return response()->json('Xoá không thành công vì không có giấy phép có id là: '.$id);
        }
        else{
            $license->delete();
            return response()->json('Xoá thành công giấy phép');
        }
//        return redirect()->route('dashboard/license')->with('success', 'License deleted successfully');
//        return view('Admin.Layouts.License.ListLicense');
    }
}
