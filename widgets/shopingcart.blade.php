<a href="{{url('checkout')}}">
	<i class="fi-shopping-cart"></i>
	{{Shpcart::cart()->total_items()}}&nbsp;Items - <strong>{{ price(Shpcart::cart()->total() )}}</strong>
</a>