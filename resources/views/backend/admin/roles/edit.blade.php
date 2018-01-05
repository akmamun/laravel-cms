@extends('layouts.app')
@section('title', '| Edit Role')
@section('content')

    <div class='content-wrapper col-lg-12' style="min-height: 700px;">
        <div class="col-lg-4 col-lg-offset-2">
        <section class="content-header">
        <h1><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h1>
        </section>
            <hr>
        <section class="content">
        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Role Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <h5><b>Assign Permissions</b></h5>
        @foreach ($permissions as $permission)

            {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
            {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
        <br>
        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

        </section>
        </div></div>

@endsection