<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
class CategoryComponents extends Component
{
    use WithPagination;
    public function render()
    {
        $category = Category::paginate(10);
        return view('livewire.admin.category-components',['categories' => $category])->layout('layouts.admin');
    }
    public $deleteId ;
    protected $listeners = ['deleteConfirmed'=> 'destroy'];


    public function deleteConfirmation($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('show-delete');
    }
    public function destroy()
    {
       $category = Category::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('show-delete-message');
    }
}
