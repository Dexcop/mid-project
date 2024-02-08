<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    function createStaff(){
        $categories = Category::all();
        return view('createStaff', compact('categories'));
    }

    function createStaff1(Request $request){
        $request->validate([
            'nama' => ['required', 'min:5', 'max:20'],
            'umur' => ['required', 'min:21', 'integer'],
            'alamat' => ['required', 'min:10', 'max:40'],
            'nomor' => ['required', 'min:9', 'max:12', 'regex:/^[0][8]/'],
            'image' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public'.'/'.$filename);

        Staff::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor,
            'image' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return redirect('/home');
    }

    function home(){
        $staffs = Staff::paginate(5);
        return view('home', compact('staffs'));
    }

    function editStaff($id){
        $staffs = Staff::find($id);
        return view('editStaff', compact('staffs'));
    }

    function updateStaff(Request $request, $id){
        $request->validate([
            'nama' => ['required', 'min:5', 'max:20'],
            'umur' => ['required', 'min:21', 'integer'],
            'alamat' => ['required', 'min:10', 'max:40'],
            'nomor' => ['required', 'min:9', 'max:12'],
            'image' => ['required', 'image'],
        ]);

        $filename = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public'.'/'.$filename);

        Staff::find($id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'nomor' => $request->nomor,
            'image' => $filename
        ]);

        return redirect('/home');
    }

    function deleteStaff($id) {
        $staffImage = Staff::find($id)->Image;
        Staff::destroy($id);
        Storage::delete('/public'.'/'.$staffImage);
        return redirect('/home');
    }
}
