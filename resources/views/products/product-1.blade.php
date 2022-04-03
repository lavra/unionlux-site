@extends('layouts.main')
@push('title')
    <title> {{$category->name}} Unionlux - Redução sustentável da poluição</title>
    <meta name="description" content="{{$category->description}}" />
@endpush
@section('content')
@include('header.menu-pages')
<!-- Breadcrumb Area Start -->
@include('breadcrumb.breadcrumb-1')

<!-- Blog Page Grid Area Start -->
<section class="blog-page single-blog-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-blog">
                                <div class="img">
                                    <img src="{{$configStore->filesPath}}/{{$product->image}}" alt="{{$product->name}}">
                                </div>
                                <div class="content">
                                    <a href="javascript:void(0)" title="{{$product->name}}">
                                        <h4 class="title">{{$product->name}}</h4>
                                    </a>
                                    <ul class="top-meta">
                                        <li>{{$product->description}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @if(count($products) <= 0)
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <h>Desculpe, não temos produto "{{$category->name}}" disponível no momento.</h>
                        </div>
                    </div>
                @endif
                {{--<div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>--}}
            </div>

            @include('sidbar.sidbar-1')
        </div>
    </div>
</section>
@endsection
