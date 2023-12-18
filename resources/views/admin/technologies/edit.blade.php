@extends('admin.admin')
@section('title', 'التكنولوجيا')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Technology') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Edit Technology') }}
                            </p>
                            <form method="POST" action="{{ route('technology.update' , $technology->id ) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.logo') }}</label>
                                    <input type="file" name="logo" class="form-control"
                                        placeholder="{{ __('custom.logo') }}">
                                    @error('logo')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                               <br>
                               <img src="{{ asset('images/'.$technology->logo) }}" width="100px" height="100px" alt="">
                               <br> <br><br>
                               <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
