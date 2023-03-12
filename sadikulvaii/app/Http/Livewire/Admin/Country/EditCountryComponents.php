<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\country;
use Livewire\Component;
use Illuminate\Support\Str;
class EditCountryComponents extends Component
{

    public $name;
    public $block;
    public $status;
    public $cout_id;

    public function mount($id)
    {
        $country = country::find($id);
        $this->name = $country->country_name;
        $this->block= $country->block;
        $this->status= $country->status;
        $this->cout_id= $country->id;
    }
    public function render()
    {
        return view('livewire.admin.country.edit-country-components')->layout('layouts.admin');
    }

    public function update()
    {
        $country = country::find($this->cout_id);
        $country->country_name = $this->name;
        $country->country_slug = Str::slug($this->name);
        $country->block        = $this->block;
        $country->status       = $this->status;
        if ($country->save()) {
            $this->dispatchBrowserEvent('country_edit_show_message');
            return redirect()->route('admin.country');
        }
    }
}
