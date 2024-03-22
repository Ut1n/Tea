@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="d-flex gap-3">
                <div class="dropdown">
                    <h5>Вид чая:</h5>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Все
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Черный чай</a></li>
                        <li><a class="dropdown-item" href="#">Зеленый чай </a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <h5>Цена:</h5>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Неважно
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Сначала дороже</a></li>
                        <li><a class="dropdown-item" href="#">Сначала дешевле</a></li>
                    </ul>
                </div>
            </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($cards as $card)
                        <div  >
                            <div class="card h-100 ">
                                <a class="link-dark text-decoration-none" href="{{ route('product', $card->id)}}">
                                    <img src="/public/build/assets/img/{{$card->url}}" class="card-img-top " alt="...">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h5 class="card-title">{{$card->nameProduct}}</h5>
                                    <p class="card-text m-2">Вид чая: {{$card->status->typeOfTea}}</p>

                                    <p class="card-text m-2">Цена: {{$card->price}} ₽</p>
                                    <div class="d-flex align-items-center gap-4">
                                            <a  href="{{route('objectcart',$card->id)}}" class="btn btn-success ">Добавить в корзину</a>
                                            <a href=""><img  class="img-fluid" src="/public/build/assets/img/heartBlack.png" alt="" width="30" height="24"></a>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                @endforeach
                </div>
        </div>
    </div>
@endsection
