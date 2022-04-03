<section class="pricing" id="categorias">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h4 class="title">VEJA NOSSO CATALOGO</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product-slider">
                    @foreach($categories as $category)
                        <div class="item">
                            <div class="single-product">
                                <div class="img">
                                    <img src="{{$configStore->filesPath}}/{{$category->image}}" alt="{{$category->name}}">
                                    <div class="links">
                                        <a href="{{route('category.products', $category->slug)}}" class="mybtn1">
                                            <span>Veja Mais</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">
                                        <a href="{{route('category.products', $category->slug)}}" title="{{$category->name}}">{{$category->name}}</a>
                                    </h4>
                                    <p>{{$category->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>