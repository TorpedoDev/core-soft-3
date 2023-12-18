@extends('admin.admin')
@section('title', 'معلومات اﻻتصال')
@section('content')

@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif


<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Contacts') }}</h4>
      <p class="card-description">
       {{ __('custom.All Contacts') }}
      </p>
      <div class="table-responsive pt-3">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
               {{__('custom.location_ar')}}
              </th>
              <th>
                {{__('custom.location_en')}}
               </th>
              <th>
                {{__('custom.email')}}
              </th>
              <th>
                {{__('custom.call')}}
              </th>
              <th>
                {{__('custom.open_ar')}}
               </th>
               <th>
                 {{__('custom.open_en')}}
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
            @if(isset($contacts) && !empty($contacts))
            @foreach($contacts as $key => $contact)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td>
              {{$contact->location_ar}}
              </td>
              <td>
                {{$contact->location_en}}
                </td>
                <td>
                    {{$contact->email}}
                    </td>
                    <td>
                        {{$contact->call}}
                        </td>
              <td>
              {{$contact->open_ar}}
              </td>
              <td>
                {{$contact->open_en}}
                </td>
              <td>
             {{$contact->status == 1 ? __('custom.Active') : __('custom.Disactive')}} 
              </td>
              <td>
                
                
                  <a href="{{ route('contact.edit' , $contact->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
        <br>
                
                  <form action="{{ route('contact.destroy' , $contact->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <br>
                    <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                        {{ __('custom.Delete') }}
                   
                   </button>
                    </form>
            
                  <br>
                    <a href="{{ route('contact.changestatus' , $contact->id) }}" class="{{ $contact->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $contact->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
