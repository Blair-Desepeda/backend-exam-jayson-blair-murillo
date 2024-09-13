<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class user_controller extends Controller
{
    public function home(){
        $display_data=User::get();
        return view ('add-user',compact ('display_data'));
    }
    public function add(Request $add_data){
        $add_data->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'password'=>'required|string|confirmed|min:8',
        ]);

        User::create([
            'name'=>$add_data->name,
            'email'=>$add_data->email,
            'password'=>$add_data->password,
        ]);

        return redirect('add-user')->with('status', 'Added successfully');
    }

    public function edit(Request $edit_data, int $id){
        $edit_data=User::findOrFail($id);

        return view ('update_user',compact('edit_data'));
    }

    public function update(Request $update_data,int $id){
        $update_data->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255',
            'password'=>'required|string|confirmed|min:8',
        ]);

        User::findOrFail($id)->update([
            'name'=>$update_data->name,
            'email'=>$update_data->email,
            'password'=>$update_data->password,
        ]);

        return redirect('add-user')->with('status', 'Data updated successfully');
    }

    public function destroy(Request $delete_data ,int $id){
        $delete_data=User::findOrFail($id);
        $delete_data->delete();

        return redirect ('product')->with('status', 'Data deleted successfully');
        }


}
