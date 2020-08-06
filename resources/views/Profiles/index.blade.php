@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-1 col-xl-2 p-2">
            <img src="{{$user->profile->ProfileImage()}}" class="rounded-circle w-100"  >
        </div>
        <div class="col-xl-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-item-center pb-3">
                    <div class="h4">{{$user->username}} </div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can ('update', $user->profile)
                <a href="/p/create">Add new post</a>
                @endcan

            </div>
            @can ('update', $user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> Posts</div>
                <div class="pr-4"><strong>{{$user->profile->followers->count()}}</strong> Follower</div>
                <div class="pr-4"><strong>{{$user->following->count()}}</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="{{$user->profile->url}}" target="_blank"> {{$user->profile->url}} </a></div>

        </div>
    </div>
    <div class="row pt-2 m-2">

            @foreach($user->posts as $post)
              <div class="col-4 py-2">
                  <a href="/p/{{$post->id}}">
                     <img src="/storage/{{$post->image}}" class="w-100">
                  </a>
              </div>
           @endforeach

    </div>



</div>
@endsection
