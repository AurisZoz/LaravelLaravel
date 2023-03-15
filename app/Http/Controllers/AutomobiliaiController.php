<?php

namespace App\Http\Controllers;

use App\Models\Automobiliai;
use Illuminate\Http\Request;

class AutomobiliaiController extends Controller
{
    public function index(Request $request) {

   $filter=$request->session()->get('filterAutomobiliai', (object)['vardas'=>null]);

   $automobiliai=Automobiliai::with(['id','vardas','pavarde','marke1', 'modelis1', 'numeris1','marke2', 'modelis2','numeris2','marke3','modelis3','numeris3'])->filter($filter)->orderBy("vardas")->get();

   return view("automobiliai.index",[
        "automobiliai"=>$automobiliai,
        "filter"=>$filter
    ]
    );
    }
  
    public function save(Request $request) {
        $automobiliai=new Automobiliai();
        $automobiliai->id=$request->id;
        $automobiliai->vardas=$request->vardas;
        $automobiliai->pavarde=$request->pavarde;
        $automobiliai->marke1=$request->marke1;
        $automobiliai->modelis1=$request->modelis1;
        $automobiliai->numeris1=$request->numeris1;
        $automobiliai->marke2=$request->marke2;
        $automobiliai->modelis2=$request->modelis2;
        $automobiliai->numeris2=$request->numeris2;
        $automobiliai->marke3=$request->marke3;
        $automobiliai->modelis3=$request->modelis3;
        $automobiliai->numeris3=$request->numeris3;
        $automobiliai->save();
        return redirect()->route("automobiliai.index");

    }
    
    public function edit($id){
        return view("automobiliai.edit",[
            "automobilis"=>Automobiliai::find($id)
        ]);
    }

    public function update($id, Request $request){
        $automobiliai=Automobiliai::find($id);
        $automobiliai->id=$request->id;
        $automobiliai->vardas=$request->vardas;
        $automobiliai->pavarde=$request->pavarde;
        $automobiliai->marke1=$request->marke1;
        $automobiliai->modelis1=$request->modelis1;
        $automobiliai->numeris1=$request->numeris1;
        $automobiliai->marke2=$request->marke2;
        $automobiliai->modelis2=$request->modelis2;
        $automobiliai->numeris2=$request->numeris2;
        $automobiliai->marke3=$request->marke3;
        $automobiliai->modelis3=$request->modelis3;
        $automobiliai->numeris3=$request->numeris3;
        $automobiliai->save();
        return redirect()->route("automobiliai.index");
    }


    public function delete($id){
        Automobiliai::destroy($id);
        return redirect()->route("automobiliai.index");
    }

    public function search(Request $request) {
      $filterAutomobiliai=new \stdClass();
      $filterAutomobiliai->vardas=$request->vardas;
      $filterAutomobiliai->pavarde=$request->pavarde;

      $request->session()->put('filterAutomobiliai', $filterAutomobiliai);
      return redirect()->route('automobiliai.index');

    }

}