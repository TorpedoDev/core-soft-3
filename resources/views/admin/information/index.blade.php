@extends('admin.admin')
@section('title', 'معلومات الاتصال')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
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


@endsection
