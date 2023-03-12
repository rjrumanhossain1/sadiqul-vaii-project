<?php

namespace App\Http\Livewire\Admin;

use App\Models\country;
use Livewire\Component;
use Livewire\WithPagination;
class CountryComponents extends Component
{
    use WithPagination;
    public function render()
    {
        $country = country::orderBy('id','desc')->paginate(10);
        return view('livewire.admin.country-components',['countries' => $country])->layout('layouts.admin');
    }


    public $deleteId;

    protected $listeners = ['deleteConfirmed' => 'destroy'];
    public function deleteConfirmation($id)
    {
        $this->deleteId = $id;
        $this->dispatchBrowserEvent('show-delete');
    }

    public function destroy()
    {
        country::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('show-delete-message');
        return redirect()->back();
    }
}
