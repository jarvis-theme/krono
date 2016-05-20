<div id="tagline" class="title tleft"><section><h2>{{short_description($produk->nama, 50)}}</h2></section></div>

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
            {{breadcrumbProduk($produk,';',';', true)}}
        </div>
        <div class="single-item middle">
            <article>
                <ul>
                    <li class="product">
                        <div class="post-image">
                            <a class="fancybox" title="{{$produk->nama}}" href="{{product_image_url($produk->gambar1,'large')}}"><img width="300" height="365" src="{{product_image_url($produk->gambar1, 'medium')}}" alt="{{$produk->nama}}"></a>
                        </div>
                    </li>
                    @if($produk->gambar2 != '')
                    <li class="thumb">
                        <a class="fancybox" href="{{product_image_url($produk->gambar2,'large')}}" title="{{$produk->nama}}">
                            {{HTML::image(product_image_url($produk->gambar2,'thumb'),'Thumbnail 1',array('width'=>'30%'))}}
                        </a>
                    </li>
                    @endif
                    @if($produk->gambar3 != '')
                    <li class="thumb">
                        <a class="fancybox" href="{{product_image_url($produk->gambar3,'large')}}" title="{{$produk->nama}}">
                            {{HTML::image(product_image_url($produk->gambar3,'thumb'),'Thumbnail 2',array('width'=>'30%'))}}
                        </a>
                    </li>
                    @endif
                    @if($produk->gambar4 != '')
                    <li class="thumb">
                        <a class="fancybox" href="{{product_image_url($produk->gambar4,'large')}}" title="{{$produk->nama}}">
                            {{HTML::image(product_image_url($produk->gambar4,'thumb'),'Thumbnail 3',array('width'=>'30%'))}}
                        </a>
                    </li>
                    @endif
                </ul>
            </article>
            <article>
                <div class="title">
                  <h4>{{short_description($produk->nama,70)}}</h4>
                </div>
                <p class="price">
                    @if(!empty($produk->hargaCoret))
                    <del><span class="amount">{{price($produk->hargaCoret)}}</span></del>
                    @endif
                    <span class="amount">{{price($produk->hargaJual)}}</span>
                </p>
                <form class="cart" method="post" enctype="multipart/form-data" action="#" id="addorder">
                    @if($opsiproduk->count() > 0)
                    <label class="col-sm-4 control-label">Opsi :</label>
                    <div class="picker">
                        <select class="form-control">
                            <option value="">-- Pilih Opsi --</option>
                            @foreach ($opsiproduk as $key => $opsi)
                            <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <li class="append field">
                        <input class="narrow text input" type="number" min="1" value="1" name="qty">
                        <button class="main" type="submit">Beli</button>
                    </li>
                    <div class="desc">
                        {{sosialShare(product_url($produk))}}
                    </div>
                </form>
            </article>
        </div>
        <ul class="accordion-tabs-minimal">
            <li class="tab-header-and-content">
                <a href="#" class="tab-link is-active">Deskripsi</a>
                <div class="tab-content"><p>{{$produk->deskripsi}}</p></div>
            </li>
            <li class="tab-header-and-content">
                <a href="#" class="tab-link">Detail</a>
                <div class="tab-content">
                    <ul>
                        <li>Berat: {{$produk->berat}} gram</li>
                        <li>Stock: {{$produk->stok}}</li>
                        <li>Brand: {{$produk->vendor}}</li>
                    </ul>
                </div>
            </li>
            <li class="tab-header-and-content">
                <a href="#" class="tab-link">Review</a>
                <div class="tab-content">{{ pluginComment(product_url($produk), @$produk) }}</div>
            </li>
        </ul>
        @if(count(other_product($produk)) > 0)
        <div id="newproduct">
            <h2>Produk <span>Lainnya</span></h2>
            <hr>
            <ul>
                @foreach(other_product($produk) as $other)
                <li class="product">
                    <div class="post-image">
                        <a href="{{product_url($other)}}"><img width="300" height="365" src="{{product_image_url($other->gambar1, 'medium')}}" alt="{{$other->nama}}"></a> 
                    </div>
                    <div class="product-detail">
                        <h4 class="post-title"><a href="{{product_url($other)}}">{{short_description($other->nama,30)}}</a></h4>
                        <span class="price"><span class="amount">{{price($other->hargaJual)}}</span></span>         
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </article>
</section>