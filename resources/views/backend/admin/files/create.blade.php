@extends('layouts.app')

@section('title', '| File Page')

@section('content')
    <div class="content-wrapper col-lg-12" style="min-height: 700px;">
        <div class="col-md-6 col-md-offset-2">
            <h1>Add File</h1>
            <div class="form-group">
                <label for="image">File input</label>
                <input type="file" id="image">
                <p class="help-block">PNG JPG IMAGE</p>
            </div>
            </div>
        </div>
    </div>
@endsection