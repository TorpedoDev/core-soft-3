@extends('admin.admin')
@section('title', 'اﻻسئلة')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('custom.Questions') }}</h4>
                            <p class="card-description">
                                {{ __('custom.Edit Question') }}
                            </p>
                            <form method="POST" action="{{ route('question.update' , $question->id) }}" class="forms-sample">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Question_en') }}</label>
                                    <input type="text" value="{{$question->question_en}}" name="question_en" class="form-control"
                                        placeholder="{{ __('custom.Question_en') }}">
                                    @error('question_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Question_ar') }}</label>
                                    <input type="text" value="{{$question->question_ar}}" name="question_ar" class="form-control"
                                        placeholder="{{ __('custom.Question_ar') }}">
                                    @error('question_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Answer_en') }}</label>
                                        <textarea name="answer_en" class="form-control"
                                        placeholder="{{ __('custom.Answer_en') }}" cols="30" rows="10">{{$question->answer_en}}</textarea>
                                    @error('answer_en')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">{{ __('custom.Answer_ar') }}</label>
                                        <textarea name="answer_ar" class="form-control"
                                        placeholder="{{ __('custom.Answer_ar') }}" cols="30" rows="10">{{$question->answer_ar}}</textarea>
                                    @error('answer_ar')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Edit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
