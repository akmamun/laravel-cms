{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

    <se class="content-wrapper col-lg-12 col-lg-offset-1" style="min-height: 700px;">
        <section class="content-header">
        <h1><i class="fa fa-key"></i>Available Permissions</h1>

        </section>
            <hr>
        <div class="table-responsive">
            <section class="content">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 5px;">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </section>
        </div>
    </div>

@endsection
