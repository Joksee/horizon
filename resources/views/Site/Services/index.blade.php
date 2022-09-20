@extends('layouts.site')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Nossa equipe conta com uma variedade de serviços diferentes para atender suas necessidades </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
    <!-- Products list Mudar as coisas mais tarde, e categoriaparaoutra coisa qualquer -->
    <div class="gray-background">
        <section class="products__cultivation__category main-wrapper">
            @foreach($services as $service)
                <article class="card__product">
                    <a href="{{route('site.services.servicelists', ['service' => $service])}}"> 
                        <div class="card__cover">
                            <img src="{{asset($service->image_services)}}"  style="height: 200px;">
                        </div>
                        <header class="card__product-header">
                            <h2 class="title-medium">{{$service->name_services}}</h2>
                            <p>{{$service->description_services}}</p>
                        </header>
                    </a>
                </article>
            @endforeach
        </section>
    </div>
@endsection
