<div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All /</span> Category</h4>
                <!-- Basic Bootstrap Table -->
                <div class="card ">
                    <h5 class="card-header">Category Table</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Category Name</th>
                                    <th>Block</th>
                                    <th>Status</th>
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
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $category->category_name }}</strong></td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $category->block }}</strong></td>
                                        <td><span
                                                class="badge bg-label-primary me-1">{{ $category->status == '1' ? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td>
                                            <a class="btn rounded-pill btn-icon  btn-primary" href=" {{ route('admin.category.edit',['id' => $category->id]) }} "><i
                                                    class="bx bx-edit-alt me-1"></i> </a>

                                            <button class=" btn rounded-pill btn-icon btn-danger" wire:click.prevent ="deleteConfirmation({{ $category->id }} )" ><i
                                                        class="bx bx-trash me-1"></i></button>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
        </div>
    </div>
</div>
