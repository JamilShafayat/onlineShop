@extends('frontend.master');

@section('content')
    @include('frontend.partials.banner')
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <form action="#" method="post" role="form" enctype="multipart/form-data">
            @csrf 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderDetails as $orderDetail)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="img/cart/cart-1.jpg" alt="">
                                            <h5>{{ $orderDetail->product->title}}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            ${{ $orderDetail->price}}
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{ $orderDetail->quantity }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            ${{ $orderDetail->price * $orderDetail->quantity }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="{{ route('main') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                            <label type="submit" class="primary-btn cart-btn cart-btn-right">
                                <span class="icon_loading"></span>
                                    Upadate Cart
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            @if($order)
                            <ul>
                                <li>Subtotal <span>${{ $order->total_amount}}</span></li>
                                <li>Total <span>${{ $order->paid_amount}}</span></li>
                            </ul>
                            <a href="{{ url('checkout', $order->id) }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection