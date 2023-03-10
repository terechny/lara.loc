@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Posts List</h1>
        <div>
            @foreach($posts as $post)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="https://www.lawnext.com/wp-content/uploads/2021/12/2021-07-26_12_47_14_View_north_along_Interstate_95_John_F._Kennedy_Memorial_Highway-Delaware_Turnpike_crossing_into_Maple_Square_New_Castle_County_Delaware_from_Iron_Hill_Cecil_Count-169.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->text }}</p>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at }}</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection