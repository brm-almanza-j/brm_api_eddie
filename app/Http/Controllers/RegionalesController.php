<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Regionales;

class RegionalesController extends Controller
{
    public function index(){
        $reg = Otb_Regionales::orderBy('id', 'ASC')->paginate(5);
        return view('admin.regionales.index')->with('reg', $reg);
    }

    public function create(){
        return view('admin.regionales.create');
    }

    public function store(Request $request){
        $regional = new Otb_Regionales($request->all());
        $regional->save();
    }

    public function edit($id){
        $reg_edit = Otb_Regionales::find($id);
        return view('admin.regionales.edit')->with('regional', $reg_edit);
    }

    public function update(Request $request, $id){
        $reg_up = Otb_Regionales::find($id);
        $reg_up->fill($request->all());
        $reg_up->save();
        return redirect()->route('regionales.index');
    }

    public function destroy($id){
        $regi_del= Otb_Regionales::find($id);
        $regi_del->delete();
        return redirect()->route('regionales.index');
    }
}
