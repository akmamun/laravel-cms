{{-- \resources\views\permissions\create.blade.php --}}
@extends('layouts.app')
@section('title', '| Create Permission')

@section('content')

    <div class='content-wrapper col-lg-12 ' style="min-height: 700px;">
        <div class="col-lg-4 col-lg-offset-2">
        <section class="content-header">

        <h1><i class='fa fa-key'></i> Add Permission</h1>
        </section>
        <br>
        <section class="content">

        {{ Form::open(array('url' => 'permissions')) }}

        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', array('class' => 'form-control')) }}
        </div><br>
        @if(!$roles->isEmpty()){{--//If no roles exist yet--}}
        <h4>Assign Permission to Roles</h4>

        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
        @endif
        <br>
        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
        </section>

        </div></div>

@endsection