@extends('tpl_home.layout')
@section('content')
<div class="container_cart">

	<h1>Shopping Cart</h1>

	<div class="cart">

		<div class="products">

			<div class="product">

				<img src="shoes.jpg">

				<div class="product-info">

					<h3 class="product-name">New Shoes</h3>

					<h4 class="product-price">₹ 1,000</h4>

					<h4 class="product-offer">50%</h4>

					<p class="product-quantity">Qnt: <input value="1" name="">

					<p class="product-remove">

						<i class="fa fa-trash" aria-hidden="true"></i>

						<span class="remove">Remove</span>

					</p>

				</div>

			</div>


		</div>

		<div class="cart-total">

			<p>

				<span>Total Price</span>

				<span>₹ 3,000</span>

			</p>

			<p>

				<span>Number of Items</span>

				<span>2</span>

			</p>

			<p>

				<span>You Save</span>

				<span>₹ 1,000</span>

			</p>

			<a href="#">Proceed to Checkout</a>

		</div>

	</div>

</div>
@endsection