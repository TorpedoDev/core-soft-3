{{-- @extends('admin.admin')
@section('title', 'معلومات الاتصال')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('information.create')}}">{{ __('custom.Add Information') }}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Information') }}</h4>
      <p class="card-description">
       {{ __('custom.All Information') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
                {{ __('custom.phone') }}
              </th>
              <th>
                {{ __('custom.email') }}
              </th>
                <th>
                {{ __('custom.location_ar') }}
              </th>
              <th>
                {{ __('custom.location_en') }}              
              </th>
              <th>
                {{ __('custom.open_ar') }}
              </th>
              <th>
                {{ __('custom.open_en') }}
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
            @if(isset($informations) && !empty($informations))
            @foreach($informations as $key => $information)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
{{$information->phone}}
            </td>
            <td class="py-1">
                {{$information->email}}
                            </td>
               <td style="width:20px">
                 {{ $information->location_ar }}
               </td>
               <td>
                 {{ $information->location_en }}
               </td>
               <td>
                 {{ $information->open_ar }}
               </td>
               <td>
                 {{ $information->open_en }}
               </td>
               <td>
                {{ $information->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('information.edit' , $information->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('information.destroy' , $information->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('information.changestatus' , $information->id) }}" class="{{ $information->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $information->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
                <br><br>
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
@section('title', 'معلومات الاتصال')
@section('content')
<div class="container">
  <div class="row">
    <a style="float: right" class="btn btn-primary" href="{{route('information.create')}}">{{ __('custom.Add Information') }}</a>
  </div>
</div>
<br><br>
<div class="container">
  @if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
  @if(isset($informations) && !empty($informations))
  @foreach($informations as $key => $information)    
  <div class="card">
    <div class="card-header">
      <h5> <strong>{{ __('custom.phone') }}</strong> : {{ $information->phone }} </h5>
      <br>
      <h5> <strong>{{ __('custom.email') }}</strong> : {{ $information->email }}</h5>
    </div>

    <div class="card-body">
     
    
      <p>
        <strong> {{ __('custom.location_ar') }} </strong> : {{ $information->location_ar }}

      </p>
      <p>
        <strong> {{ __('custom.location_en') }} </strong> : {{ $information->location_en }}

      </p>
      <br>

      <p>
        <strong> {{ __('custom.open_ar') }} </strong> : {{ $information->open_ar }}

      </p>
    <p>
      <strong> {{ __('custom.open_en') }} </strong> : {{ $information->open_en }}

    </p>
   
    
      <br>
      <p>
          <strong> {{ __('custom.Status') }} </strong> :
          {{ $information->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
      </p>
    </div>


    <div class="card-footer">
<div class="row">
  <div class="col-md-4">
    <a href="{{ route('information.edit' , $information->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
  </div>

  <div class="col-md-4">
    <form action="{{ route('information.destroy', $information->id) }}" method="post">
      @method('delete')
      @csrf
      <button class="btn btn-danger" type="submit"
          onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
          {{ __('custom.Delete') }}

      </button>
  </form>
  </div>

  <div class="col-md-4">
    <a href="{{ route('information.changestatus', $information->id) }}"
      class="{{ $information->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">
      {{ $information->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}
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
