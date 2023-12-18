@extends('admin.admin')
@section('title', 'التكنولوجيا')
@section('content')

@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Technology') }}</h4>
      <p class="card-description">
       {{ __('custom.All Technology') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
               {{__('custom.logo')}}
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
            @if(isset($technologies) && !empty($technologies))
            @foreach($technologies as $key => $tech)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td>
              <img src="{{ asset('images/'.$tech->logo) }}" width="100px" height="100px" alt="">
              </td>
              <td>
             {{$tech->status == 1 ? __('custom.Active') : __('custom.Disactive')}} 
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href="{{ route('technology.edit' , $tech->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                </div>
                <div class="col-md-2">
                  <form action="{{ route('technology.destroy' , $tech->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                        {{ __('custom.Delete') }}
                    </button>
                    </form>
                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('technology.changestatus' , $tech->id) }}" class="{{ $tech->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $tech->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
                </div>
              </div>
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
