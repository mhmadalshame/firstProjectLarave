<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Service;
class AdminservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $services=Service::all();
     $data=[
      "all_services" => $services
     ];
     return View("admin.services.index",$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View("admin.services.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'descrption' => 'required',

        ]);
        Service::create([
            "name"=>$request->name,
            "descrption"=>$request->des


        ]);


        return redirect()->route('sevices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
public function serach(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|max:255',


    ]);
    $services=Service::where('name','like','%'.$request->name.'%')->paginate(10);


     $data=[
      "all_services" => $services
     ];
     return View("admin.services.index",$data);
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        // show the edit form and pass the shark
        return View('admin.services.edit')
            ->with('service', $service);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'descrption' => 'required',

        ]);
        $service = Service::find($id);
        $service->update([ "name"=>$request->name,
        "descrption"=>$request->des]);
        return redirect()->route('sevices.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('sevices.index');


    }
}
