@extends('layouts.site')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">With apples drink teriyaki. </h1>
        </div>
        <div class="pattern__header"></div>
    </header>

    <div class="products__general main-wrapper">

        <aside class="product__selected">
            <article class="card__product">
                <a href="products-detail.php">
                    <div class="card__cover">
                        <img src="{{asset($service->image_services)}}" style="width: 322px;">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">{{$service->name_services}}</h2>
                        <p>{{$service->description_services}}</p>
                    </header>
                </a>
            </article>
            <a class="back-to-products" href="{{route('site.services')}}">Voltar</a>
        </aside>

        <section class="products__list">
            <header>
                <h2 class="title-large">Serviços: {{$service->name_services}} </h2>
                <p>{{$service->description2_services}} </p>
            </header>
            @foreach($service->servicelists as $servicelist)
            <article class="product">
                <a class="clickable-area" href="javascript:;">
                    <header class="product__header">
                        <h3 class="title-medium">{{$servicelist->name_serviceists}}</h3>
                        <!-- Tooggle item -->
                        <span class="collapse__open"></span>
                    </header>
                    @if($servicelist->exclusive)
                        <img class="exclusive__label" src="{{asset('images/Exclusivo-label.png')}}" alt="Etiqueta de
                        produto
                        exclusivo">
                    @endif
                </a>

                <section class="product__content">

                    <div class="product__desciption">
                        {{$servicelist->description_servicelist}}
                    </div>

                </section>
            </article>
            @endforeach
        </section>
    </div>
@endsection
