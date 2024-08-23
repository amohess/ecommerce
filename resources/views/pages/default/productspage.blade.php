<x-mylayouts.layout-default>

    @if ($product_data->isEmpty())
    <x-core.products-empty />

    @else

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-10 order-md-last">
                    <div class="row">

                        <x-core.products-search />
                        <x-core.products-filter />

                        @foreach ($product_data as $data)

                        <div class="col-sm-6 col-md-6 col-lg-4 ftco-animate">
                            <div class="product">
                                <a href="{{ $data->getLink() }}" class="img-prod"><img class="img-fluid"
                                        src="{{ $data->getImage() }}" alt="Colorlib Template">
                                    {{-- <span class="status">30%</span> --}}
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 px-3">
                                    <h3><a href="{{ $data->getLink() }}">{{ $data->title }}</a></h3>
                                    <div class="d-flex">
                                        <div class="m-0 p-0">
                                            <p class="text-large">
                                            <div><b>{{ $data->short_description }}</b></div>
                                            <div>{{ $data->category }}</div>

                                            {{-- <span class="price-sale">${{ $data->getPrice() }}</span> --}}
                                            </p>
                                        </div>
                                        {{-- <div class="rating">
                                            <p class="text-right">
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                                <a href="#"><span class="ion-ios-star-outline"></span></a>
                                            </p>
                                        </div> --}}
                                    </div>
                                    <p class="bottom-area d-flex px-3">
                                        <a href="{{ route('cart.addfromstorepage', ['id' => $data->id]) }}"
                                            class="add-to-cart text-center py-2 mr-1"><span>Purchase <i
                                                    class="ion-ios-add ml-1"></i></span></a>
                                        <a href="{{ $data->getLink() }}" class="buy-now text-center py-2">View</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    {{-- <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="col-md-4 col-lg-2 sidebar">
                    <div class="sidebar-box-2">
                        <h2 class="heading mb-4"><a href="#">MEDIUM</a></h2>
                        <ul>
                            @foreach ($category_data as $category)
                            <li><a href="{{ route('store.index', ['category' => $category]) }}">{{ $category }}</a></li>
                            @endforeach
                        </ul>
                    </div>


                    <div class="sidebar-box-2">
                        <h2 class="heading mb-4"><a href="#">SORT</a></h2>
                        <ul>
                            <li><a href="{{ route('store.index', ['sort' => 'category']) }}">Category</a></li>
                            <li><a href="{{ route('store.index', ['sort' => 'price_asc']) }}">Price (Low to High)</a>
                            </li>
                            <li><a href="{{ route('store.index', ['sort' => 'price_desc']) }}">Price (High to Low)</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <script type='text/javascript'>
        (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '4Y3jxCkztphLXacHD_c', {});
    </script>

    @endif

</x-mylayouts.layout-default>
