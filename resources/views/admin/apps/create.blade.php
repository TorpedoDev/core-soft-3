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
                                {{ __('custom.Add App') }}
                            </p>
                            <form method="POST" action="{{ route('app.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.name_ar') }}</label>
                                    <input type="text" name="name_ar" class="form-control"
                                        placeholder="{{ __('custom.name_ar') }}">
                                    @error('name_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.name_en') }}</label>
                                    <input type="text" name="name_en" class="form-control"
                                        placeholder="{{ __('custom.name_en') }}">
                                    @error('name_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.description_ar') }}</label>
                                    <textarea placeholder="{{ __('custom.description_ar') }}"  class="form-control" name="description_ar"  cols="30" rows="10"></textarea> 
                                    @error('description_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.description_en') }}</label>
                                    <textarea placeholder="{{ __('custom.description_en') }}" class="form-control" name="description_en"  cols="30" rows="10"></textarea>
                                    @error('description_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.type') }}</label>
                                    <select class="form-control" name="type" id="">
                                        <option value="web">{{ __('custom.web') }}</option>
                                        <option value="mobile">{{ __('custom.mobile') }}</option>
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
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
