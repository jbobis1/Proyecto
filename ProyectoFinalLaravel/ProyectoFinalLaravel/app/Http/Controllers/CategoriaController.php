<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\CategoriaModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myteams = CategoriaModel::all();
        $url='storage/';
        return view('categoria.index')->with('teams',$myteams)->with('url',$url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $categoria = new CategoriaModel();
         //   $categoria->id= $request->id;
            $categoria->tipo= $request->tipo;
            $categoria->marca = $request->marca;

            $nombrefoto =$request->file('image_cat')->getClientOriginalName();
            $categoria->image_cat = $nombrefoto;
            
        
        $categoria->saveOrFail();
        $request->file('image_cat')->storeAs('/public',$nombrefoto);
        return redirect()->route('categoria.index')->with('status',"categoria introducido");
    }
     
        catch (QueryException $exception){
            return redirect()->route('categoria.create')->with('status',"error al insertar");
        }
    }


    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'image' => $request->img,
             'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     
        $team = CategoriaModel::findorFail($id);

        $url='storage/';

        $poducto = Product::where('category_id',  $team->id )
        ->get();
        return view('categoria.show')->with('pro', $poducto)->with('url', $url);
        
                return back()->with('error', $e->getMessage());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = CategoriaModel::findorFail($id);
        return view('categoria.edit')->with('categoria',$team);
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

        $team = CategoriaModel::findorFail($id);
        $team->tipo= $request->tipo;
   
        $team->marca = $request->marca;
  
        if(is_uploaded_file($request->image_cat)){
            $nombrefoto=$request->file('image_cat')->getClientOriginalName();
            $team->image_cat= $nombrefoto;
            $request->file('image_cat')->storeAs('public',$nombrefoto);

         
        }


        $team->saveOrFail();
 
        return redirect()->route('categoria.index')->with('status',"categoria actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = CategoriaModel::findorFail($id);
        try {
            $categoria->delete();
            return redirect()->route('categoria.index')
                ->with('message', 'Se Ha eliminado el registro');
        } catch (QueryException $e) {
            return redirect()->route('categoria.index')
                ->with('message', 'No se Ha podido eliminar');
        }
    }
}
