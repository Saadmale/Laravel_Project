<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecommerce;
use Illuminate\Support\Facades\Hash;
use App\Models\CheckOut;
class EcommerceController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,svg',
        ]);

        $data = new Ecommerce;

        $data->title= $request->input('title');
        $data->description = $request->input('description');
        $data->quantity = $request->input('quantity');
        $data->price = $request->input('price');
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalName();
        $request->image->move('public/image', $imagename);

        $data->image = $imagename;

        $data->save();

        return redirect()->route('myorder')->with('message', 'SuccessFully Added Product');

    }

    public function show(Request $request){

        $search = $request['search'] ?? "";

        if($search != ""){
            $data = Ecommerce::where('title', 'LIKE', "$search%")->get();
        }else{
            $data = Ecommerce::all();
        }
        
        return view('myorder', compact('data', 'search'));
    }

    public function delete($id){
        $data = Ecommerce::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Successfully Deleted Product');
    }

    public function edit($id){
        $data = Ecommerce::find($id);
        return view('product.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,svg',
        ]);

        $data = Ecommerce::find($id);

        $data->title = $request->title;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $image = $request->image;

        if($image){
                
            $imagename = time().'.'.$image->getClientOriginalName();
            $request->image->move('public/image', $imagename);

            $data->image = $imagename;

            $data->save();
        }
            
        $data->save();

        return redirect()->route('myorder')->with('message', 'Successfully Updated Product');
    }

    public function shop(){
        return view('shop');
    }

    public function detail(){
        return view('detail');
    }

    public function changepassword(){
        return view('changepassword');
    }

    public function updatepassword(Request $request){
          $request->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required',
          ]);

          if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


         #Update the new Password
         Ecommerce::whereId(auth()->user()->id)->update([
            'newpassword' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
       
        
    }

    public function about(){
        return view('about');
    }

    public function whishlist(){
        return view('whilist');
    }

    public function checkout(){
        $data = Ecommerce::all();
        return view('checkout', compact('data'));
    }

    public function checkcard(Request $request){

        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'mobilenumber' => 'required',
            'cardnumber' => 'required',
            'date' => 'required',
            'code' => 'required',
        ]);

        $data = new CheckOut;

        $data->first = $request->first;
        $data->last = $request->last;
        $data->email = $request->email;
        $data->country = $request->country;
        $data->address = $request->address;
        $data->city = $request->city;
        $data->state = $request->state;
        $data->zip = $request->zip;
        $data->mobilenumber = $request->mobilenumber;
        $data->cardnumber = $request->cardnumber;
        $data->date = $request->date;
        $data->code = $request->code;

        $data->save();

        return redirect()->route('home')->with('message', 'Successfully Your Orders Purchased');
    }

   
}
