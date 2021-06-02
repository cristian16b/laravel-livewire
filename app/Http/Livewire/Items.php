<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;
 
    public $active;
    public $q;
    public $sortBy = 'id';
    public $sortAsc = true;
    public $item;
 
    public $confirmingItemDeletion = false;
    public $confirmingItemAdd = false;
 
    protected $queryString = [
        'active' => ['except' => false],
        'q' => ['except' => ''],
        'sortBy' => ['except' => 'id'],
        'sortAsc' => ['except' => true],
    ];
 
    protected $rules = [
        'item.name' => 'required|string|min:4',
        'item.price' => 'required|numeric|between:1,100',
        'item.status' => 'boolean'
    ];
 
    public function render()
    {
        $items = Item::where('user_id', auth()->user()->id)
            ->when( $this->q, function($query) {
                return $query->where(function( $query) {
                    $query->where('name', 'like', '%'.$this->q . '%')
                        ->orWhere('price', 'like', '%' . $this->q . '%');
                });
            })
            ->when($this->active, function( $query) {
                return $query->active();
            })
            ->orderBy( $this->sortBy, $this->sortAsc ? 'ASC' : 'DESC');

        $items = $items->paginate(10);
        
        return view('livewire.items',
            array(
                'items' => $items,
        ));
    }


}
