<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
class EditcategoryComponent extends Component
{

    public $category_name;
    public $block;
    public $status;
    public $metatitle;
    public $metadescript;
    public $description ;
    public $cat_id;

    public function mount($id)
    {
      $category = Category::find($id);
      $this->category_name  = $category->category_name ;
      $this->block          = $category->block ;
      $this->status         =  $category->status;
      $this->metatitle      = $category->meta_title;
      $this->metadescript   =  $category->meta_desc ;
      $this->description    = $category->category_desc;
      $this->cat_id             = $category->id;
    }
    public function render()
    {

        return view('livewire.admin.category.editcategory-component')->layout('layouts.admin');
    }


    public function update()
    {
        $category = Category::find($this->cat_id);
        $category->category_name = $this->category_name ;
        $category->category_slug = Str::slug($this->category_name);
        $category->block         = $this->block;
        $category->status        = $this->status;
        $category->meta_title    = $this->metatitle;
        $category->meta_desc     = $this->metadescript;
        $category->category_desc = $this->description;

        if ($category->save()) {

            $this->dispatchBrowserEvent('categoryUpdate');
            return redirect()->route('admin.category');
        }
    }
}
