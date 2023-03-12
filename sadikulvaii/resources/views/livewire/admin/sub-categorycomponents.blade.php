<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All /</span> Sub Category</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
          <h5 class="card-header">Sub Category Table</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>SL.</th>
                  <th>Category Name</th>
                  <th>Category</th>
                  <th>Alert</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @php
                    $i = 1
                @endphp
                @foreach ($subcategories as $subcategory)
                <tr>
                    <td>{{ $i++ }}</td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $subcategory->sub_category_name }}</strong></td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $subcategory->category->category_name }}</strong></td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $subcategory->alert=="1"?'Active':'Inactive' }}</strong></td>
                  <td><span class="badge bg-label-primary me-1">{{ $subcategory->status=="1"?'Active':'inactive' }}</span></td>
                  <td>
                    <a class="btn btn-primary" href="{{ route('admin.subcategory.edit',['id' => $subcategory->id]) }} "><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <button class="btn btn-danger" href="javascript:void(0);" wire:click.prevent="Confirmdelete({{ $subcategory->id }})"><i class="bx bx-trash me-1"></i> Delete</button>

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

@section('scripts')

@endsection
