@extends('admin.admin')
@section('title', 'النبذة')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.About') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Add About') }}
                            </p>
                            <form method="POST" action="{{ route('about.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.title_in_ar') }}</label>
                                    <input type="text" name="title_ar" class="form-control"
                                        placeholder="{{ __('custom.title_in_ar') }}">
                                    @error('title_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.title_in_en') }}</label>
                                    <input type="text" name="title_en" class="form-control"
                                        placeholder="{{ __('custom.title_in_en') }}">
                                    @error('title_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>






                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.imagedesc_ar') }}</label>
                                    <input type="text" name="imagedesc_ar" class="form-control"
                                        placeholder="{{ __('custom.imagedesc_ar') }}">
                                    @error('imagedesc_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.imagedesc_en') }}</label>
                                    <input type="text" name="imagedesc_en" class="form-control"
                                        placeholder="{{ __('custom.imagedesc_en') }}">
                                    @error('imagedesc_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.videodesc_ar') }}</label>
                                    <input type="text" name="videodesc_ar" class="form-control"
                                        placeholder="{{ __('custom.videodesc_ar') }}">
                                    @error('videodesc_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.videodesc_en') }}</label>
                                    <input type="text" name="videodesc_en" class="form-control"
                                        placeholder="{{ __('custom.videodesc_en') }}">
                                    @error('videodesc_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>















                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.video_link') }}</label>
                                    <input type="text" name="video_link" class="form-control"
                                        placeholder="{{ __('custom.video_link') }}">
                                    @error('video_link')
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
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.video_image') }}</label>
                                    <input type="file" name="video_image" class="form-control"
                                        placeholder="{{ __('custom.video_image') }}">
                                    @error('video_image')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
