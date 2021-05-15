@extends("layouts.app")

@section("title-blog")update record
@endsection


@section("content")
<h1>update record</h1>


<form action="{{route('contact-update-submit', $data->id)}}" method="post">
@csrf

    <div class="form-group">
    <label for="name">введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="email">введите Email</label>
    <input type="text" name="email" value="{{$data->email}}" placeholder="введите емаил" id="email" class="form-control">
    </div>
    <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="введите тему" id="subject" class="form-control">
    </div>

    <div class="form-group">
    <label for="messege">Cообщения</label><br>
    <textarea type="text" name="messege" placeholder="введите сообщение" id="message" class="form-control">{{$data->message}}
    </textarea>
    </div>

    <button type="submit" class="btn btn-success">update</button> 

</form>
@endsection