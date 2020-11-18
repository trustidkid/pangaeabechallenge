@extends('layouts.app')

@section('content')

<div class="jumbotron">

    <div class="form-group">
        {{ session()->get($data->url )}}
    </div>
    <div>
        {{ $data->topic ?? "" }}
    </div>

</div>

@endsection
