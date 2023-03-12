<div>
    <div>
        <style>
            svg{
                width: 20px;
                height: 20px;
            }
        </style>
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <form wire:submit.prevent="store">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Product</h5>
                        </div>
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <div>
                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                <div class="col-md-6 ">

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Product Name</label>
                                        <input type="text" class="form-control" id="basic-default-fullname" wire:model="name" placeholder="Product Name">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Category</label>
                                        <select id="defaultSelect" class="form-select" wire:model="category">
                                        <option>Select Category</option>
                                        @foreach ($categories  as $category)
                                        <option value=" {{ $category->id }} ">{{ $category->name }}</option>
                                        @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Sub Category</label>
                                        <select id="defaultSelect" class="form-select" wire:model="subcategory">
                                        <option>Select Category</option>
                                        @foreach ($subcategoris  as $subcategory)
                                        <option value=" {{ $subcategory->id }} ">{{ $subcategory->name }}</option>
                                        @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Product Price</label>
                                        <input type="number" class="form-control" id="basic-default-fullname" wire:model="price" placeholder="202">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Product Quantity</label>
                                        <input type="number" class="form-control" id="basic-default-fullname" wire:model="qty" placeholder="10">
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">short Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="sdesc"></textarea>
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" wire:model="ldesc"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Image Upload</label>
                                        <input class="form-control" wire:model="image" type="file" id="formFile">
                                        @if($image)
                                            <img src="{{ $image->temporaryUrl() }} " alt="" style="width:100px;margin-top:10px;">
                                        @endif
                                    </div>
                                    <div class="form-check form-switch mb-2 mt-4">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                         <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" wire:model='status' checked="">
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
