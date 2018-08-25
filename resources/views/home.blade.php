@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title"><b>پیشبینی های رایگان امروز</b></h4>
                        <p class="text-muted font-13">
                        </p>

                        <div class="p-20">
                            <table class="table table-striped m-0 table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>لیگ </th>
                                    <th>میزبان</th>
                                    <th>مهمان</th>
                                    <th>پیشبینی</th>
                                    <th>نتیجه</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($matches as $key => $match)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $match->league }}</td>
                                    <td>{{ $match->host }}</td>
                                    <td>{{ $match->guest }}</td>
                                    <td>{{ $match->prediction }}</td>
                                    <td>{{ $match->result }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
