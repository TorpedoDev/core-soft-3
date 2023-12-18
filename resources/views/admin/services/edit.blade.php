@extends('admin.admin')
@section('title', 'الخدمات')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Services') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Edit Service') }}
                            </p>
                            <form method="POST" action="{{ route('service.update', $service->id) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.title_ar') }}</label>
                                    <input type="text" value="{{ $service->name_ar }}" name="name_ar"
                                        class="form-control" placeholder="{{ __('custom.title_ar') }}">
                                    @error('title_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.title_en') }}</label>
                                    <input type="text" value="{{ $service->name_en }}" name="name_en"
                                        class="form-control" placeholder="{{ __('custom.title_en') }}">
                                    @error('title_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.description_ar') }}</label>
                                    <textarea class="form-control" name="description_ar" placeholder="{{ __('custom.description_ar') }}" cols="30" rows="10">{{ $service->description_ar }}</textarea>

                                    @error('description_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.description_en') }}</label>
                                    <textarea class="form-control" name="description_en" placeholder="{{ __('custom.description_en') }}" cols="30" rows="10">{{ $service->description_en }}</textarea>

                                    @error('description_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.logo') }}</label>
                                    <input type="file" name="logo" class="form-control"
                                        placeholder="{{ __('custom.logo') }}">
                                    @error('logo')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <br>
                                <img src="{{ asset('images/' . $service->logo) }}" width="100px" height="100px"
                                    alt="">
                                <br><br>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
