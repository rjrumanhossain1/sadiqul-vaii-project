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
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">List</span> Products</h4>

                        <div class="card p-2">
                            <h5 class="card-header">Product</h5>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>SL.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub-Category</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($products as $product )
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>
                                            <img style="width:120px; height:100px;" src=" {{ asset('uploads/'.$product->image) }}" alt="">
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->subcategory->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->qty }}</td>
                                        <td><span class="badge bg-label-primary me-1">{{ $product->status }}</span></td>
                                        <td>
                                            <a class=" btn rounded-pill btn-icon btn-primary" href="{{ route('admin.edit.product', ['id' => $product->id]) }}"><i class="bx bx-edit-alt me-1"></i></a>
                                            <a class=" btn rounded-pill btn-icon btn-danger" href=""><i class="bx bx-trash me-1"></i></a>

                                        </td>
                                      </tr>
                                    @endforeach

                                </tbody>

                              </table>
                              {{ $products->links() }}
                            </div>
                          </div>


                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
