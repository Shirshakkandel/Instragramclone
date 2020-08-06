@extends('layouts.app')

@section('content')
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                    <input id="caption" type="caption" class="form-control @error('caption') is-invalid @enderror"
                           name="caption" value="{{ old('caption') }}"  autocomplete="caption">

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>




                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input id="file" type="file" class="input-group"
                           name="image"  autocomplete="file">

                    @error('image')
                    <strong>{{$message}}</strong>
                    @enderror
                </div>


                <div class="form-group row">


                    <input  type="submit" class="btn btn-primary"
                            name="file" value="Add New Posts"  autocomplete="file">

                    @error('file')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


            </div>
        </div>


    </form>
</div>
@endsection
