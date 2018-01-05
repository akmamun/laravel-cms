@extends('layouts.app')

@section('title', '| Add Pages')

@section('content')

    <div class='content-wrapper col-lg-12' style="min-height: 700px;">
        <div class="col-lg-5 col-lg-offset-2">
            <section class="content-header">
                <h1><i class='fa fa-user-plus'></i> Add Page</h1>
            </section>
            <hr>
            <section class="content">

    {{ Form::open(array('url' => '')) }}

    <div class="form-group">
        {{ Form::label('title', 'Page Title') }}
        {{ Form::text('title', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('page_slug', 'Page Slug') }}
        {{ Form::text('page_slug', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Page Description') }}
        {{ Form::text('description', '', array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('image', 'Upload Background Image') }}
        {{ Form::file('image') }}
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}


    {!! Form::close() !!}
            </section>

        </div>
    </div>
@endsection