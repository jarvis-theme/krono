    <div id="slider">
        <section class="slider-wrap">
            <ul>
                @foreach(slideshow() as $slide)
                <li>
                    <div class="slider-image">
                        <img src="{{slide_image_url($slide->gambar)}}" alt="slideshow">
                        @if(!empty($slide->text))
                        <div class="slider-content">
                            <div class="slider-desc">
                                <h2 class="title">{{$slide->title}}</h2>
                                <p>{{$slide->text}}</p>
                                @if(!empty($slide->url))
                                <a href="{{filter_link_url($slide->url)}}" class="button">Lihat</a>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </div>