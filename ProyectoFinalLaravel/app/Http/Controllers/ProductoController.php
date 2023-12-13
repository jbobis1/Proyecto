<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myproducto = Product::all();
        $url='storage/';
        return view('producto.index')->with('carrera',$myproducto)->with('url',$url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compran = DB::table('categoria')

        ->select(
            'categoria.tipo as p',
        )   
        ->get();

        return view ('producto.create')->with('cate',$compran );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $valor=DB::table('categoria')
        ->select(
            'categoria.id as p',   
        )
        ->where('categoria.tipo', '=' , $request->category_id)
        ->get();

        $pValue = optional($valor)->pluck('p')->first();

        try {
      
            $producto = new Product();
            $producto->id= $request->id;
            $producto->name= $request->name;
            $producto->slug = $request->slug;
            $producto->details = $request->details;
            $producto->price = $request->price;           
            $producto->shipping_cost = $request->shipping_cost;
            $producto->description = $request->description;
         // Asigna el valor 'p'
    $producto->category_id = $pValue;
              
            $nombrefoto=$request->file('image_path')->getClientOriginalName();
            $producto->image_path= $nombrefoto;
            $producto->saveOrFail();
            $request->file('image_path')->storeAs('public',$nombrefoto);
            
            return redirect()->route('shop')->with('status',"producto introducido");
        }
        catch (QueryException $exception){
            return redirect()->route('producto.create')->with('status',"error al insertar");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        $team = Product::all();

        $url='storage';
        return view ('producto.show')->with('producto', $team)->with('url',$url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $compran = DB::table('categoria')

        ->select(
            'categoria.tipo as p',
        )   
        ->get();

        $producto = Product::find($id); 

        $producto = Product::findorFail($id);
 
        
        return view('producto.edit', [
            'producto' => $producto,
            'cate' => $compran, // Asegúrate de tener tus categorías disponibles aquí
        ]);

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

        $valor=DB::table('categoria')
        ->select(
            'categoria.id as p',   
        )
        ->where('categoria.tipo', '=' , $request->category_id)
        ->get();

        $pValue = optional($valor)->pluck('p')->first();

        $producto = Product::findorFail($id);
        $producto->name= $request->name;
        $producto->slug = $request->slug;
        $producto->details = $request->details;
        $producto->price = $request->price;           
        $producto->shipping_cost = $request->shipping_cost;
        $producto->description = $request->description;
         $producto->category_id = $pValue;


        


        if(is_uploaded_file($request->image_path)){
            $nombrefoto=$request->file('image_path')->getClientOriginalName();
            $producto->image_path= $nombrefoto;
            $request->file('image_path')->storeAs('public',$nombrefoto);

        }

        $producto->saveOrFail();
        return redirect()->route('producto.index')->with('status',"producto actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $producto = Product::findorFail($id);
        try {
            $producto->delete();
            return redirect()->route('producto.index')
                ->with('message', 'Se Ha eliminado el registro');
        } catch (QueryException $e) {
            return redirect()->route('producto.index')
                ->with('message', 'No se Ha podido eliminar');
        }
    }

}
