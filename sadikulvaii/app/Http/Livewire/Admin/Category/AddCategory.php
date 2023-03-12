<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
class AddCategory extends Component
{
    public $tags = [];
    public $category_name;
    public $metatitle;
    public $block;
    public $description;
    public $status;
    public $metadescript;



    public function render()
    {
        return view('livewire.admin.category.add-category')->layout('layouts.admin');
    }

    //Add  new Category

    public function save()
    {

        $emploade = implode(',', $this->tags);


        $this->validate([
            'category_name' => 'required',
            'block' => 'required',
            'description' => 'required',
            'status' => 'required'

        ]);

        $category = new Category();
        $category->category_name = $this->category_name ;
        $category->category_slug = Str::slug($this->category_name);
        $category->block         = $this->block;
        $category->status        = $this->status;
        $category->meta_title    = $this->metatitle;
        $category->meta_desc     = $this->metadescript;
        $category->category_desc = $this->description;
        $category->meta_tag      = $emploade ;

        if ($category->save()) {

            $this->dispatchBrowserEvent('categorysaved');
            return redirect()->route('admin.category');
        }

    }

    //destroy category






}
