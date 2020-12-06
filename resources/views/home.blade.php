@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <br><br>
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-12" style="padding: 9px 14px;background-color: #f7f7f9;border: 1px solid #e1e1e8;">
            <strong>{{ $post->title }}</strong> <span class="small">{{ $post->post_date }}</span>
        </div>
        <div class="col-md-12" style="padding: 15px 15px 15px;border-color: #e5e5e5 #eee #eee;border-style: solid;border-width: 1px 0;-webkit-box-shadow: inset 0 3px 6px rgba(0,0,0,.05);box-shadow: inset 0 3px 6px rgba(0,0,0,.05);">
            <div class="col-md-12 lead" style="padding-bottom:15px">{{ $post->summary }}</div>
            <div class="col-md-12">{{ $post->text }}</div>
        </div>
    </div>
    @endforeach
</div>
@endsection
