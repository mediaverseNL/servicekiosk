@extends('layouts.panel')

@section('title', 'ticket')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="#" class="list-group-item">Systemen</a>
                    <a href="#" class="list-group-item">Account</a>
                    <a href="#" class="list-group-item">Facturering</a>
                    <a href="{{route('panel.ticket')}}" class="list-group-item active">Tickets</a>
                </div>
            </div>
            <div class="col-sm-9 pull-right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tickets
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ref. nr.</th>
                                <th>Titel</th>
                                <th>Aangemaakt</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ticket as $t)
                                <tr>
                                    <td>
                                        {!! $t->id !!}
                                    </td>
                                    <td>
                                        {!! $t->titel !!}
                                    </td>
                                    <td>
                                        {!! $t->created_at !!}
                                    </td>
                                    <td>
                                        {!! $t->status !!}
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-default pull-right">Bekijken</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('css')
<style>

</style>
@endpush

@push('js')
<script>

</script>
@endpush