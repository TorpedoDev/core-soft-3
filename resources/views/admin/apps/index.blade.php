@extends('admin.admin')
@section('title', 'التطبيقات')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Apps') }}</h4>
      <p class="card-description">
       {{ __('custom.All Apps') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
                {{ __('custom.Image') }}
              </th>
                <th>
                {{ __('custom.name_ar') }}
              </th>
              <th>
                {{ __('custom.name_en') }}              
              </th>
              <th>
                {{ __('custom.description_ar') }}
              </th>
              <th>
                {{ __('custom.description_en') }}
              </th>
              <th>
                {{ __('custom.type') }}
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
            @if(isset($apps) && !empty($apps))
            @foreach($apps as $key => $app)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                <img src="{{ asset('images/'.$app->image) }}" width="100px" height="100px" alt="">
               </td>
               <td style="width:20px">
                 {{ $app->name_ar }}
               </td>
               <td>
                 {{ $app->name_en }}
               </td>
               <td>
                 {{ $app->description_ar }}
               </td>
               <td>
                 {{ $app->description_en }}
               </td>
               <td>
                {{ __('custom.'.$app->type) }}
              </td>
               <td>
                {{ $app->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('app.edit' , $app->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('app.destroy' , $app->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('app.changestatus' , $app->id) }}" class="{{ $app->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $app->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
