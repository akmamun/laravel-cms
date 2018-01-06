@extends('layouts.app')
@section('title', '| Add Role')

@section('content')

    <div class='content-wrapper col-lg-12' style="min-height: 700px;">
        <div class="col-lg-4 col-lg-offset-2">
    <section class="content-header">
        <h1><i class='fa fa-key'></i> Assign User Role </h1>
    </section>
        <hr>

        <section class="content">

        {{ Form::open(array('url' => 'roles')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <h5><b>Assign Permissions</b></h5>

        <div class='form-group'>
            @foreach ($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

            @endforeach
        </div>

        {{ Form::submit('Save User Role', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
        </section>
        </div></div>

@endsection