<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\IndexModel;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "phone"=>'required',
            "email"=>'required',
            "course"=>'required',
            "address"=>'required'
        ]);

        $data=array(
            "name"=>$request->name,
            "number"=>$request->phone,
            "email"=>$request->email,
            "course"=>$request->course,
            "address"=>$request->address,
        );

        IndexModel::create($data);
        return redirect('/manageindex')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {  
        $data=IndexModel::all();
        return view('manageindex',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editindex=IndexModel::where('id',$id)->first();
        // dd($editinde);
        return view('editindex',['editindex'=>$editindex]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=array(
            "name"=>$request->name,
            "number"=>$request->phone,
            "email"=>$request->email,
            "course"=>$request->course,
            "address"=>$request->address,
        );

        IndexModel::where('id',$id)->update($data);
        return redirect('/manageindex')->with('succ','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        IndexModel::where('id',$id)->delete();
        return redirect('manageindex')->with('delesucc','Data Deleted Successfully');
    }
}
