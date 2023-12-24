@extends('admin.admin')
@section('title', 'البروفايل')
@section('content')
    <div class="main-panel">
        @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Profile') }}</h4>
                            <p class="card-description">
                                {{ __('custom.change account data') }}
                            </p>
                            <form method="POST" action="{{ route('admin.changeData') }}" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Name') }}</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control"
                                        placeholder="{{ __('custom.Name') }}">
                                    @error('name')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Email') }}</label>
                                    <input type="text" value="{{$user->email}}" name="email" class="form-control"
                                        placeholder="{{ __('custom.Email') }}">
                                    @error('email')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>











            <br><br>







            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Profile') }}</h4>
                            <p class="card-description">
                                {{ __('custom.change password') }}
                            </p>
                            <form method="POST" action="{{ route('admin.updatePass') }}" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Old Password') }}</label>
                                    <input type="password"  name="old_pass" class="form-control"
                                        placeholder="{{ __('custom.Old Password') }}">
                                    @error('old_pass')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.New Password') }}</label>
                                    <input type="password" name="new_pass" class="form-control"
                                        placeholder="{{ __('custom.New Password') }}">
                                    @error('new_pass')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Confirm New Password') }}</label>
                                    <input type="password" name="confirm_new_pass" class="form-control"
                                        placeholder="{{ __('custom.Confirm New Password') }}">
                                    @error('confirm_new_pass')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endsection
