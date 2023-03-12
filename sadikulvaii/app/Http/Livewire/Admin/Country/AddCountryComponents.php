<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\country;
use Livewire\Component;
use Illuminate\Support\Str;
class AddCountryComponents extends Component
{
    public $name;
    public $block;
    public $status;

    public function render()
    {
        return view('livewire.admin.country.add-country-components')->layout('layouts.admin');
    }

    public function save()
    {
        $country = new country();
        $country->country_name = $this->name;
        $country->country_slug = Str::slug($this->name);
        $country->block        = $this->block;
        $country->status       = $this->status;
        if ($country->save()) {
            $this->dispatchBrowserEvent('country_show_message');
            return redirect()->route('admin.country');
        }
    }
}
