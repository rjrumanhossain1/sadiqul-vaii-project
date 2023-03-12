<div>
    @include('livewire.front.inc.header')
             <!-- fashion section start -->
             <div class="fashion_section">
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                   <div class="container">
                       <div class="fashion_section">
                           <div class="col-md-12">
                               @if (session()->has('message'))
                               <ul>
                                   <li class="alert alert-success">
                                       {{ session('message') }}
                                   </li>
                               </ul>
                               @endif
                       </div>

                       <h1 class="fashion_taital">New Product</h1>
                       <div class="fashion_section_2">
                          <div class="row">

                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                       <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>price</th>
                                            <th>Quantity</th>
                                            <th>Remove</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    @if(Cart::count() > 0)
                                        @foreach (Cart::content() as $item)
                                        <tr>
                                            <td> <img style="width:180px;" src=" {{ asset('uploads') }}/{{ $item->model->image }} " alt=""> </td>
                                            <td>{{ $item->model->name }}</td>
                                            <td>{{ $item->model->price }} </td>
                                            <td><span class="btn btn-success btn-sm" style=" margin-right:5px;" wire:click.prevent="qtyupdate('{{ $item->rowId}}')">+</span>
                                                <input type="number" value="{{ $item->qty; }}">
                                                <span class="btn btn-danger btn-sm" style=" margin-right:5px;" wire:click.prevent="qtyupdateDec('{{ $item->rowId}}')">-</span>
                                            </td>
                                            <td class="btn btn-danger btn-sm" wire:click.prevent="removeCart('{{ $item->rowId }}')">Remove</td>
                                        </tr>
                                        @endforeach
                                    <hr>
                                   <h2> Total: {{ Cart::total() }}</h2>
                                   @else
                                        <h1>Cart No Item</h1>
                                   @endif

                                    </tbody>

                                </table>
                            </div>


                          </div>
                       </div>
                    </div>
               </div>
            </div>

   </div>
