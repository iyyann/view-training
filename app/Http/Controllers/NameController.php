<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Name;

class NameController extends Controller
{
    public function submit(Request $req)
    {
        //dd($req->all());
        $userDetails = new Name;
        $userDetails->fname = $req->fname;
        $userDetails->mname = $req->mname;
        $userDetails->lname = $req->lname;

        $res = $userDetails->save();

        return view('layout.form');
    }

    public function getNames() {
        $names = Name::all();
            return view('layout.table', compact('names'));
    }
    
    public function edit(Request $req) {
        $names = Name::all($req->id);
            return view('layout.table', compact('names'));
    }






    public function formSubmit(Request $req) {
        //print $req;
        $names = $req;
        //return view('layout.form', compact('names'));

    }








    public function update(Request $req)
    {
        //dd($req->all());
        $userDetails = Name::find();
        $userDetails->fname = $req->fname;
        $userDetails->mname = $req->mname;
        $userDetails->lname = $req->lname;

        $res = $userDetails->save();

        return view('layout.form');
    }

    public function delete(Request $req) {
        $names = Name::all($req->id);
        
        $names->delete;
            return view('layout.table', compact('names'));
    }
}
