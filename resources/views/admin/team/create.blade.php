@extends('admin.admin')
@section('title', 'فريق العمل')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Team') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Add Member') }}
                            </p>
                            <form method="POST" action="{{ route('team.store') }}" class="forms-sample"
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
                                    <label for="exampleInputUsername1">{{ __('custom.position_ar') }}</label>
                                    <input type="text" name="position_ar" class="form-control"
                                        placeholder="{{ __('custom.position_ar') }}">
                                    @error('position_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.position_en') }}</label>
                                    <input type="text" name="position_en" class="form-control"
                                        placeholder="{{ __('custom.position_en') }}">
                                    @error('position_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.facebook') }}</label>
                                    <input type="text" name="facebook" class="form-control"
                                        placeholder="{{ __('custom.facebook') }}">
                                    @error('facebook')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.twitter') }}</label>
                                    <input type="text" name="twitter" class="form-control"
                                        placeholder="{{ __('custom.twitter') }}">
                                    @error('twitter')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.linkedin') }}</label>
                                    <input type="text" name="linkedin" class="form-control"
                                        placeholder="{{ __('custom.linkedin') }}">
                                    @error('linkedin')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.instagram') }}</label>
                                    <input type="text" name="instagram" class="form-control"
                                        placeholder="{{ __('custom.instagram') }}">
                                    @error('instagram')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.Image') }}</label>
                                    <input type="file" name="image" class="form-control"
                                    @error('image')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Add') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
