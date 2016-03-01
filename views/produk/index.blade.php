<div id="tagline" class="title tleft"><section><h2>Koleksi Produk</h2></section></div>

<section class="page">
    <aside>
        <ul class="accordion">
        @foreach(list_category() as $side_menu)
            @if($side_menu->parent == '0')
            <li>
                @if($side_menu->anak->count() != 0)
                <a href="{{category_url($side_menu)}}" class="js-accordion-trigger">{{$side_menu->nama}}</a>
                <ul class="submenu">
                    @foreach($side_menu->anak as $submenu)
                    @if($submenu->parent == $side_menu->id)
                    <li>
                        @if($submenu->anak->count() != 0)
                        <a href="{{category_url($submenu)}}" class="js-accordion-trigger2">{{$submenu->nama}}</a>
                        <ul class="submenu2">
                            @foreach($submenu->anak as $submenu2)
                            @if($submenu2->parent == $submenu->id)
                            <li>
                                <a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                        @else
                        <a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
                @else
                <a href="{{category_url($side_menu)}}">{{$side_menu->nama}}</a>
                @endif
            </li>
            @endif
        @endforeach
        </ul>
        <div class="powerup">
            {{pluginSidePowerup()}}
        </div>
    </aside>
    <article>
        <div class="breadcrumb">
            {{breadcrumbProduk(@$produk,';',';', true, @$category, @$collection)}}
        </div>
        <section>
            <ul>
                @foreach(list_product(null, @$category) as $product)
                <li class="product items">
                    <div class="post-image">
                        <a href="{{product_url($product)}}"><img width="300" height="365" src="{{url(product_image_url($product->gambar1, 'medium'))}}" alt="{{short_description($product->nama,15)}}"></a>
                        @if(is_outstok($product))
                        <span class="sold">Kosong</span>
                        @elseif(is_terlaris($product))
                        <span class="hot">Terlaris</span>
                        @elseif(is_produkbaru($product))
                        <span class="new">Terbaru</span>
                        @endif
                    </div>
                    <div class="product-detail">
                        <h4 class="post-title"><a href="{{product_url($product)}}">{{short_description($product->nama, 21)}}</a></h4>
                        <span class="price">
                            @if($product->hargaCoret != "")
                            <del><span class="amount">{{price($product->hargaCoret)}}</span></del>
                            @endif
                            <ins><span class="amount">{{price($product->hargaJual)}}</span></ins>
                        </span>
                        <a href="{{product_url($product)}}" class="add_to_cart"><i class="fi-shopping-cart"></i></a>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="clearfix"></div>
            {{list_product(null, @$category)->links()}}
        </section>
    </article>
</section>