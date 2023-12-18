@extends('admin.admin')
@section('title', 'العروض')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Pricing') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Add Pricing') }}
                            </p>
                            <form method="POST" action="{{ route('pricing.store') }}" class="forms-sample"
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
                                    <input type="text" name="description_ar" class="form-control"
                                        placeholder="{{ __('custom.description_ar') }}">
                                    @error('description_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.description_en') }}</label>
                                    <input type="text" name="description_en" class="form-control"
                                        placeholder="{{ __('custom.description_en') }}">
                                    @error('description_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.price') }}</label>
                                    <input type="text"  name="price" class="form-control"
                                        placeholder="{{ __('custom.price') }}">
                                    @error('price')
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
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
