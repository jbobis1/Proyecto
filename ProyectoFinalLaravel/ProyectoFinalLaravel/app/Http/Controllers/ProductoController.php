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
            $mycircuits = Product::all();
            $url='storage/';
            return view('producto.index')->with('carrera',$mycircuits)->with('url',$url);
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('producto.create');
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
          
                $circuit = new Product();
                $circuit->id= $request->id;
                $circuit->name= $request->name;
                $circuit->slug = $request->slug;
                $circuit->details = $request->details;
                $circuit->price = $request->price;           
                $circuit->shipping_cost = $request->shipping_cost;
                $circuit->description = $request->description;
                $circuit->category_id = $request->category_id;
                  
           
                $nombrefoto=$request->file('image_path')->getClientOriginalName();
                $circuit->image_path= $nombrefoto;
                $circuit->saveOrFail();
                $request->file('image_path')->storeAs('public',$nombrefoto);
                
                return redirect()->route('producto.index')->with('status',"producto introducido");
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
            $circuito = Product::findorFail($id);
            return view('producto.edit')->with('producto',$circuito);
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
    
    
            $circuit = Product::findorFail($id);
            $circuit->name= $request->name;
            $circuit->slug = $request->slug;
            $circuit->details = $request->details;
            $circuit->price = $request->price;           
            $circuit->shipping_cost = $request->shipping_cost;
            $circuit->description = $request->description;
            $circuit->category_id = $request->category_id;
    
            
    
    
            if(is_uploaded_file($request->image_path)){
                $nombrefoto=$request->file('image_path')->getClientOriginalName();
                $circuit->image_path= $nombrefoto;
                $request->file('image_path')->storeAs('public',$nombrefoto);
    
            }
    
            $circuit->saveOrFail();
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
            $equipo = Product::findorFail($id);
            try {
                $equipo->delete();
                return redirect()->route('producto.index')
                    ->with('message', 'Se Ha eliminado el registro');
            } catch (QueryException $e) {
                return redirect()->route('producto.index')
                    ->with('message', 'No se Ha podido eliminar');
            }
        }
    
    }
    