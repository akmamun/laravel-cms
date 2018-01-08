@extends('layouts.app')
@section('title', '| Edit User')
@section('content')

    <div class='content-wrapper col-lg-12 'style="min-height: 700px;" >

     <div class='col-lg-4 col-lg-offset-2'>
         <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
         <hr>
         {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}
         <div class="form-group">
             {{ Form::label('name', 'Name') }}
             {{ Form::text('name', null, array('class' => 'form-control')) }}
         </div>
         <div class="form-group">
             {{ Form::label('email', 'Email') }}
             {{ Form::email('email', null, array('class' => 'form-control')) }}
         </div>
         <h5><b>Give Role</b></h5>
         <div class='form-group'>
             @foreach ($roles as $role)
                 {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                 {{ Form::label($role->name, ucfirst($role->name)) }}<br>
             @endforeach
         </div>
         {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
         {{ Form::close() }}
    </div>
    </div>

@endsection