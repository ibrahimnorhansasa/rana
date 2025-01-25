@extends('front.layout')
@section('content')

<main>

    <div class="container content-container" id="post">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="m-0" style="border-bottom: 1px solid;padding: 4px;">التدوينات</h3>
            <span class="badge">25</span>
        </div>

        <!-- Post Card 1 -->

        @foreach($posts as $post)

        <div class="post-card">
            <a href="{{route('posts.show',$post->id)}}" style="display: contents;">

                @if($post->image !=null)
                <img src="{{asset('public/assets/images/posts/'.$post->image)}}" alt="Post Image"
                    style="height:200px;width:300px">

                @else
                <p style=""></p>
                @endif
                <div class="content">
                    <h3 class="post-title">{{$post->title}}</h3>
                    <p class="post-date">{{$post->date}}</p>
                    <p class="post-text">{{$post->text}}</p>
                </div>
            </a>
        </div>

        @endforeach

   
    </div>

    <div class="container" style="border-bottom: 1px solid;padding: 30px;width: 65%;margin: auto;"></div>

    <section class="py-5 text-center container" id="recommend">
        @foreach(($recommends)->chunk(3) as $recos)

        <div class="row">
            @foreach($recos as $recommend)
            <div class="col-md-4">
                <div class="blog-card">
                    <a href="{{route('recommends.show',$recommend->id)}}" style="display: contents;">

                        @if($recommend->image!=null)
                        <img src="{{asset('public/assets/images/recommends/'.$recommend->image)}}" style="height:200px;"
                            alt="Post Image">
                        @else
                        <p style="height:200px"></p>
                        @endif
                        <div class="blog-card-body">
                            <h5 class="blog-card-title"> {{$recommend->title}}</h5>
                            <p class="blog-card-date">{{$recommend->date}}</p>
                            <p class="blog-card-text"> {{$recommend->text}}</p>
                        </div>
                    </a>
                </div>
            </div>
   

            @endforeach
        </div>
        @endforeach
    </section>





</main>
@endsection