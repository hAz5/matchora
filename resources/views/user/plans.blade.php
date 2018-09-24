@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-header">
                    <h3 class="card-title">Plans</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Period</th>
                            <th>Option</th>
                        </tr>
                        <tbody>
                        @foreach($plans as $key => $plan)
                            <tr>
                                <td>{{ $key++ }}</td>
                                <td>{{ __($plan->name) }}</td>
                                <td>{{ __($plan->period) }}</td>
                                <td>
                                    <a class="btn btn-success btn-lg" href="#">
                                        <i class="fa fa-cart-plus"></i>{{ __('Reserve') }}
                                    </a>
                                    <a class="btn btn-info btn-lg" href="#">
                                        <i class="fa fa-infocart-plus"></i>{{ __('Info') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
