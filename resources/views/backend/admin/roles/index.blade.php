{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.app')
@section('title', '| Roles')

@section('content')

    <div class="content-wrapper col-lg-10 col-lg-offset-1" style="min-height: 700px;">
        <section class="content-header">
            <h1><i class="fa fa-key"></i> Manage Roles & Permissions </h1>

        </section>
            <hr>
        <div class="table-responsive">
            <section class="content">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),' ', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
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
