<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Add /</span> Category</h4>


        <form  wire:submit.prevent="update">
            <!-- Form controls -->
            <div class="card ">

                <input type="hidden" wire:model="cout_id">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Country Name <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="">
                                @if($errors->has('name'))
                                 <span style="color: red">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Country Block</label>
                                <select class="form-select" id="exampleFormControlSelect1" wire:model ="block"
                                    aria-label="Default select example">
                                    <option selected="" disabled >Select block</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <!-- Input Sizing -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                <select class="form-select" wire:model="status" id="exampleFormControlSelect1"
                                    aria-label="Default select example">
                                    <option selected >Status</option>
                                    <option value="1" >Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <div class="mb-3">
                               <button class="btn btn-success float-end"> Update </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('custom_scripts')


@endsection
