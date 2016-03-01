<div id="tagline" class="title tleft"><section><h2>Konfirmasi Pembayaran</h2></section></div>

<section class="page">
    <aside>
        @foreach(vertical_banner() as $banners)
        <div id="advertising">
            <a href="{{url($banners->url)}}">
                {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
            </a>
        </div>
        @endforeach
    </aside> 
    <section>
        <article>
            <div class="respond">
                <div class="title"><h2>Konfirmasi Order</h2></div>
                <form action="{{url('konfirmasiorder')}}" method="post">
                    <ul>
                        <li class="field">
                            <label for="kode">Kode Order</label>
                            <input class="input" type="text" name="kodeorder" required>
                        </li>
                    </ul>
                    <div class="block"><button type="submit" class="main">Kirim</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
</section>