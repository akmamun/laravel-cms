@extends('layouts.app')
@section('title', '| Edit Permission')
@section('content')
    <div class='content-wrapper col-lg-12' style="min-height: 700px;">
        <div class="col-lg-4 col-lg-offset-2">

            <section class="content-header">

                <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
            </section>
            <br>
            <section class="content">
                {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

                <div class="form-group">
                    {{ Form::label('name', 'Permission Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>
                <br>
                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </section>

        </div>
    </div>
@endsection