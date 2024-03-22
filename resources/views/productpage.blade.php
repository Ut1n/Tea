@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex  justify-content-between ">
            <div >
                <img src="/public/build/assets/img/{{$card->url}}" class="w-75 rounded" alt="...">
            </div>
            <div class="w-75 d-flex flex-column gap-4" >
                <h2>{{$card->nameProduct}}</h2>
                <h4>Вид чая: {{$card->status->typeOfTea}}</h4>
                <p class="fs-5">{{$card->description}}</p>
                <h3>Цена: {{$card->price}} ₽</h3>
            </div>
        </div>
            <div class="d-flex gap-5 justify-content-end">
                <div >
                    <a href="{{route('objectcart',$card->id)}}" class="btn btn-primary ">Добавить в корзину</a>
                </div>
                <div>
                    <a href=""><img class="img-fluid" src="/public/build/assets/img/heartBlack.png" alt="" width="30" height="24"></a>
                </div>
            </div>
        <section >
            <div class="container my-5 py-5 text-dark">
                <div class="row d-flex justify-content-center">
                    <div class="card-body card p-4">
                        <div class="w-100">
                            <h5>Прокомментировать</h5>
                            <div class="form-outline">
                                <textarea placeholder="Какого ваше мнение по поводу этого товара?" class="form-control" id="textAreaExample" rows="4"></textarea>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <button type="button" class="btn btn-danger">Удалить</button>
                                <button type="button" class="btn btn-success">
                                                Отправить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


