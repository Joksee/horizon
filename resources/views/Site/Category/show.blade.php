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
                        <img src="{{asset($category->image_category)}}" style="width: 322px;">
                    </div>
                    <header class="card__product-header">
                        <h2 class="title-medium">{{$category->name_category}}</h2>
                        <p>{{$category->description_category}}</p>
                    </header>
                </a>
            </article>
            <a class="back-to-products" href="{{route('site.products')}}">Voltar</a>
        </aside>

        <section class="products__list">
            <header>
                <h2 class="title-large">Categoria: {{$category->name_category}} </h2>
                <p>{{$category->description2_category}}</p>
            </header>
            @foreach($category->products as $product)
            <article class="product">
                <a class="clickable-area" href="javascript:;">
                    <header class="product__header">
                        <h3 class="title-medium">{{$product->name_products}}</h3>
                        <!-- Tooggle item -->
                        <span class="collapse__open"></span>
                    </header>
                    @if($product->exclusive_products)
                        <img class="exclusive__label" src="{{asset('images/Exclusivo-label.png')}}" alt="Etiqueta de
                        produto
                        exclusivo">
                    @endif
                </a>

                <section class="product__content">

                    <div class="product__desciption">
                        {{$product->description_products}}
                    </div>

                    <!-- teste da imagem da aba de produto -->
                    <div class="product__image">
                        <img src="{{asset($product->image_products)}}" style="width: 200px;">
                    </div>

                </section>
            </article>
            @endforeach
        </section>
    </div>
@endsection
