<?php

namespace App\Http\Controllers;

use App\Models\Circuito;
use App\Models\Recorre;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RecorreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recorres = Recorre::all();
        $url='storage/';
        return view('recorre.index')->with('recorres',$recorres)->with('url',$url);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recorres = Recorre::findOrFail($id)->get();
        return view('recorre.show')->with('recorre',$recorres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recorre = Recorre::findorFail($id);
        try {
            $recorre->delete();
            return redirect()->route('recorre.index')
                ->with('message', 'Se Ha eliminado el registro');
        } catch (QueryException $e) {
            return redirect()->route('recorre.index')
                ->with('message', 'No se Ha podido eliminar');
        }

    }
}
