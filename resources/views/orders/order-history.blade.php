<x-mylayouts.layout-default>

    @if ($order_data->isEmpty())
    <x-core.orders-empty />

    @else

    <div class="container my-5">
        <div class="card">
            <div class="card-body">


                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Order #</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php($count = 1)
                        @foreach ($order_data as $order)


                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ CustomHelper::dateToReadable($order->created_at) }}</td>
                            <td>${{ $order->total }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('order-history.show', ['id' =>$order->id]) }}">Details</a>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @endif


</x-mylayouts.layout-default>
