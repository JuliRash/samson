@extends('layouts.setup')

@section('content')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Top 200 Distributors</h4>
                        <p class="card-title-desc">
                        </p>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Rank</th>
                                        <th>Distributor's Name</th>
                                        <th>Total Sales</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($fullData->count() > 0)
                                        @foreach ($fullData as $item)
                                            <tr>
                                                @php
                                                        $i =  $loop->iteration;
                                                @endphp

                                                @foreach ($item as $t)
                                                    <tr>
                                                       <td># {{ $i }}</td>
                                                       <td>{{ $t['name'] }}</td>
                                                       <td>{{ number_format($t['sales'], 2) }}</td>
                                                    </tr>
                                                @endforeach


                                            </tr>



                                            </tr>

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
