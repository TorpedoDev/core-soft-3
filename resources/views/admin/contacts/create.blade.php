@extends('admin.admin')
@section('title', 'معلومات اﻻتصال')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Contacts') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Add Contact') }}
                            </p>
                            <form method="POST" action="{{ route('contact.store') }}" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.location_ar') }}</label>
                                    <input type="text" name="location_ar" class="form-control"
                                        placeholder="{{ __('custom.location_ar') }}">
                                    @error('location_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.location_en') }}</label>
                                    <input type="text" name="location_en" class="form-control"
                                        placeholder="{{ __('custom.location_en') }}">
                                    @error('location_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.email') }}</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="{{ __('custom.email') }}">
                                    @error('email')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.call') }}</label>
                                    <input type="text" name="call" class="form-control"
                                        placeholder="{{ __('custom.call') }}">
                                    @error('call')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.open_ar') }}</label>
                                    <input type="text" name="open_ar" class="form-control"
                                        placeholder="{{ __('custom.open_ar') }}">
                                    @error('open_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.open_en') }}</label>
                                    <input type="text" name="open_en" class="form-control"
                                        placeholder="{{ __('custom.open_en') }}">
                                    @error('open_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                            

                              
                               
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
