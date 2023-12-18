@extends('admin.admin')
@section('title', 'العروض')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
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
                <img src="{{ asset('images/'.$pricing->logo) }}" width="100px" height="100px" alt="">
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


@endsection
