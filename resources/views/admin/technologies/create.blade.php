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
                                {{ __('custom.Add Technology') }}
                            </p>
                            <form method="POST" action="{{ route('technology.store') }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.logo') }}</label>
                                    <input type="file" name="logo" class="form-control"
                                        placeholder="{{ __('custom.logo') }}">
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
