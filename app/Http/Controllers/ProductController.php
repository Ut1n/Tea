<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function catalog() //для каталога карточек
    {
        $cards = product::all();
        return view('catalog', compact('cards'));
    }
    public function show(Product $card) //для страници одной карточки
    {
        return view('productpage', compact('card'));
    }
    public function object() //корзина
    {
        return view('cart');
    }
    public function addtocart($id) //добавление товара в корзину
    {
        $tea = product::findOrFail($id);
        $cart = session()->get('cart',[]);
        $cartItem = [
            'url' => $tea->url,
            'nameProduct' => $tea->nameProduct,
            'typeOfTea' => $tea->typeOfTea,
            'description' => $tea->description,
            'quantity' => 1,
            'price' => $tea->price
        ];
        array_push($cart, $cartItem);
        session()->put('cart', $cart);
        return redirect()->back()->with('success','Товар добавлен в корзину!');
    }
    public function getTotalPrice() // счет общей цены
    {
        $cart = session()->get('cart', []);
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }
    public function clearCart() // удалить все товары в корзине
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Корзина очищена!');
    }
    public function removeFromCart($id) //удалить один товар
    {
        $cart = session()->get('cart', []);

        foreach($cart as $key => $item) {
            if($key == $id) {
                unset($cart[$key]);
            }
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success','Товар удален из корзины!');
    }
}
