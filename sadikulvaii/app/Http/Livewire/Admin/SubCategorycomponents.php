<?php

namespace App\Http\Livewire\Admin;

use App\Models\subcategory;
use Livewire\Component;
use Livewire\WithPagination;
class SubCategorycomponents extends Component
{
    use WithPagination;
    public function render()
    {
        $subcategory = subcategory::paginate();
        return view('livewire.admin.sub-categorycomponents',['subcategories'    => $subcategory])->layout('layouts.admin');
    }

    public $deleteId;
    protected $listeners = ['deleteConfirmed'=> 'destroy'] ;
    public function Confirmdelete($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('show-delete');
    }
    public function destroy()
    {
        subcategory::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('show-delete-message');
    }
}
