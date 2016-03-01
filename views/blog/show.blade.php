<div id="tagline" class="title tleft"><section><h2>Detail Blog</h2></section></div>
    
<section class="blog">
    <article>
        <section>
            <h2><a href="#">{{$detailblog->judul}}</a></h2>
            <div class="meta">
               <i class="fi-calendar"></i> {{waktuTgl($detailblog->created_at)}} <i class="fi-folder"></i> <a href="{{blog_category_url(@$detailblog->kategori)}}">{{@$detailblog->kategori->nama}}</a> <span class="sosmed">{{sosialShare(blog_url($detailblog))}}</span>
            </div>
            <p>{{$detailblog->isi}}</p>
        </section>

        <div class="pagination">
            <ul>
                @if(prev_blog($detailblog))
                    <li class="page-prev fleft"><a href="{{blog_url(prev_blog())}}">prev</a></li>
                @else
                    <li></li>
                @endif
                @if(next_blog($detailblog))
                    <li class="page-next fright"><a href="{{blog_url(next_blog())}}">next</a></li>
                @else
                    <li></li>
                @endif            
          </ul>
        </div>
        <div class="clearfix"></div>
        {{$fbscript}}
        {{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}}
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