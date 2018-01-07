@extends('layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 700px;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Posts</h3></div>
                    <div class="panel-heading">Page {{ $pages->currentPage() }} of {{ $pages->lastPage() }}</div>
                    @foreach ($pages as $page)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('pages.show', $page->id ) }}"><b>{{ $page->title }}</b><br>
                                    <p class="teaser">
                                        {{  str_limit($page->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {!! $pages->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection