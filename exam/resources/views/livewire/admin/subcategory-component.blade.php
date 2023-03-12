<div>
    <style>
        svg{
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
                                <th>SubCategory</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($subcategories as $subcategory )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $subcategory->name }}</td>
                                    <td>{{ $subcategory->category->name }}</td>
                                    <td><span class="badge bg-label-primary me-1">{{ $subcategory->slug }}</span></td>
                                    <td>
                                        <a class=" btn rounded-pill btn-icon btn-primary" href=""><i class="bx bx-edit-alt me-1"></i></a>
                                        <a class=" btn rounded-pill btn-icon btn-danger" href=""><i class="bx bx-trash me-1"></i></a>

                                    </td>
                                  </tr>
                                @endforeach

                            </tbody>

                          </table>
                          {{ $subcategories->links() }}
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
                                    <label for="defaultSelect" class="form-label">Category</label>
                                    <select id="defaultSelect" class="form-select" wire:model="category">
                                      <option>Select Category</option>
                                      @foreach ($categories  as $category)
                                      <option value=" {{ $category->id }} ">{{ $category->name }}</option>
                                      @endforeach

                                    </select>
                                </div>
                              <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Category Name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" wire:model="name" placeholder="John Doe">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
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
