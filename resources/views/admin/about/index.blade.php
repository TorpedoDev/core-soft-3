@extends('admin.admin')
@section('title', 'المقاﻻت')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.About') }}</h4>
      <p class="card-description">
       {{ __('custom.All Abouts') }}
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
                {{ __('custom.title_in_ar') }}
              </th>
              <th>
                {{ __('custom.title_in_en') }}              
              </th>
              <th>
                {{ __('custom.imagedesc_ar') }}
              </th>
              <th>
                {{ __('custom.imagedesc_en') }}
              </th>
              <th>
                {{ __('custom.videodesc_ar') }}
              </th>
              <th>
                {{ __('custom.videodesc_en') }}
              </th>
              <th>
                {{ __('custom.video_image') }}
              </th>
              <th>
                {{ __('custom.video_link') }}
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
            @if(isset($abouts) && !empty($abouts))
            @foreach($abouts as $key => $about)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                <img src="{{ asset('images/'.$about->image) }}" width="100px" height="100px" alt="">
               </td>
               <td style="width:20px">
                 {{ $about->title_ar }}
               </td>
               <td>
                 {{ $about->title_en }}
               </td>
               <td>
                {{ $about->imagedesc_ar }}
              </td>
              <td>
                {{ $about->imagedesc_en }}
              </td>
              <td>
                {{ $about->videodesc_ar }}
              </td>
              <td>
                {{ $about->videodesc_en }}
              </td>
               <td>
                <img src="{{ asset('images/'.$about->video_image) }}" width="100px" height="100px" alt="">
               </td>
               <td>
                 {{ $about->video_link }}
               </td>
               <td>
                {{ $about->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('about.edit' , $about->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('about.destroy' , $about->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('about.changestatus' , $about->id) }}" class="{{ $about->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $about->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
