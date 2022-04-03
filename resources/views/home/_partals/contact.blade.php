<section class="contact" id="contato">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="section-title">
                    <h2 class="title">Contato</h2>
                    <p>
                        Prepared is me marianne pleasure likewise debating. Wonder an unable except better stairs do ye admire. His secure called esteem praise.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="info-box box3">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>{{$configCompany->address}}</p>
                            <p>{{$configCompany->complement}}</p>
                            <p>{{$configCompany->district}} - {{$configCompany->city}} -{{$configCompany->state}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box1">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>{{$configCompany->phone}}</p>
                            <p>WhatsApp: {{$configCompany->whatsapp}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-box box2">
                    <div class="left">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="content">
                            <p>
                            <a href="#" class="text-dark cryptedmail"
                               data-name="vendas"
                               data-domain="unionlux"
                               data-tld="com.br"
                               onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;">
                            </a>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form-wrapper">
                    <div id="return-contact"></div>
                    <form id="contact-form" method="POST" onsubmit="return false">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="input-field borderd" id="name" placeholder="Seu Nome" required>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="input-field borderd" id="email" placeholder="Digite seu e-mail" required>
                            </div>
                            <div class="col-12">
                                <textarea class="input-field borderd textarea" rows="3" id="message" placeholder="Escreva sua mensagem aqui" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-contact mybtn1"> <span>Enviar Mensagem</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="google_map_wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.626346592801!2d-38.31004188919432!3d-12.878623483084235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7163e05b57be6a3%3A0xdc39d732424d1589!2sR.%20Leonardo%20Rodrigues%20da%20Silva%2C%20257%20-%20Belo%20Horizonte%2C%20Lauro%20de%20Freitas%20-%20BA%2C%2042700-000!5e0!3m2!1spt-BR!2sbr!4v1594765156941!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
