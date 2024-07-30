<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DecisionType;

class AdminDecisionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decision=DecisionType::all();
        $data=[
         "all_decisions" => $decision
        ];
        return View("admin.decisiontype.index",$data);
    }
 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View("admin.decisiontype.create");
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

        ]);
        DecisionType::create([
            "name"=>$request->name,




        ]);


        return redirect()->route('decisiontype.index');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function serach(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',

        ]);
        $decision=DecisionType::where('name','like','%'.$request->name.'%')->paginate(10);


         $data=[
          "all_decisions" => $decision
         ];
         return View("admin.decisiontype.index",$data);
    }
    public function edit($id)
    {
        $decision = DecisionType::find($id);

        // show the edit form and pass the shark
        return View('admin.decisiontype.edit')
            ->with('decision', $decision);
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

        ]);
        $decision = DecisionType::find($id);
        $decision->update([ "name"=>$request->name
    ]);
        return redirect()->route('decisiontype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decision = DecisionType::find($id);
        $decision->delete();

        return redirect()->route('decisiontype.index');
    }  //

}
