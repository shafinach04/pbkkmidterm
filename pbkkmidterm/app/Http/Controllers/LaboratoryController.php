<?php

namespace App\Http\Controllers;

use App\Models\itemtype;
use App\Models\itemcond;
use App\Models\laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = itemtype::all();
        // return view('index', ['data' => $data]);
        // return view('index', ['itemtype' => itemtype::all()]);
        return view('index', ['laboratories' => laboratory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */

     public function getvalues($id){
        //

     }

    public function create()
    {
        //
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $laboratory = new laboratory();
        $laboratory->item_type = $request->item_type;
        $laboratory->item_cond = $request->item_cond;
        $laboratory->description = $request->description;
        $laboratory->defects = $request->defects;
        $laboratory->quantity = $request->quantity;
        $laboratory->file = $request->file;
        $laboratory->save();
        return redirect()->route('form.index')->with('success', 'Item data has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(laboratory $form)
    {
        //
        //dd($form);
        $laboratory = $form;
        return view('form', ['laboratory' => $form]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,laboratory $form)
    {
        //
        //dd($request->all());
        $laboratory = $form;
        $laboratory->item_type = $request->item_type;
        $laboratory->item_cond = $request->item_cond;
        $laboratory->description = $request->description;
        $laboratory->defects = $request->defects;
        $laboratory->quantity = $request->quantity;
        $laboratory->file = $request->file;
        $laboratory->save();
        return redirect()->route('form.index')->with('success', 'Item data has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(laboratory  $form)
    {
        //
        $laboratory = $form;
        $laboratory->delete();
        return redirect()->route('form.index')->with('success','Itemdata has been deleted successfully!');
    }
}
