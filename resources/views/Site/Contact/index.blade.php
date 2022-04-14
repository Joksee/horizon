@extends('layouts.site')

@section('content')
    <div class="gray-background">
        <section class="contact__block contact-wrapper">
            <h1 class="display-medium">Entre em contato com nossa equipe Horizon </h1>
            <p>Envie suas dúvidas pelo formulário e nós responderemos por E-mail. 
                Ou entre em contato conosco diretamente pelo telefone ou whatsapp abaixo</p>
            <section class="contact__options">

                <form class="contact__form" action="{{route('site.contact.form')}}" method="post">
                    @csrf
                    @if(session('success'))
                        <div>
                            {{session('message')}}
                        </div>
                    @endif
                    <div>
                    </div>
                    <label for="name_contacts">Nome completo</label>
                    <input id="name_contacts" name="name_contacts" type="text" tabindex="1" placeholder="Ex: José da Silva"
                           autofocus value="{{old('name_contacts')}}">
                    @error('name_contacts')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="email_contacts">Email</label>
                    <input id="email_contacts" name="email_contacts" type="text" tabindex="2" placeholder="Ex: email@email.com.br"
                           value="{{old('email_contacts')}}">
                    @error('email_contacts')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="message_contacts">Mensagem</label>
                    <textarea id="message_contacts" name="message_contacts" tabindex="3" cols="20" rows="4"
                              placeholder="Digite aqui...">{{old('message_contacts')}}</textarea>
                    @error('message_contacts')
                    <div>{{ $message }}</div>
                    @enderror

                    <button class="button button_primary" type="submit">Enviar mensagem</button>
                </form>

                <div class="contact__infos">
                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/phone-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Contato por telefone</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:94937875362">(94) 3787-5362</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/phone-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Contato Whatsapp</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:559981539172">+55 (94) 98153-9172</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/mail-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Contato por email</h3>
                        </div>
                        <a title="Clique no email para enviar email automatico" href="mailto:horizon.tuc@gmail.com">horizon.tuc@gmail.com</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/pin-map-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Endereço </h3>
                        </div>
                        <a title="clique no endereço para traçar uma rota" target="_blank"
                           href="https://www.google.com/maps/dir//Av.+Braz+Olaia+Acosta,+727+-+Jardim+California,+Ribeir%C3%A3o+Preto+-+SP,+14026-040/@-21.2117135,-47.8201906,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94b9beccaaa6dccd:0xc472dcfb494d66a5!2m2!1d-47.8180019!2d-21.2117135">
                            Rua F, 56<br>
                            Santa Mônica<br>
                            Tucuruí, PA<br>
                            CEP: 68455-134
                        </a>
                    </div>
                    <section class="contact__infos__social-media">
                        <a href="https://www.facebook.com/HorizonTeck" target="_blank">Nos siga no Facebook </a>
                        <br>
                        <a href="https://www.instagram.com/horizon.tecnologia/">E marque a gente no Instagram</a>
                    </section>
                </div>
            </section>
        </section>
    </div>
@endsection
