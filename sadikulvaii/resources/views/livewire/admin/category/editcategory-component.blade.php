<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Basic Inputs</h4>


        <form  wire:submit.prevent="update">
            <!-- Form controls -->
            <div class="card ">
                    <input type="hidden" wire:model="cat_id">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Category Name <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" wire:model="category_name" id="exampleFormControlInput1" placeholder="">
                                @if($errors->has('category_name'))
                                 <span style="color: red">{{ $errors->first('category_name') }}</span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Category Block</label>
                                <select class="form-select" id="exampleFormControlSelect1" wire:model ="block"
                                    aria-label="Default select example">
                                    <option selected="" disabled >Select block</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1"  class="form-label">Category Description</label>
                                <textarea class="form-control" wire:model="metadescript" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Input Sizing -->
                        <div class="col-md-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Meta title</label>
                                <input type="text" class="form-control" wire:model="metatitle"  id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1"  class="form-label">Meta Description</label>
                                <textarea class="form-control" wire:model="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

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
