<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">{{$category->name}}</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="{{route('home')}}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="javascript:void(0)"> {{$category->description}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>