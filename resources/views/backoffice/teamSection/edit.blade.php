
@extends('template.mainB')

@section('content')
    

<form enctype="multipart/form-data" action="{{route("team.update", $team->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Url:</label>
    <input type="file" name="url" value="{{$team->url}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="name" value="{{$team->name}}">
    <br>
    <label for="">Job :</label>
    <input type="text" name="job" value="{{$team->job}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection