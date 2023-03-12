<div>

    <style>
        svg {
            width: 20px;
            height: 20px;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List</span> Category</h4>

                    <div class="card p-2">
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>SL.</th>
                                        <th>Category</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $category->name }}</td>

                                            <td><span class="badge bg-label-primary me-1">{{ $category->slug }}</span>
                                            </td>
                                            <td>
                                                <button class=" btn rounded-pill btn-icon btn-primary" wire:click="editFrom({{ $category->id }})"><i
                                                        class="bx bx-edit-alt me-1"></i></button>
                                                <button class=" btn rounded-pill btn-icon btn-danger" wire:click.prevent ="deleteConfirmation({{ $category->id }} )" ><i
                                                        class="bx bx-trash me-1"></i></button>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                            {{ $categories->links() }}
                        </div>
                    </div>


                </div>
                <div class="col-md-5">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Create a New</span> Category</h4>
                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Basic Layout</h5>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="store">
                                    <div>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Category Name</label>
                                        <input type="hidden" wire:model="hiddenId">
                                        <input type="text" class="form-control" id="basic-default-fullname"
                                            wire:model="name" placeholder="John Doe">
                                        @error('email')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
