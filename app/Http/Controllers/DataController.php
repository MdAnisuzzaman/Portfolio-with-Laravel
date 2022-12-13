<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required | unique:data',
            'password'=> 'required | min:5 | max:15',
            'images'  => 'image    | mimes:jpg,bmp,png | size:512'
        ]);
        $image            = $request->image;
        $data             = new Data();
        $data->name       = $request->name;
        $data->email      = $request->email;
        $data->password   = $request->password;
        if($image)
        {
            $folder = 'db/images/person.images/';
            $imageName = 'persons' . time() . '.' . $image->getClientOriginalExtension();
            $image->move($folder, $imageName);
            $data->image = $folder . $imageName;
        }
        $data->save();
        return redirect()->back() -> with('notify','Data Insert Successfully');
    }

    public function show()
    {
        $show = Data::all();
        return view('show-data',['showss'=>$show]);
    }
    public function delete($id)
    {
        $show = Data::find($id);
        $show->delete();
        return redirect('show-data');
    }
}
