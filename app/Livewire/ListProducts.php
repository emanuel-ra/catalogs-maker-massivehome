<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Product;

class ListProducts extends Component
{
    use WithPagination;
    //public $products;
    // Public property to bind with the search input
    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // $products = DB::table('products')
        //     ->where('nameProduct', 'like', '%' . $this->search . '%')
        //     ->get();

        $products = Product::where('nameProduct', 'like', '%' . $this->search . '%')
            ->paginate(10); // Ajusta el número de elementos por página
        return view('livewire.list-products', compact('products'));
    }
}
