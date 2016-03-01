<div id="tagline" class="title tleft"><section><h2>{{$data->judul}}</h2></section></div>

<section>
    <section class="page">
        <article>
            <section>
                <p>{{$data->isi}}</p>
            </section>
        </article>
        <aside id="scroll-on-page-top">
            @foreach(vertical_banner() as $banners)
            <div id="advertising">
                <a href="{{url($banners->url)}}">
                    {{HTML::image(banner_image_url($banners->gambar),'Info Promo')}}
                </a>
            </div>
            @endforeach
        </aside>
    </section>
</section>