@extends('admin.admin')
@section('title', 'الاقسام')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.sections') }}</h4>
                            <p class="card-description">
                                {{ __('custom.edit section') }}
                            </p>
                            <form method="POST" action="{{ route('section.update', $section->id) }}" class="forms-sample"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.title_ar') }}</label>
                                    <input type="text" value="{{ $section->title_ar }}" name="title_ar"
                                        class="form-control" placeholder="{{ __('custom.title_ar') }}">
                                    @error('title_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.title_en') }}</label>
                                    <input type="text" value="{{ $section->title_en }}" name="title_en"
                                        class="form-control" placeholder="{{ __('custom.title_en') }}">
                                    @error('title_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.description_ar') }}</label>
                                    <input value="{{ $section->description_ar }}" type="text" name="description_ar"
                                        class="form-control" placeholder="{{ __('custom.description_ar') }}">
                                    @error('description_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.description_en') }}</label>
                                    <input value="{{ $section->description_en }}" type="text" name="description_en"
                                        class="form-control" placeholder="{{ __('custom.description_en') }}">
                                    @error('description_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.logo') }}</label>
                                    <input type="text" value="{{$section->logo}}" name="logo" class="form-control"
                                        placeholder="{{ __('custom.logo') }}">
                                    @error('logo')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">{{ __('custom.about_ar') }}</label>
                                        <textarea placeholder="{{ __('custom.about_ar') }}" class="form-control" name="about_ar"  cols="30" rows="10">{{ $section->about_ar }}</textarea>

                                        @error('about_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('custom.about_en') }}</label>
                                        <textarea placeholder="{{ __('custom.about_en') }}" class="form-control" name="about_en"  cols="30" rows="10">{{ $section->about_en }}</textarea>

                                    @error('about_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
