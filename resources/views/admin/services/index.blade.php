{{-- @extends('admin.admin')
@section('title', 'الخدمات')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('service.create')}}">{{ __('custom.Add Service') }}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Services') }}</h4>
      <p class="card-description">
       {{ __('custom.All Services') }}
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
                {{ __('custom.Status') }}
              </th>
              <th>
                {{ __('custom.Actions') }}
              </th>
              
            </tr>
          </thead>
          <tbody>
            @if(isset($services) && !empty($services))
            @foreach($services as $key => $service)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                {{ $service->logo }} 
               </td>
               <td style="width:20px">
                 {{ $service->name_ar }}
               </td>
               <td>
                 {{ $service->name_en }}
               </td>
               <td>
                 {{ $service->description_ar }}
               </td>
               <td>
                 {{ $service->description_en }}
               </td>
           
               <td>
                {{ $service->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('service.edit' , $service->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('service.destroy' , $service->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('service.changestatus' , $service->id) }}" class="{{ $service->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $service->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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


@endsection --}}











@extends('admin.admin')
@section('title', 'الخدمات')
@section('content')
<div class="container">
  <div class="row">
    <a style="float: right" class="btn btn-primary" href="{{route('service.create')}}">{{ __('custom.Add Service') }}</a>
  </div>
</div>
<br><br>
<div class="container">
  @if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
  @if(isset($services) && !empty($services))
  @foreach($services as $key => $service)    
  <div class="card">
    <div class="card-header">
      <h5> <strong>{{ __('custom.title_ar') }}</strong> : {{ $service->name_ar }} </h5>
      <br>
      <h5> <strong>{{ __('custom.title_en') }}</strong> : {{ $service->name_en }}</h5>
    </div>

    <div class="card-body">
    
      <p>
        <strong>{{__('custom.logo')}} : </strong>  {{$service->logo}}
      </p>
<br>
      <p>
          <strong> {{ __('custom.description_ar') }} </strong> : {{ $service->description_ar }}
      </p>
      <br>
      <p>
          <strong> {{ __('custom.description_en') }} </strong> : {{ $service->description_en }}
      </p>
      <br>

      <p>
          <strong> {{ __('custom.Status') }} </strong> :
          {{ $service->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
      </p>
    </div>


    <div class="card-footer">
<div class="row">
  <div class="col-md-4">
    <a href="{{ route('service.edit' , $service->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
  </div>

  <div class="col-md-4">
    <form action="{{ route('service.destroy', $service->id) }}" method="post">
      @method('delete')
      @csrf
      <button class="btn btn-danger" type="submit"
          onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
          {{ __('custom.Delete') }}

      </button>
  </form>
  </div>

  <div class="col-md-4">
    <a href="{{ route('service.changestatus', $service->id) }}"
      class="{{ $service->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">
      {{ $service->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}
  </a>
  </div>
</div>
    </div>
  </div>
  <br><br><br>
  @endforeach
  @endif
</div>


@endsection
