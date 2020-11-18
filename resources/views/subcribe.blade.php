@extends('layouts.app')

@section('content')

<div class="jumbotron">

    <form action="{{ route('subscribe', ['id' => $ids]) }}" method="post" >
    @csrf
    <div class="form-group">

        <label for="uname">URL</label>
        <input type="text" class="form-control" id="url" name="url" value ="{{ $classes['name'] ?? "" }}" placeholder="Enter username" required>
    </div>
</div>

<div> <input type='submit' name="submit"> </div>
 </form>


@endsection
