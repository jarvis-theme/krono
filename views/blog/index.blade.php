<div id="tagline" class="title tleft"><section><h2>Blog</h2></section></div>
    
<section class="blog">
    <article>
        @foreach(list_blog(null, @$blog_category) as $value)
        <section>
            <h2><a href="{{blog_url($value)}}">{{$value->judul}}</a></h2>
            <div class="meta">
                <i class="fi-calendar"></i> {{waktuTgl($value->created_at)}} <i class="fi-folder"></i> <a href="{{blog_category_url(@$value->kategori)}}">{{@$value->kategori->nama}}</a>
            </div>
            <p>{{short_description($value->isi, 300)}}</p>
            <a href="{{blog_url($value)}}" class="btn btn-default">Baca selengkapnya...</a>
        </section>
        @endforeach

        {{list_blog(null,@$blog_category)->links()}}
    </article>
    <aside>
        <article>
            @if(count(list_blog_category()) > 0)
            <h2>Kategori</h2>
            <ul>
                @foreach(list_blog_category() as $kat)
                @if(!empty($kat->nama))
                <li><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></li>
                @endif
                @endforeach
            </ul>
            @endif
        </article>
        <article>
            @if(count(recentBlog(null, 5)) > 0)
            <h2>Tulisan Terbaru</h2>
            <ul>
                @foreach(recentBlog(null, 5) as $artikel)
                <li><a href="{{blog_url($artikel)}}">{{short_description($artikel->judul, 50)}} <span class="date"><i class="fi-calendar"></i> {{waktuTgl($artikel->created_at)}}</span></a></li>
                @endforeach
            </ul>
            @endif
        </article>
    </aside>
</section>