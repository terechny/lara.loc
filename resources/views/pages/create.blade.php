@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Create</h1>

        <div class="col-sm-4">

        <form action="/post" method="POST">
            
            <div class="form-group">
                <label> Title </label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label> Text </label>
                <textarea class="form-control" name="text"> </textarea>
            </div>
            <div class="form-group">
                <label> Category </label>
                <select class="form-select" name="category" id="">
                    <option value="1">News</option>
                </select>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">add</button>
        </form>

          </div>
    </div>
</div>
@endsection