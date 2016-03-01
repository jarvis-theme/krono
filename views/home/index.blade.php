<div id="newproduct">
    <section>
        <h2>Produk <span>Kami</span></h2>
        <ul>
            @foreach(home_product() as $product)
            <li class="product">
                <div class="post-image">
                    <a href="{{product_url($product)}}"><img src="{{url(product_image_url($product->gambar1,'medium'))}}" alt="{{$product->nama}}"></a>
                </div>
                @if(is_outstok($product))
                <span class="sold">Kosong</span>
                @elseif(is_terlaris($product))
                <span class="hot">Terlaris</span>
                @elseif(is_produkbaru($product))
                <span class="new">Terbaru</span>
                @endif
                <div class="product-detail">
                    <h4 class="post-title"><a href="{{product_url($product)}}">{{short_description($product->nama, 21)}}</a></h4>
                    <span class="price"><span class="amount">{{price($product->hargaJual)}}</span></span>
                    <a href="{{product_url($product)}}" class="add_to_cart"><i class="fi-shopping-cart"></i></a>          
                </div>
            </li>
            @endforeach
        </ul>
    </section>
</div>
<div class="banner">
    <section>
        @foreach(horizontal_banner() as $banners)
        <a href="{{URL::to($banners->url)}}">
            {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
        </a>
        @endforeach
    </section>
</div>