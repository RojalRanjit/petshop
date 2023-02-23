<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function product()
    {
        return view('product');
    }

    public function service()
    {
        return view('service');
    }

    public function blog()
    {
        return view('blog');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function Dashboard()
    {
        return view('Admin.Dashboard');
    }
    public function AddPetitems()
    {
        return view('Admin.AddPetItems');
    }
    public function addItems(Request $req)
    {
        
       $req->validate([
        'item' => 'required',
        'price' => 'required',
        'type' => 'required',
        'image' => 'required'
       ]);
       $itemTable = new petitem();
       $itemTable->item = $req->item;
       $itemTable->Price = $req->price;
       $itemTable->type = $req->type;
       $image = $req->file('image');
       $foodimage = $image->getClientOriginalName();
       $path = $image->move('public/images/',$foodimage);
       $itemTable->foodimg = $path;
       $itemTable->save();
       return back();
    }
    public function Listofitems(){
        $data = petitem::all();
        return view('Admin.Listofpetitems',compact('data'));
    }
    
    public function delete($id){
        $user = petitem::find($id);
        $user->delete();
        return back();
    }
    public function edit($id){
        $items = petitem::findOrFail($id);    
        return view('Admin.Editpetitems',compact('items'));
    }
    public function Listedit(Request $req){
        $req->validate([
            'item' => 'required',
            'price' => 'required',
            'type' => 'required',
            'image' => 'required'
           ]);
        //    dd($req->all());
        $itemTable= petitem::find($req->id);
        $itemTable->item = $req->item;
        $itemTable->Price = $req->price;
        $itemTable->type = $req->type;
       $image = $req->file('image');
       $foodimage = $image->getClientOriginalName();
       $path = $image->move('public/images/',$foodimage);
       $itemTable->foodimg = $path;
       $itemTable->save();
        return redirect()->route('Listofitems');
    }
}
