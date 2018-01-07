@extends('layouts.app')
@section('title', '| Create New Post')
@section('content')
    <div class="content-wrapper col-lg-12" style="min-height: 700px;">
        <section class="content-header">
            <h1>Create New Post</h1>
        </section>
        <section class="content">
            <div class="col-lg-6 col-lg-offset-2">
                {{ Form::open(array('route' => 'posts.store')) }}
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('slug', 'Slug Field') }}
                    {{ Form::text('slug', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    <label for="image">Header Background</label>
                    <input type="file" id="image">
                    <p class="help-block">PNG JPG IMAGE</p>
                </div>
                <div class="form-group">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Post Details</h3>
                        </div>
                        <div class="box-body pad">
                        <textarea id="editor1" name="editor1" rows="5" cols="50"
                                  style="visibility: hidden; display: none;"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('category', 'Category Post') }}
                    {{ Form::text('slug', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Create Post', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </section>
    </div>
@endsection
