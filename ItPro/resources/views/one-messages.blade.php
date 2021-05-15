@extends("layouts.app")

@section("title-blog"){{$data->subject}}
@endsection

@section("content")
<h1>{{$data->subject}}</h1>
<div class="alert alert-info">
    <p>{{$data->message}}</p>
    <p>{{ $data->name }}-{{ $data->email }}</p>
    <p><small>{{ $data->creates_at }}</small></p>
    <a href="{{ route('contact-update',$data->id) }}"><button class="btn btn-primary">edit</button></a>
    <a href="{{ route('contact-delete',$data->id) }}"><button class="btn btn-danger">delete</button></a>
</div>
@endsection