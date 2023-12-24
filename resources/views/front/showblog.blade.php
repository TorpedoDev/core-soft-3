@extends('front.layouts.app-new')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <div class="post-img">
                    <img src="{{ asset('images/' . $blog->image) }}" alt="" class="img-fluid">
                </div>
                <br>
                <h2 class="title">
                    @if (app()->getLocale() == 'en')
                        {{ $blog->title_en }}
                    @else
                        {{ $blog->title_ar }}
                    @endif
                    </a>
                </h2>
            </div>
            <div class="card-footer">
                @if (app()->getLocale() == 'ar')
                    {{$blog->content_ar}}
                    @else
                    {{$blog->content_en}}
                @endif
            </div>
        </div>
        <br><br><br><br><br><br><br><br>
{{-- 
        <div class="col-xl-4 col-md-6">
            <article>

                <div class="post-img">
                    <img src="{{ asset('images/' . $blog->image) }}" alt="" class="img-fluid">
                </div>


                <h2 class="title">
                    @if (app()->getLocale() == 'en')
                        {{ $blog->title_en }}
                    @else
                        {{ $service->title_ar }}
                    @endif
                    </a>
                </h2>

                <p>
                    @if (app()->getLocale() == 'en')
                        {{ $blog->content_en }}
                    @else
                        {{ $blog->content_ar }}
                    @endif
                </p>

            </article>
        </div> --}}

    </div>
@endsection
