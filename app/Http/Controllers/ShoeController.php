<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    function createShoe(){
        return view('addProduct');
    }

    function createShoe1(Request $request){
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename
        ]);

        return redirect('/product')->with('message', 'Product added.');
    }

    public function viewShoes(){
        $shoes = Shoe::all();
        return view('product', compact('shoes'));
    }

    public function editProduct($id){
        $shoe = Shoe::findOrFail($id);
        return view('edit', compact('shoe'));
    }

    public function updateProduct($id, Request $request){
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::find($id)->update([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename
        ]);

        return redirect('/product');
    }

    public function deleteProduct($id){
        $shoe = Shoe::find($id);
        Shoe::destroy($id);
        Storage::delete('/public'.'/'.$shoe->Photo);

        return redirect('/product');
    }
}
