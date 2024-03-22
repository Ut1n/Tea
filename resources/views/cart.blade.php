@extends('layouts.app')

@section('content')
    <div class="container">
    <table id="cart" class="table table-bordered">
        <thead>
        <tr>
            <td colspan="5" class=''>

                <div class="d-flex justify-content-between ">
                    <a href="{{ url('/catalog') }}" class="btn btn-primary">←</a>
                    <form method="POST" action="{{ route('clearCart') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Очистить корзину</button>
                    </form>
                </div>
            </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Продукт</th>
            <th>Цена</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="g-5 row">
                            <div class="col-sm-1 hidden-xs"><img src="/public/build/assets/img/{{$details['url']}}" class="card-img-top"/></div>
                            <div class="col-sm-9">

                                <h4 class="nomargin">{{$details['nameProduct']}}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}₽</td>
                    <td class="actions">
                        <a class="btn btn-danger delete-product" href="{{ route('remove-from-cart', $id) }}">Удалить</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4" class="">
                <div class="d-flex justify-content-between ">
                    <p class="fs-5">Общая цена: {{ app()->make('App\Http\Controllers\ProductController')->getTotalPrice() }}₽</p>
                    <div><a href="{{ url('/catalog') }}" class="btn btn-success">Купить</a></div>
                </div>
            </td>
        </tr>
        </tfoot>
    </table>
    </div>
@endsection
