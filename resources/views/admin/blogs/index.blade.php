@extends('admin.admin')
@section('title', 'المقاﻻت')
@section('content')
@if(session('success'))
  <div class="text-center alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ __('custom.Questions') }}</h4>
      <p class="card-description">
       {{ __('custom.All Questions') }}
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
                {{ __('custom.content_in_ar') }}
              </th>
              <th>
                {{ __('custom.content_in_en') }}
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
            @if(isset($blogs) && !empty($blogs))
            @foreach($blogs as $key => $blog)              
            <tr>
              <td>
                {{ ++$key }}
              </td>
              <td class="py-1">
                <img src="{{ asset('images/'.$blog->image) }}" width="100px" height="100px" alt="">
               </td>
               <td style="width:20px">
                 {{ $blog->title_ar }}
               </td>
               <td>
                 {{ $blog->title_en }}
               </td>
               <td>
                 {{ $blog->content_ar }}
               </td>
               <td>
                 {{ $blog->content_en }}
               </td>
               <td>
                {{ $blog->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
               </td>
               <td>
                <a href="{{ route('blog.edit' , $blog->id) }}" class="btn btn-warning">{{ __('custom.Edit') }}</a>
                <br>
                <form action="{{ route('blog.destroy' , $blog->id) }}" method="post">
                @method('delete')
                @csrf
                <br>
                <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                    {{ __('custom.Delete') }}
                </button>
                </form>
                <br>
                <a href="{{ route('blog.changestatus' , $blog->id) }}" class="{{ $blog->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">{{ $blog->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}</a>
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
