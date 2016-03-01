<div id="tagline" class="title tleft"><section><h2>Hasil Pencarian</h2></section></div>

<section>
    <section class="page">
        <article>
            <section>
                @if($jumlahCari != 0)
                    @if(count($hasilpro) > 0)
                    <ul>
                        @foreach($hasilpro as $listproduk)
                        <li class="product items">
                            <div class="post-image">
                                <a href="{{product_url($listproduk)}}">{{HTML::image(product_image_url($listproduk->gambar1,'medium'), $listproduk->nama, array("height"=>"365", "width"=>"300"))}}</a>
                                @if(is_outstok($listproduk))
                                <span class="sold">Kosong</span>
                                @elseif(is_terlaris($listproduk))
                                <span class="hot">Terlaris</span>
                                @elseif(is_produkbaru($listproduk))
                                <span class="new">Terbaru</span>
                                @endif
                            </div>
                            <div class="product-detail">
                                <h4 class="post-title"><a href="{{product_url($listproduk)}}">{{short_description($listproduk->nama, 21)}}</a></h4>
                                <span class="price">
                                    @if($listproduk->hargaCoret != "")
                                    <del><span class="amount">{{price($listproduk->hargaCoret)}}</span></del>
                                    @endif
                                    <ins><span class="amount">{{price($listproduk->hargaJual)}}</span></ins>
                                </span>
                                <a href="{{product_url($listproduk)}}" class="add_to_cart"><i class="fi-shopping-cart"></i></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="clearfix"></div>
                    @endif
                    @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                    <div>
                        <article>
                            @foreach($hasilhal as $hal)
                            <h2><a>{{$hal->judul}}</a></h2>
                            <div class="line"></div>
                            <p>{{short_description($hal->isi, 300)}}</p>
                            @endforeach
                            @foreach($hasilblog as $blog)  
                            <h2><a href="{{blog_url($blog)}}">{{$blog->judul}}</a></h2>
                            <div class="meta">
                                <i class="fi-calendar"></i> {{waktuTgl($blog->updated_at)}} <i class="fi-folder"></i> <a href="{{blog_category_url(@$blog->kategori)}}">{{@$blog->kategori->nama}}</a>
                            </div>
                            <p>{{short_description($blog->isi, 300)}}</p>
                            <a href="{{blog_url($blog)}}" class="btn btn-default">Baca selengkapnya...</a>
                            @endforeach 
                        </article>
                    </div>
                    @endif
                @else
                    <article><i>Hasil pencarian tidak ditemukan</i></article>
                @endif
            </section>
        </article>
        <aside id="scroll-on-page-top">
            @foreach(vertical_banner() as $banners)
            <div id="advertising">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                </a>
            </div>
            @endforeach
        </aside>
    </section>
</section>