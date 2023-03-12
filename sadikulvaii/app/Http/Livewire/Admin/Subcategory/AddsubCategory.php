<?php

namespace App\Http\Livewire\Admin\Subcategory;

use App\Models\Category;
use App\Models\subcategory;
use Livewire\Component;
use Illuminate\Support\Str;
class AddsubCategory extends Component
{
    public $name;
    public $category_id;
    public $metadescript;
    public $metatitle;
    public $status;

    public function render()
    {
        $category = Category::orderBy('id','desc')->get();
        return view('livewire.admin.subcategory.addsub-category',['categories'  => $category])->layout('layouts.admin');
    }


    public function save()
    {
        // dd($this->category_id);
       $subcategory = new subcategory();
       $subcategory->sub_category_name  = $this->name;
       $subcategory->sub_category_slug  = Str::slug($this->name);
       $subcategory->category_id        = $this->category_id;
       $subcategory->meta_title         = $this->metatitle;
       $subcategory->meta_desc          = $this->metadescript;
       $subcategory->status             = $this->status;

       if ($subcategory->save()) {
            $this->dispatchBrowserEvent('subcategorysaved');
            return redirect()->route('admin.subcategory');
       }
    }
}
