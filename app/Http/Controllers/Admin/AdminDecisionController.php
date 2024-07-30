<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Decision;
use App\Models\DecisionType;

class AdminDecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decision=Decision::all();
        foreach($decision as $dec ){
            $dec->decision_type_id=DecisionType::find($dec->decision_type_id);
        }

     $data=[
      "all_decisions" => $decision
     ];
     return View("admin.decision.index",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $decision=DecisionType::all();


     $data=[
      "all_decisions" => $decision
     ];
        return View("admin.decision.create",$data);
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
            'title' => 'required|max:255',
            'content' => 'required',
            'decision_type_id' => 'required',
        ]);
        Decision::create([
            "title"=>$request->title,
            "content"=>$request->content,
            "decision_type_id"=>$request->decision_type_id,



        ]);


        return redirect()->route('decision.index');
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
            'title' => 'required|max:255',

        ]);

        $decision=Decision::where('title','like','%'.$request->title.'%')->paginate(10);
        foreach($decision as $dec ){
            $dec->decision_type_id=DecisionType::find($dec->decision_type_id);
        }

         $data=[
          "all_decisions" => $decision
         ];
         return View("admin.decision.index",$data);
    }
    public function edit($id)
    {


        $decision = Decision::find($id);
        $decisiontype = DecisionType::all();

$data=[
    "decision"=>$decision,
    "all_decisions"=>$decisiontype,



];

        // show the edit form and pass the shark

       return View('admin.decision.edit',$data);
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
            'title' => 'required|max:255',
            'content' => 'required',
            'decision_type_id' => 'required',
        ]);
        $decision = Decision::find($id);
        $decision->update([ "title"=>$request->title,
        "content"=>$request->content,
"decision_type_id"=>$request->decision_type_id
    ]);
        return redirect()->route('decision.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decision = Decision::find($id);
        $decision->delete();

        return redirect()->route('decision.index');
    }
}
