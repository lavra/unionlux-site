<footer class="footer" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="footer-info-area">
                    <div class="footer-logo">
                        <a href="#" class="logo-link">
                            <img src="{{asset('assets/images/logo/logo-unionlux.png')}}" alt="Unionlux ">
                        </a>
                    </div>
                    <div class="text">
                        <p>Nossa principal função é a redução sustentável da poluição do ar causada por substâncias nocivas. Visando um ambiente limpo para o amanhã.</p>
                    </div>
                </div>
                {{-- include('include('footers.socials')') --}}
            </div>
        </div>
    </div>
    <div class="copy-bg text-center">
        <p>Copyright © {{$configStore->year}}. Todos os direitos reservados
            <a href="http://www.anselmovelame.com.br" target="_blank"><img src="https://demo1.avdesign.com.br/themes/images/av-design.png" width="70px"></a>
        </p>
    </div>
</footer>
