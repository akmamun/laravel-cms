@extends('layouts.app')

@section('title', '| Create New Page')

@section('content')
    <div class="content-wrapper col-lg-12" style="min-height: 700px;">
        <div class="col-md-6 col-md-offset-2">
            <h1>Create New Page</h1>
            {{ Form::open(array('route' => 'pages.store')) }}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'Slug Field') }}
                {{ Form::text('slug', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Description</h3>
                    </div>
                    <div class="box-body pad">
                        <textarea id="editor1" name="body" rows="4" cols="50"
                                  style="visibility: hidden; display: none;"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="image">Upload Background</label>
                <input type="file" id="image" name="background">
                <p class="help-block">PNG JPG IMAGE</p>
            </div>
            <div class="form-group">
                {{ Form::submit('Create Post', array('class' => 'btn btn-success')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection