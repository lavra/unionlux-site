@if($configStore->socialLinks->whatsapp == 1)
    <div class="product=inline-share-buttons"></div>
    <!-- BTN POPUP -->
    <div class="wa__btn_popup">
        <div class="wa__btn_popup_txt">Preciso de ajuda? <strong>Converse conosco </strong></div>
        <div class="wa__btn_popup_icon"></div>
    </div>
    <div class="wa__popup_chat_box">
        <div class="wa__popup_heading">
            <div class="wa__popup_intro">Oi! Clique em um de nossos membros abaixo para conversar no <strong>WhatsApp ;)</strong>
                <div id="\&quot;eJOY__extension_root\&quot;"></div>
                </a>
            </div>
        </div>
        <div class="wa__popup_content wa__popup_content_left">
            <div class="wa__popup_notice">A equipe normalmente responde em alguns minutos.</div>
            <div class="wa__popup_content_list">
                @foreach($users as $user)

                    <div class="wa__popup_content_item ">
                        <a target="_blank" href="https://{{$sub}}.whatsapp.com/send?phone=55{{$user->phone}}&text={{$user->message_whatsapp}}" class="wa__stt wa__stt_online">
                            <div class="wa__popup_avatar">
                                <div class="wa__cs_img_wrap" style="background: url({{$user->photo}}) center center no-repeat; background-size: cover;"></div>
                            </div>
                            <div class="wa__popup_txt">
                                <div class="wa__member_name">{{$user->name}}</div>
                                <div class="wa__member_duty">{{$user->department}}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif