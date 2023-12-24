@extends('admin.admin')
@section('title', 'التطبيقات')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Apps') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Edit App') }}
                            </p>
                            <form method="POST" action="{{ route('app.update' , $app->id) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.name_ar') }}</label>
                                    <input type="text" value="{{ $app->name_ar }}" name="name_ar" class="form-control"
                                        placeholder="{{ __('custom.name_ar') }}">
                                    @error('name_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.name_en') }}</label>
                                    <input type="text" value="{{ $app->name_en }}" name="name_en" class="form-control"
                                        placeholder="{{ __('custom.name_en') }}">
                                    @error('name_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.description_ar') }}</label>
                                    <textarea placeholder="{{ __('custom.description_ar') }}" class="form-control" name="description_ar" id="" cols="30" rows="10">{{ $app->description_ar }}</textarea>
                                    @error('description_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.description_en') }}</label>
                                    <textarea placeholder="{{ __('custom.description_en') }}" class="form-control" name="description_en" id="" cols="30" rows="10">{{ $app->description_en }}</textarea>
                                    @error('description_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.type') }}</label>
                                    <select class="form-control" name="type" id="">
                                        <option value="web" {{ $app->type == 'web' ? 'selected' : '' }}>{{ __('custom.web') }}</option>
                                        <option value="mobile" {{ $app->type == 'mobile' ? 'selected' : '' }}>{{ __('custom.mobile') }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Image') }}</label>
                                    <input type="file" name="image" class="form-control"
                                        placeholder="{{ __('custom.Image') }}">
                                    @error('logo')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <br>
                                <img src="{{asset('images/'.$app->image)}}" width="100px" height="100px" alt="">
                                <br><br>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
