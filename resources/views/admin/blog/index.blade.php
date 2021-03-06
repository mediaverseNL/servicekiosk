@extends('layouts.admin')

@section('title', 'Nieuws')

@section('content')

    <!-- /.row -->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Titel</th>
                                    <th>Aangemaakt</th>
                                    <th>Door</th>
                                    <th>Opties</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blog as $b)
                                    <tr>
                                        <td>
                                            {!! $b->titel !!}
                                        </td>
                                        <td>
                                            {!! $b->created_at !!}
                                        </td>
                                        <td>
                                            {!! $b->user->name !!}
                                        </td>
                                        <td>
                                            <div class="__web-inspector-hide-shortcut__">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                        Opties
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li>
                                                            <a href="{!! route('admin.blog.update', $b->id) !!}">Wijzigen</a>
                                                        </li>
                                                        <li>
                                                            <a href="{!! route('admin.blog.delete', $b->id) !!}">Verwijderen</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{!! route('admin.blog.create') !!}" class="btn btn-default">Nieuw</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">

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