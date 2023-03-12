<div>
    <div>
        @include('livewire.front.inc.header')
                 <!-- fashion section start -->

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
                   <div id="main_slider" class="carousel slide" data-ride="carousel">
                       <div class="container">
                           <h1 class="fashion_taital">New Product</h1>
                           <div class="fashion_section_2">
                              <div class="row">
                                <div class="col-md-4">
                                    <div class="tshirt_img"><img style="height:300px;" src="{{ asset('uploads/'.$productDetails->image) }}"></div>
                                </div>
                                   <div class="col-lg-4 col-sm-4 md-5">
                                       <div class="box_main">
                                       <h4 class="shirt_text">{{ $productDetails->name }}</h4>
                                       <p class="price_text">Price:  <span style="color: #262626;">$ {{ $productDetails->price }}</span></p>
                                       <div class="btn_main">
                                           <div class="buy_bt float-end"><a href="#" wire:click.prevent ="store({{$productDetails->id}} , ' {{ $productDetails->name}} ',  {{ $productDetails->price}})">Buy Now</a></div>
                                        </div>
                                       </div>
                                   </div>
                              </div>
                           </div>
                        </div>
                   </div>
                </div>


       </div>

</div>
