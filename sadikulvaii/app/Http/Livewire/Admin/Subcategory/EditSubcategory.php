<?php

namespace App\Http\Livewire\Admin\Subcategory;

use App\Models\Category;
use App\Models\subcategory;
use Livewire\Component;
use Illuminate\support\Str;
class EditSubcategory extends Component
{
    public $name;
    public $category_id;
    public $metadescript;
    public $metatitle;
    public $status;
    public $subcat_id;

    public function mount($id)
    {
        $subcategory = subcategory::find($id);
        $this->name = $subcategory->sub_category_name;
        $this->category_id = $subcategory->category_id;
        $this->metadescript = $subcategory->meta_desc;
        $this->metatitle = $subcategory->meta_title;
        $this->status = $subcategory->status;
        $this->subcat_id = $subcategory->id;

    }
    public function render()
    {
        $category = Category::orderBy('id', 'desc')->get();
        return view('livewire.admin.subcategory.edit-subcategory',['categories' => $category])->layout('layouts.admin');
    }

    public function update()
    {
        $subcategory = subcategory::find($this->subcat_id);
        $subcategory->sub_category_name = $this->name;
        $subcategory->sub_category_slug = Str::slug($this->name);
        $subcategory->category_id       = $this->category_id;
        $subcategory->meta_desc         = $this->metadescript;
        $subcategory->meta_title        = $this->metatitle;
        $subcategory->status            = $this->status;

        if($subcategory->save())
        {
            $this->dispatchBrowserEvent('subcategoryupdate');
            return redirect()->route('admin.subcategory');
        }
    }
}
