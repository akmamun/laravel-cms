{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Users')

@section('content')

    <div class="content-wrapper" style="min-height: 700px;">
        <div class="col-lg-12">
        <section class="content-header">
        <h1><a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
        </section>
        <hr>
        <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title" style="text-align: center">User Admistrations</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y') }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </section>
        </div>
    </div>

@endsection