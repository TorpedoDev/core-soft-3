{{-- @extends('admin.admin')
@section('title', 'العروض')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('pricing.create')}}">{{ __('custom.Add Pricing') }}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Pricing') }}</h4>
      <p class="card-description">
       {{ __('custom.All Pricings') }}
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
                {{ __('custom.price') }}
              </th>
              <th>
                {{ __('custom.Select Status') }}
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
            @if(isset($pricings) && !empty($pricings))
            @foreach($pricings as $key => $pricing)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                {{ $pricing->logo }}
               </td>
               <td style="width:20px">
                 {{ $pricing->name_ar }}
               </td>
               <td>
                 {{ $pricing->name_en }}
               </td>
               <td>
                 {{ $pricing->description_ar }}
               </td>
               <td>
                 {{ $pricing->description_en }}
               </td>
               <td>
                {{ $pricing->price }}
              </td>
               <td>
                 {{ $pricing->selected == 1 ? __('custom.Selected') : __('custom.Unselected')  }}
               </td>
               <td>
                {{ $pricing->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('pricing.edit' , $pricing->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('pricing.destroy' , $pricing->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('pricing.changestatus' , $pricing->id) }}" class="{{ $pricing->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $pricing->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
                <br><br>
                <a href="{{ route('pricing.showselected' , $pricing->id) }}" class="{{ $pricing->selected == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $pricing->selected == 1 ? __('custom.Unselect') : __('custom.Select') }}</a>
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
@section('title', 'العروض')
@section('content')
<div class="container">
  <div class="row">
    <a style="float: right" class="btn btn-primary" href="{{route('pricing.create')}}">{{ __('custom.Add Pricing') }}</a>
  </div>
</div>
<br><br>
<div class="container">
  @if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
  @if(isset($pricings) && !empty($pricings))
  @foreach($pricings as $key => $pricing)    
  <div class="card">
    <div class="card-header">
      <h5> <strong>{{ __('custom.title_in_ar') }}</strong> : {{ $pricing->name_ar }} </h5>
      <br>
      <h5> <strong>{{ __('custom.title_in_en') }}</strong> : {{ $pricing->name_en }}</h5>
    </div>

    <div class="card-body">
      <strong>{{__('custom.logo')}} : </strong> {{$pricing->logo}}
      <br>
   <br>

      <p>
          <strong> {{ __('custom.description_ar') }} </strong> : {{ $pricing->description_ar }}
      </p>
      <br>
      <p>
          <strong> {{ __('custom.description_en') }} </strong> : {{ $pricing->description_en }}
      </p>
      <br>

      <p>
        <strong> {{ __('custom.price') }} </strong> : {{ $pricing->price }}
    </p>
    <br>
    <p>
        <strong> {{ __('custom.videodesc_en') }} </strong> : {{ $pricing->selected }}
    </p>
    <br>

   
      <p>
          <strong> {{ __('custom.Status') }} </strong> :
          {{ $pricing->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
      </p>
    </div>


    <div class="card-footer">
<div class="row">
  <div class="col-md-3">
    <a href="{{ route('pricing.edit' , $pricing->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
  </div>

  <div class="col-md-3">
    <form action="{{ route('pricing.destroy', $pricing->id) }}" method="post">
      @method('delete')
      @csrf
      <button class="btn btn-danger" type="submit"
          onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
          {{ __('custom.Delete') }}

      </button>
  </form>
  </div>

  <div class="col-md-3">
    <a href="{{ route('pricing.changestatus', $pricing->id) }}"
      class="{{ $pricing->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">
      {{ $pricing->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}
  </a>
  </div>

  <div class="col-md-3">
    <a href="{{ route('pricing.showselected' , $pricing->id) }}" class="{{ $pricing->selected == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $pricing->selected == 1 ? __('custom.Unselect') : __('custom.Select') }}</a>
  </div>
</div>
    </div>
  </div>
  <br><br><br>
  @endforeach
  @endif
</div>


@endsection