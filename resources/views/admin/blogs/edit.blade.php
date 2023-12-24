@extends('admin.admin')
@section('title', 'المقاﻻت')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Blogs') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Add Blog') }}
                            </p>
                            <form method="POST" action="{{ route('blog.update' , $blog->id) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.title_in_ar') }}</label>
                                    <input type="text" value="{{ $blog->title_ar }}" name="title_ar" class="form-control"
                                        placeholder="{{ __('custom.title_in_ar') }}">
                                    @error('title_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.title_in_en') }}</label>
                                    <input type="text" value="{{ $blog->title_en }}" name="title_en" class="form-control"
                                        placeholder="{{ __('custom.title_in_en') }}">
                                    @error('title_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.content_in_ar') }}</label>
<textarea class="form-control" name="content_ar" placeholder="{{ __('custom.content_in_ar') }}"  cols="30" rows="10">{{$blog->content_ar}}</textarea>                                    
                                    @error('content_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.content_in_en') }}</label>
<textarea class="form-control" name="content_en" placeholder="{{ __('custom.content_in_en') }}" cols="30" rows="10">{{ $blog->content_en }}</textarea>       
                                    @error('content_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Image') }}</label>
                                    <input type="file" name="image" class="form-control"
                                        placeholder="{{ __('custom.Image') }}">
                                    @error('image')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <br>
                                <img src="{{ asset('images/' . $blog->image) }}" width="100px" height="100px"
                                    alt="">
                                <br><br>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
