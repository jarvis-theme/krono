<div id="tagline" class="title tleft"><section><h2>Kontak Kami</h2></section></div>
    
<section>
    <section class="middle">
        <article>
            <div class="respond">
                <div class="title"><h2>Hubungi Kami</h2></div>
                <form action="{{url('kontak')}}" method="post">
                    <ul>
                        <li class="field">
                            <label for="name">Nama</label>
                            <input class="text input" id="name" type="text" name="namaKontak" required>
                        </li>
                        <li class="field">
                            <label for="email">Email</label>
                            <input class="email input" id="email" type="email" name="emailKontak" required>
                        </li>
                        <li class="field">
                            <label for="message">Pesan</label>
                            <textarea class="input textarea" rows="3" name="messageKontak" required></textarea>
                        </li>
                    </ul>
                    <div class="medium metro rounded btn primary"><button class="main">Kirim</button></div>
                </form>     
            </div>
        </article>
        <article>
            <div class="title"><h2>Alamat</h2></div>
            <div class="address">
                <address>
                    <h6>{{Theme::place('title')}}</h6>
                    {{$kontak->alamat}}<br>
                    @if(!empty($kontak->telepon))
                        Telepon: {{$kontak->telepon}}<br>
                    @endif
                    @if(!empty($kontak->hp))
                        SMS: {{$kontak->hp}}<br>
                    @endif
                    @if(!empty($kontak->bb))
                        BBM: {{$kontak->bb}}<br>
                    @endif
                </address>
                <address>
                    <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a><br><br>
                </address>
            </div>
            @if($kontak->lat!='0' || $kontak->lng!='0')
                <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
            @else
                <iframe style="float:right;width:100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
            @endif
        </article>
    </section>
</section>