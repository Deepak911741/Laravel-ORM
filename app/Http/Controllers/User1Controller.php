<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function check(){
        return view('Pages.check');
    }

    public function showName(){
        $value = DB::table('orms')->get();
        return view('pages.value', ['datavalue' => $value]);
        }

    public function singleUser(string $id){
        $value = DB::table('orms')->where('id', $id)->get();
        // return $value;
        return view('pages.single', ['datavalue' => $value]);
    }
    public function deleteData(string $id){
        $value = DB::table('orms')->where('id', $id)
        ->delete();

        if ($value) {
            return redirect()->route('showData');
        }
    }

    public function addUser(Request $req){

        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|email|unique:orms|max:255',
            'phone' => 'required|numeric|unique:orms|min:10',
            'city' => 'required|string|max:255',
        ]);


        $value = DB::table('orms')
        ->insert([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($value) {
            return redirect()->route('showData');
        }
    }

    public function edit(string $id) {
        $value = DB::table('orms')->find($id);
    
        return view('Pages.edit', ['valuedata' => $value]);
    }
    

    public function edituser(Request $req, $id) {
        $admin = DB::table('orms')
            ->where('id', $id)
            ->update([
                'name' => $req->input('name'),
                'email' => $req->input('email'),
                'phone' => $req->input('phone'),
                'city' => $req->input('city'),
            ]);
    
        if ($admin) {
            return redirect()->route('showData');
        } else {

            return redirect()->back()->with('error', 'Update failed');
        }
    }
    
}
