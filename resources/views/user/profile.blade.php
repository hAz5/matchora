@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="card-header">
                    <h3>change Detail</h3>
                </div>
                <div class="card-body">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>

@endsection
