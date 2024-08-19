<x-mylayouts.layout-default>

    {{-- start edit --}}

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <div class="container my-5">
        <div class="text-center"></div>
        <a class="btn btn-primary" href="{{ route('order-history.index') }}">Return</a>
    </div>

    <body>
        <div class="container inv my-5 py-5">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <h1 class="font-weight-lighter py-1 px-3">INVOICE</h1>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-lg-6">
                    <h5 class="mb-0"><b>{{ $user->name }}</b></h5>
                    <p class="mb-0">{{ $address->line_1 . '; ' . $address->line_2 }}</p>
                    <p class="mb-0">{{ $address->city . '; ' . $address->state }}</p>
                    <p class="mb-0">{{ $address->contact }}</p>
                    <p class="mb-0">{{ $user->email }}</p>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Invoice No:</td>
                                        <td class="px-3">:</td>
                                        <td>{{ $order->order_no }}</td>
                                    </tr>
                                    <tr>
                                        <td>Order Date:</td>
                                        <td class="px-3">:</td>
                                        <td>{{ CustomHelper::dateToReadable($order->created_at) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method:</td>
                                        <td class="px-3">:</td>
                                        <td>Credit Card</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ITEM NAME</th>
                                <th scope="col">IMAGE</th>
                                <th scope="col">QTY</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>


                        <tbody>
                            @php($count = 1)
                            @foreach ($order->products as $product)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td><b>{{ $product->title }}</b></td>
                                <td><b><img style="width: 80px; height: 80px" src="{{ $product->getImage() }}"
                                            alt="Product Image"></b></td>
                                <td><b>{{ $product->pivot->quantity }}</b></td>
                                {{-- <td>{{ $product->pivot->price }}</td> --}}
                                <td><b>${{ $product->price }}</b></td>
                                <td><b>${{ CustomHelper::formatPrice($product->price * $product->pivot->quantity) }}</b>
                                </td>
                            </tr>

                            @endforeach

                            <tr>
                                <td colspan="4"></td>
                                <td><b>SUBTOTAL</b></td>
                                <td><b>${{ CustomHelper::formatPrice($order->subtotal) }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="4"></td>
                                <td><b>DISCOUNT @ 0%</b></td>
                                <td><b>$0</b></td>
                            </tr>
                            <tr style="background: #E6E4E7; color: #0099D5;">
                                <td colspan="4"></td>
                                <td><b>TOTAL</b></td>
                                <td><b>${{ CustomHelper::formatPrice($order->total) }}</b></td>
                            </tr>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </body>

</x-mylayouts.layout-default>
