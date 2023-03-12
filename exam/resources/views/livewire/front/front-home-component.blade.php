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

                        @foreach ($products as $product)
                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                <h4 class="shirt_text">{{ $product->name }}</h4>
                                <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->price }}</span></p>
                                <div class="tshirt_img"><img style="height:300px;" src="{{ asset('uploads/'.$product->image) }}"></div>
                                <div class="btn_main">
                                    <div class="buy_bt"><a href="#"wire:click.prevent ="store({{$product->id}} , ' {{ $product->name}} ',  {{ $product->price}})">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="{{ route('product.details',['slug'=>$product->slug]) }}">See More</a></div>
                                </div>
                                </div>
                            </div>
                        @endforeach


                       </div>
                    </div>
                 </div>
            </div>
         </div>
         <!-- fashion section end -->
         <!-- electronic section start -->
         <div class="fashion_section">
            <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="fashion_taital">All</h1>
                        <div class="fashion_section_2">
                           <div class="row">
                            @foreach ($allproducts as $product)
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                    <h4 class="shirt_text">{{ $product->name }}</h4>
                                    <p class="price_text">Price  <span style="color: #262626;">$ {{ $product->price }}</span></p>
                                    <div class="tshirt_img"><img style="height:300px;" src="{{ asset('uploads/'.$product->image) }}"></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#" wire:click.prevent ="store({{$product->id}} , ' {{ $product->name}} ',  {{ $product->price}})">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="{{ route('product.details',['slug'=>$product->slug]) }}">See More</a></div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach

                           </div>
                        </div>
                     </div>
                  </div>


               </div>

            </div>
         </div>

</div>
