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
                                {{ __('custom.Edit Member') }}
                            </p>
                            <form method="POST" action="{{ route('team.update' , $member->id) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.name_ar') }}</label>
                                    <input type="text" value="{{ $member->name_ar }}" name="name_ar" class="form-control"
                                        placeholder="{{ __('custom.name_ar') }}">
                                    @error('name_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.name_en') }}</label>
                                    <input value="{{ $member->name_en }}" type="text" name="name_en" class="form-control"
                                        placeholder="{{ __('custom.name_en') }}">
                                    @error('name_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.position_ar') }}</label>
                                    <input value="{{ $member->position_ar }}" type="text" name="position_ar" class="form-control"
                                        placeholder="{{ __('custom.position_ar') }}">
                                    @error('position_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.position_en') }}</label>
                                    <input type="text" value="{{ $member->position_en }}" name="position_en" class="form-control"
                                        placeholder="{{ __('custom.position_en') }}">
                                    @error('position_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.facebook') }}</label>
                                    <input type="text" value="{{ $member->facebook }}" name="facebook" class="form-control"
                                        placeholder="{{ __('custom.facebook') }}">
                                    @error('facebook')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.twitter') }}</label>
                                    <input type="text" value="{{ $member->twitter }}" name="twitter" class="form-control"
                                        placeholder="{{ __('custom.twitter') }}">
                                    @error('twitter')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.linkedin') }}</label>
                                    <input type="text" value="{{ $member->linkedin }}" name="linkedin" class="form-control"
                                        placeholder="{{ __('custom.linkedin') }}">
                                    @error('linkedin')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.instagram') }}</label>
                                    <input type="text" value="{{ $member->instagram }}" name="instagram" class="form-control"
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
                                <br>
        <img src="{{ asset('images/'.$member->image) }}" width="100px" height="100px" alt="">
                                <br><br>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
