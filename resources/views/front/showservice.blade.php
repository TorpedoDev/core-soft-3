@extends('front.layouts.app-new')
@section('content')



<div class="container">
    <br><br>
    <div class="card">
     <div class="card-body">
        <h3>
            @if (app()->getLocale() == 'en')
                {{ $service->name_en }}
            @else
                {{ $service->name_ar }}
            @endif
        </h3>
        <p>
            @if (app()->getLocale() == 'en')
                {{ $service->description_en }}
            @else
                {{ $service->description_ar }}
            @endif
        </p>
     </div>
    </div>
    <br><br>
</div>
@endsection