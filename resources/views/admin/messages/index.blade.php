@extends('admin.admin')
@section('content')

@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Messages') }}</h4>
      <p class="card-description">
       {{ __('custom.All Messages') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
               {{__('custom.Name')}}
              </th>
              <th>
               {{__('custom.Email')}}
              </th>
              <th>
               {{__('custom.Subject')}}
              </th>
              <th>
                {{__('custom.Message')}}
              </th>
              <th>
                {{ __('custom.Actions') }}
              </th>
              
            </tr>
          </thead>
          <tbody>
            @if(isset($messages) && !empty($messages))
            @foreach($messages as $key => $msg)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td>
              {{$msg->name}}
              </td>
              <td>
              {{$msg->email}}
              </td>
              <td>
              {{$msg->subject}}
              </td>
              <td>
              {{$msg->message}}
              </td>
              <td>
                  <form action="{{ route('messages.destroy' , $msg->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                        {{ __('custom.Delete') }}
                    </button>
                    </form>  
              </td>
            </tr>
          @endforeach
          @else
          <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>






@endsection