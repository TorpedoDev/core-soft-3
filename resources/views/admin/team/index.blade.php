@extends('admin.admin')
@section('title', 'الفريق')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-header">        
      <a style="float: right" class="btn btn-primary" href="{{route('team.create')}}">{{ __('custom.Add Member') }}</a>
    </div>
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Team') }}</h4>
      <p class="card-description">
       {{ __('custom.All members') }}
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
                {{ __('custom.title_ar') }}
              </th>
              <th>
                {{ __('custom.title_en') }}              
              </th>
              <th>
                {{ __('custom.position_ar') }}
              </th>
              <th>
                {{ __('custom.position_en') }}
              </th>
              <th>
                {{ __('custom.facebook') }}              
              </th>
              <th>
                {{ __('custom.twitter') }}
              </th>
              <th>
                {{ __('custom.linkedin') }}
              </th>
              <th>
                {{ __('custom.instagram') }}
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
            @if(isset($members) && !empty($members))
            @foreach($members as $key => $member)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                <img src="{{ asset('images/'.$member->image) }}" width="100px" height="100px" alt="">
               </td>
               <td style="width:20px">
                 {{ @$member->name_ar }}
               </td>
               <td>
                 {{ @$member->name_en }}
               </td>
               <td>
                 {{ @$member->position_ar }}
               </td>
               <td>
                 {{ @$member->position_en }}
               </td>
               <td>
                 {{ @$member->facebook }}
               </td>
               <td>
                 {{ @$member->twitter }}
               </td>
               <td>
                {{ @$member->linkedin }}
              </td>
              <td>
                {{ @$member->instagram }}
              </td>
               <td>
                {{ @$member->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('team.edit' , $member->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('team.destroy' , $member->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('team.changestatus' , $member->id) }}" class="{{ $member->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $member->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
