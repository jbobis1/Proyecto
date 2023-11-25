<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoriaModel;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Coleccions extends Component
{
    use WithPagination;

    public function render()
    {
        $url = 'storage/';
        $poducto = Product::where('category_id',  $this->category_id );
        return view('categoria.show')->with('pro', $poducto)->with('url', $url);
    }

    public function updatingBuscador()
    {
        $this->resetPage();
    }

    public function quitaFiltros()
    {
        $this->nombre = '';
        $this->atributo = '';
        $this->tipo = '';
        $url = 'storage/';
        $poducto = Carta::all();
        return view('livewire.ColeccionDeCartas')->with('cartas', $poducto)->with('url', $url);
    }
}
