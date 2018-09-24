@extends('admin.master')

@section('css')
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="header-title m-t-0"><b>مدریت مسابقات</b></h4>
                <p class="text-muted m-b-30 font-13">
                    لیست مسابقات، ویرایش، حذف
                </p>


                <div id="jsGrid"></div>
                {{--<table class="table table-hover table-striped">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>#</th>--}}
                        {{--<th>میزبان</th>--}}
                        {{--<th>مهمان</th>--}}
                        {{--<th>لیگ</th>--}}
                        {{--<th>تاربخ</th>--}}
                        {{--<th>پیشبینی</th>--}}
                        {{--<th>وضعیت</th>--}}
                        {{--<th>نتیجه</th>--}}
                        {{--<th>type</th>--}}
                        {{--<th></th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($matches as $key => $match)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $key+1 }}</td>--}}
                            {{--<td>{{ $match->host }}</td>--}}
                            {{--<td>{{ $match->guest }}</td>--}}
                            {{--<td>{{ $match->league }}</td>--}}
                            {{--<td>{{ $match->date }}</td>--}}
                            {{--<td>{{ $match->prediction }}</td>--}}
                            {{--<td>{{ $match->status }}</td>--}}
                            {{--<td>{{ $match->result }}</td>--}}
                            {{--<td>{{ $match->type }}</td>--}}
                            {{--<td>--}}
                                {{--<a href="{{ route('match.edit', $match->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i> </a>--}}
                                {{--<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> </a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/match/const.js') }}"></script>
    <script>
        var clients = '{!! $matches !!}';
        clients = JSON.parse(clients);

        $("#jsGrid").jsGrid({
            width: "100%",
            height: "100%",

            inserting: true,
            editing: true,
            sorting: true,
            paging: true,
            filtering: true,

            data: clients,
            onItemUpdating: function(args) {
                args.item._token = "{{ csrf_token() }}";
                args.item._method = "PUT";
                $.post(
                    "{{ route('match.index') }}" + "/" + args.item.id,
                    args.item,
                    function (jqXHR, data){
                        console.log(jqXHR, data);
                    }
                )
            },
            onItemInserting: function(args) {
                args.item._token = "{{ csrf_token() }}";
                args.item._method = "POST";
                $.post(
                    "{{ route('match.index') }}",
                    args.item,
                    function (jqXHR, data){
                        console.log(jqXHR, data);
                    }
                )
            },
            onItemDeleting: function(args) {
                args.item._token = "{{ csrf_token() }}";
                args.item._method = "DELETE";
                $.post(
                    "{{ route('match.index') }}" + "/" + args.item.id,
                    args.item
                ).success(function (jqXHR, data){
                    console.log(data);
                }).error(function () {
                    args.cancel = true;
                })
            },
            fields: [
                { name: "host", type: "text", validate: "required" },
                { name: "guest", type: "text", validate: "required"},
                { name: "league", type: "text", validate: "required"},
                { name: "date", type: "text", validate: "required"},
                { name: "prediction", type: "text"},
                { name: "status", type: "select", items: match_statuses, valueField: "Name", textField: "Name" },
                { name: "result", type: "select", items: match_result, valueField: "value", textField: "Name" },
                { name: "type", type: "select", items: match_type, valueField: "Name", textField: "Name" },
                // { name: "description", type: "text", width:"200px", overflow:"hidden"},
                { type: "control" }
            ]
        });
    </script>
@endsection
