@extends('admin.admin')
@section('title', 'الاقسام')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('section.create')}}">{{__('custom.create section')}}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.sections') }}</h4>
      <p class="card-description">
       {{ __('custom.all sections') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
                {{ __('custom.logo') }}
              </th>
                <th>
                {{ __('custom.title_ar') }}
              </th>
              <th>
                {{ __('custom.title_en') }}              
              </th>
              <th>
                {{ __('custom.description_ar') }}
              </th>
              <th>
                {{ __('custom.description_en') }}
              </th>
              <th>
                {{ __('custom.about_ar') }}              
              </th>
              <th>
                {{ __('custom.about_en') }}
              </th>
              <th>
                {{ __('custom.Status') }}
              </th>
              <th>
                {{ __('custom.Actions') }}
              </th>
              
            </tr>
          </thead>
          <tbody>
            @if(isset($sections) && !empty($sections))
            @foreach($sections as $key => $sec)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
{{$sec->logo}}               </td>
               <td style="width:20px">
                 {{ $sec->title_ar }}
               </td>
               <td>
                 {{ $sec->title_en }}
               </td>
               <td>
                 {{ $sec->description_ar }}
               </td>
               <td>
                 {{ $sec->description_en }}
               </td>
               <td>
                 {{ $sec->about_ar }}
               </td>
               <td>
                 {{ $sec->about_en }}
               </td>
               <td>
                {{ $sec->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('section.edit' , $sec->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('section.destroy' , $sec->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('section.changestatus' , $sec->id) }}" class="{{ $sec->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $sec->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
