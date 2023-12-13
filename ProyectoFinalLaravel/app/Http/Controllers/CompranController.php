<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\CompranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compran = DB::table('compran')
        ->join('users', 'users.id', '=', 'compran.usuario_id')
        ->join('products', 'products.id', '=', 'compran.productos_id')
        ->select(
            'products.name as p',
            'users.name as n',
            'compran.unidades',
            'products.price as c',
            DB::raw("DATE_FORMAT(compran.created_at, '%d-%m-%Y') as created_at_formatted")
        )
        ->where('users.id', '=', auth()->id())
        ->paginate(5); // Número de elementos por página (puedes ajustarlo según tus necesidades)
    
    $url = 'storage/';
    return view('compran.index')->with('compran', $compran)->with('url', $url);
    
    /**
        
    *    $poducto = Product::where('category_id',  $team->id )
    *   ->get();
    *    return view('categoria.show')->with('pro', $poducto)->with('url', $url);
           */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compran = CompranModel::findOrFail($id)->get();
        return view('compran.show')->with('compran',$compran);
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
        //
    }
}
