@extends('layouts.setup')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total Orders  :  </h4>
                    <p class="card-title-desc">
                        This is the list of supporters for coins you can filter by coin name
                    </p>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>SKU</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($items->count() > 0)
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->order_id }}</td>
                                        <td>{{ $item->product->name ?? '' }}</td>
                                        <td>{{ number_format($item->product->price, 2) }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->product->price, 2) }}</td>
                                    </tr>
                                @endforeach
                                @else

                                   <p>No Data Found</p>
                                @endif

                            </tbody>
                        </table>
                        <div class="row">


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
