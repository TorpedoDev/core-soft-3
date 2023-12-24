@extends('admin.admin')
@section('title', 'اﻻسئلة الشائعة')
@section('content')

@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('question.create')}}">{{ __('custom.Add Questions') }}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Questions') }}</h4>
      <p class="card-description">
       {{ __('custom.All Questions') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
               {{__('custom.Question_en')}}
              </th>
              <th>
                {{__('custom.Question_ar')}}
               </th>
              <th>
                {{__('custom.Answer_en')}}
              </th>
              <th>
                {{__('custom.Answer_ar')}}
              </th>
              <th>
                {{__('custom.Status')}}
              </th>
              <th>
                {{ __('custom.Actions') }}
              </th>
              
            </tr>
          </thead>
          <tbody>
            @if(isset($questions) && !empty($questions))
            @foreach($questions as $key => $ques)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td>
              {{$ques->question_en}}
              </td>
              <td>
                {{$ques->question_ar}}
                </td>
              <td>
              {{$ques->answer_en}}
              </td>
              <td>
                {{$ques->answer_ar}}
                </td>
              <td>
             {{$ques->status == 1 ? __('custom.Active') : __('custom.Disactive')}} 
              </td>
              <td>
                
                
                  <a href="{{ route('question.edit' , $ques->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
        <br>
                
                  <form action="{{ route('question.destroy' , $ques->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <br>
                    <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                        {{ __('custom.Delete') }}
                   
                   </button>
                    </form>
            
                  <br>
                    <a href="{{ route('question.changestatus' , $ques->id) }}" class="{{ $ques->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $ques->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
              </td>
            </tr>
          @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection
