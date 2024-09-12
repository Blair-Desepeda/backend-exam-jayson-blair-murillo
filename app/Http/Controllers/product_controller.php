<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product_model;

class product_controller extends Controller
{
    public function index(){
        $display_data=product_model::get();
        return view ('index',compact ('display_data'));
    }
    public function add(Request $add_data){
        $add_data->validate([
            'name'=>'required|string|max:255',
            'category'=>'required|string|max:255',
            'description'=>'required|string|max:255',
        ]);

        product_model::create([
            'name'=>$add_data->name,
            'category'=>$add_data->category,
            'description'=>$add_data->description,
        ]);

        return redirect('dashboard')->with('status', 'Added successfully');
    }

    public function edit(Request $edit_data, int $id){
        $edit_data=product_model::findOrFail($id);

        return view ('update_data',compact('edit_data'));
    }

    public function update(Request $update_data,int $id){
        $update_data->validate([
            'name'=>'required|string|max:255',
            'category'=>'required|string|max:255',
            'description'=>'required|string|max:255',
        ]);

        product_model::findOrFail($id)->update([
            'name'=>$update_data->name,
            'category'=>$update_data->category,
            'description'=>$update_data->description,
        ]);

        return redirect('dashboard')->with('status', 'Data updated successfully');
    }

    public function destroy(Request $delete_data ,int $id){
        $delete_data=product_model::findOrFail($id);
        $delete_data->delete();

        return redirect ('dashboard')->with('status', 'Data deleted successfully');
        }
}
