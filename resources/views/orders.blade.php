@extends('layouts.setup')

@section('content')
<div class="container">

       {{-- filter forms --}}
       <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Filter Orders</h4>
                    <p class="card-title-desc">Use this filter form to get Orders based on specific conditions</p>

                    <form class="form-inline" action="{{ route('order.report') }}">

                        <label class="sr-only" >Search</label>
                        <input type="text" class="form-control" name="search" placeholder="search..."> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                        <h6>Start Date  &nbsp; </h6>
                        <input type="date" class="form-control mt-3 mt-sm-0 mr-sm-4" id="inlineFormInputName2" name="start_date" placeholder="Email / Discord ID" value="{{request('search')}}">


                        <h6>End Date &nbsp; </h6>
                        <input type="date" class="form-control mt-3 mt-sm-0 mr-sm-3" id="inlineFormInputName2" name="end_date" placeholder="LION" value="{{ request('coin') }}">


                        <button type="submit" class="btn btn-primary mt-3 mt-sm-0 mr-sm-4">Filter</button>

                        <a href="{{ route('order.report') }}" class="btn btn-primary mt-3 mt-sm-0">Clear Filter</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- filter forms --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Total Orders  :  {{ $orders->total() }} </h4>
                    <p class="card-title-desc">
                        This is the list of supporters for coins you can filter by coin name
                    </p>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Invoice</th>
                                    <th>purchaser</th>
                                    <th>Distributor</th>
                                    <th>Referred Distributor</th>
                                    <th>Order Date</th>
                                    <th>Commission Percentage</th>
                                    <th>Order Total</th>
                                    <th>Commission</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($orders->count() > 0)
                                @foreach ($orders as $order)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->invoice_number }}</td>
                                    <td>{{ $order->purchaser->name ?? '' }}</td>
                                    <td>{{ $order->purchaser->distributor->name  ?? 'NIL' }}</td>
                                    <td>{{ totalDistributorsWithDate($order->order_date, $order->purchaser->distributor->id ?? null) }}</td>
                                    <td>{{ $order->order_date }}</td>
                                    @php
                                        $distributors = totalDistributorsWithDate($order->order_date, $order->purchaser->distributor->id ?? null);
                                        $totalPrice = totalPrice($order->id);
                                        $commission = $totalPrice * $distributors;
                                    @endphp
                                    <td>{{ percentage($distributors) . '%' }}</td>
                                    <td>{{ number_format($totalPrice, 2) }}</td>
                                    <td>{{ number_format($commission, 2) }}</td>
                                    <td><a href="{{ route('order.items', $order->id) }}">view items</a></td>
                                    </tr>
                                @endforeach
                                @else

                                   <p>No Data Found</p>
                                @endif

                            </tbody>
                        </table>
                        <div class="row">

                            <div class="mt-4 col-md-12 justify-content-end">
                                {{ $orders->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
