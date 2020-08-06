@extends('layouts.app')

@section('content')
    <div class="container">
    @foreach($posts as $post)

            <div class="row">
                <div class="col-xl-6 offset-3 py-2">
                    <div>
                        <div class="d-flex align-item-center">
                            <div class="pr-3">
                                <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width:40px;">
                            </div>

                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <p>
            <span class="font-weight-bold">

                <span>{{$post->caption}}</span>
            </span>
                    </p>
                </div>


            </div>


        <div class="row">

            <div class="col-xl-6 offset-3">
                <a href="/profile/{{$post->user->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>

            </div>
        </div>


    </div>



        @endforeach
<div class="row pt-2" >
    <div class="col-12 d-flex justify-content-center">
        {{$posts->links()}}
    </div>
</div>


    </div>
@endsection
