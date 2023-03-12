<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    public $name;
    public $hiddenId;

    use WithPagination;
    protected $rules = [
        'name'  => 'required'
    ];
    function store()
    {
        $this->validate();

        if ($this->hiddenId != null) {
            $category = Category::find($this->hiddenId);
             $category->name = $this->name ;
             if ($category->save()) {
                $this->name ='';
                $this->hiddenId = '';
                session()->flash('message','Category Update Succefull');
             }

        }else {
            $category = new Category();
            $category->name = $this->name;
            $category->slug = Str::slug($this->name);
            if ($category->save()) {
                $this->name = '';
                session()->flash('message','Category Insert Succefull');
            }


        }


    }

    //edit form

    public function editFrom($id)
    {
        $category = Category::find($id);
        // dd($category->name);
         $this->name =$category->name;
         $this->hiddenId = $category->id;

    }


    //delete modal

    public $deleteId;
    
    protected $listeners = ['deleteConfirmed' => 'destroy'];

    public function deleteConfirmation($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('show-delete');

    }

    public function destroy()
    {
        Category::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('show-delete-message');
    }


    //Main Modal section
    public function render()
    {
        $category = Category::orderBy('id','desc')->paginate(5);

        return view('livewire.admin.category-component',[
            'categories'=> $category,

            ])->layout('layouts.admin');
    }
}
