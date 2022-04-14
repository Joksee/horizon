@extends('layouts.site')

@section('content')
<header>
    <div class="hero">
        <div class="main-wrapper">
            <div class="hero__content">
                <h1 class="display-large">Horizon Tecnologia uma empresa de consultoria e assessoria na área de informática e automação comercial</h1>
                <a class="button button_sublte button_large" href="javascript:;" role="button">não sei pra que serve (botão) </a>
            </div>
            <section class="docked-bar flex-container">
                <div class="hero__information">
                    <p>Entre em contato diretamente pelo número</p>
                </div>
                <div class="talk-to-us">
                    <img src="{{asset('images/Phone-Icon.svg')}}" alt="Telefone Icone">
                    <a title="Clique no número do telefone para ligar" href="tel:(16) 99999-9999">(16) 99999-9999</a>
                </div>
            </section>
        </div>
    </div>
</header>

<section class="blog">
    <div class="main-wrapper">
        <div class="blog__container">
            <div class="blog__introduction">
                <h2 class="title-large">Nosso atendimento inclui um variedade de serviços e produtos.</h2>
                <p>Nossos serviços de consultoria e acessoria estão disponíveis para atendimento empresarial e também
                    para público individual.  </p>
                <a href="blog.php" role="button">Venha conheçer nosso trabalho!</a>
            </div>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Fidelis, dexter fortiss mechanice consumere de teres, germanus
                            abactor. </h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/roman-synkevych-vXInUOv1n84-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Castus danista vix examinares cursus est. </h3>
                    </header>
                </a>
            </article>

            <article class="card__post">
                <a href="javascript:;">
                    <div class="post__cover">
                        <img src="{{asset('images/max-duzij-qAjJk-un3BI-unsplash.jpg')}}">
                    </div>
                    <header class="card__post__header">
                        <time class="post__date" datetime="2019-03-29">18 Julho, 2019</time>
                        <h3 class="body-large">Prarere superbe ducunt ad fidelis homo. </h3>
                    </header>
                </a>
            </article>
        </div>
    </div>
    <div class="pattern"></div>
</section>

<div class="gray-background testimonials__mobile">
    <div class="main-wrapper flex-container">
        <section class="testimonials">
            <h2 class="title-large">A Horizon conta com profissionais exelentes. <br>Conheça um pouco da nossa equipe</h2>
            <section class="flex-container">
                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/equipe01.png')}}">
                    </div>
                    <blockquote>
                        Descrição e qualidades profissionais <br>
                        1 <br>
                        2 <br>
                        3 <br>
                        4 <br>
                        5
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Jadson </h4>
                        <p>Dono e Fundador da Horizon Tecnologia</p>
                    </footer>
                </article>

                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        Sunt zeluses visum secundus, gratis barcases. Pius caesium solite magicaes mons est. Consilium
                        messiss, tanquam altus epos. Sunt fluctuies tractare salvus, festus byssuses. Cum calcaria
                        accelerare, omnes luraes manifestum alter, dexter rationees.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Nunquam talem stella. </h4>
                        <p>Cur ratione observare? </p>
                    </footer>
                </article>
            </section>
        </section>
    </div>
</div>

<section class="cta__home">
    <div class="cta__wrapper">
        <h2 class="title-large">Prestação de serviços em consultoria com o melhor atendimento do mercado</h2>
        <p>Atendimento remoto e serviços de qualidade para você e a sua empresa, que incluem: manutenção 
            de computadores, monitoramento de servidores, troca de baterias de nobreaks, automação comercial e 
            vários outros.
        </p>
        <a href="{{route('site.contact')}}" role="button" class="button button_accent">Entre em Contato </a>
    </div>
    <div class="pattern"></div>
</section>

<!--<a href='https://pngtree.com/free-backgrounds'>free background photos from pngtree.com/</a> -->
@endsection
