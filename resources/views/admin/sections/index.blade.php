@extends('admin.admin')
@section('title', 'الاقسام')
@section('content')
  
    <div class="container">
        <div class="row">
          <a style="float: right" class="btn btn-primary" href="{{route('section.create')}}">{{ __('custom.create section') }}</a>
        </div>
      </div>
      <br><br>

    <div class="container">
        @if (session('success'))
        <div class="text-center alert alert-success">{{ session('success') }}</div>
    @endif
      @if(isset($sections) && !empty($sections))
        @foreach ($sections as $sec)
            <div class="card">
                <div class="card-header">
                    <h5> <strong>{{ __('custom.title_ar') }}</strong> : {{ $sec->title_ar }} </h5>
                    <br>
                    <h5> <strong>{{ __('custom.title_en') }}</strong> : {{ $sec->title_en }}</h5>

                </div>
                <br>
                <div style="justify-content: center" class="card-body">
                    <strong>{{ __('custom.logo') }} : </strong> {{ $sec->logo }}
                    <p>
                        <strong> {{ __('custom.description_ar') }} </strong> : {{ $sec->description_ar }}
                    </p>
                    <p>
                        <strong> {{ __('custom.description_en') }} </strong> : {{ $sec->description_en }}
                    </p>
                    <br>

                    <p>
                        <strong>{{ __('custom.about_ar') }} </strong> : {{ $sec->about_ar }}
                    </p>
                    <p>
                        <strong> {{ __('custom.about_en') }} </strong> : {{ $sec->about_en }}

                    </p>
                    <br>
                    <p>
                        <strong> {{ __('custom.Status') }} </strong> :
                        {{ $sec->status == 1 ? __('custom.Active') : __('custom.Disactive') }}
                    </p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('section.edit', $sec->id) }}" class="btn btn-warning">
                                {{ __('custom.Edit') }} </a>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('section.destroy', $sec->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('{{ __('custom.Are you already want to delete ?') }}')">
                                    {{ __('custom.Delete') }}

                                </button>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ route('section.changestatus', $sec->id) }}"
                                class="{{ $sec->status == 1 ? 'btn btn-secondary' : 'btn btn-info' }}">
                                {{ $sec->status == 1 ? __('custom.Deactivate') : __('custom.Activate') }}
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
