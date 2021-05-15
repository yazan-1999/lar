@extends("layouts.app")

@section("title-blog")All messages
@endsection

@section("content")
<h1>all messages</h1>
@foreach($data as $el)
<div class="alert alert-info">
    <h3>{{ $el->subject }}</h3>
    <p>{{ $el->email }}</p>
    <p><small>{{ $el->creates_at }}</small></p>
    <a href="{{ route('contact-data-one',$el->id) }}"><button class="btn btn-warning">detailed</button></a>
</div>
@endforeach
@endsection