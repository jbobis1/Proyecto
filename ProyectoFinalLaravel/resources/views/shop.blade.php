<!doctype html>
<html lang="en">

<head>
    <title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/estilos.css') }} ">


    <x-app-layout>
    <x-slot name="header" >

        </x-slot>
        <div class="container" style="margin-top: 80px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tienda</li>
                </ol>
            </nav>
             <!-- Mostrar los enlaces de paginación -->

    {{-- Mostrar detalles de la categoría --}}


{{ $products->links() }}
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4>Productos</h4>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        @foreach ($products as $pro)
                            <div class="col-lg-3">
                                <div class="card" style="margin-bottom: 20px; height: auto;">
                                    <img src="/images/{{ $pro->image_path }}" class="card-img-top mx-auto"
                                        style="height: 150px; width: 150px;display: block;"
                                        alt="{{ $pro->image_path }}">
                                    <div class="card-body">
                                        <a href="">
                                            <h6 class="card-title">{{ $pro->name }}</h6>
                                        </a>
                                        <p>${{ $pro->price }}</p>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $pro->id }}" id="id"
                                                name="id">
                                            <input type="hidden" value="{{ $pro->name }}" id="name"
                                                name="name">
                                            <input type="hidden" value="{{ $pro->price }}" id="price"
                                                name="price">
                                            <input type="hidden" value="{{ $pro->image_path }}" id="img"
                                                name="img">
                                            <input type="hidden" value="{{ $pro->slug }}" id="slug"
                                                name="slug">
                                              
                                            <input type="hidden" value="1" id="quantity" name="quantity">

                                          
                                            <div class="card-footer" style="background-color: white;">

                                            @if(!Auth::user()->admin)
                                                <div class="row">
                                                    <button class="btn btn-secondary btn-sm" class="tooltip-test"
                                                        title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                                    </button>

                                                </div>
                                             
                                                @endif
                    

                                            </div>

                                        </form>
    
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>

    </x-app-layout>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    </body>

</html>
