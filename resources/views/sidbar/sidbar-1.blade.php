<div class="col-lg-4">

    <div class="categori-widget">
        <h4 class="title">Categorias</h4>
        <ul class="cat-list">
            @foreach($categories as $category)
                <li>
                    <a href="{{route('category.products', $category->slug)}}">
                        <p>{{$category->name}}</p>
                        <span class="count">{{count($category->products)}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    @if(!empty($outers))
        <div class="latest-post-widget">
            <h4 class="title">
                Outros Produtos
            </h4>
            <ul class="post-list">
                @foreach($outers as $item)
                    <li>
                        <div class="post">
                            <div class="post-img">
                                <img src="{{$configStore->filesPath}}/{{$item->image}}" alt="">
                            </div>
                            <div class="post-details">
                                <a href="#" class="post-title">{{$item->name}}</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="newsletter-widget">
        <h6 class="title">Assine Nossa NewsLetter</h6>
        <div id="return-newsletter"></div>
        <form id="newsletter-form" method="POST" onsubmit="return false">
            @csrf
            <input type="email" id="email_news" name="email" class="input-field" placeholder="Seu E-mail" required>
            <button type="submit" class="btn-newsletter mybtn2">
                <span>Enviar</span>
            </button>
        </form>
    </div>
</div>
