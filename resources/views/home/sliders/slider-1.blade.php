<div id="home" class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-self-center">
                <div class="left-content">
                    <div class="content">
                        <h1 class="title">{{$slider->title}}</h1>
                        <p class="subtitle">{{$slider->description}}</p>
                        <div class="links">
                            <a href="#feature" class="mybtn3 mybtn-light"><span>Veja Mais</span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-first order-lg-last">
                <div class="right-img">
                    <div class="discount-circle">
                        <div class="discount-circle-inner">
                            <div class="price">
                                <span>100%<br>Aprovado</span>
                            </div>
                        </div>
                    </div>
                    <img class="img-fluid img" src="{{$configStore->filesPath}}/{{$slider->image}}" alt="{{$slider->title}}" width="434" height="529">
                </div>
            </div>
        </div>
    </div>
</div>
