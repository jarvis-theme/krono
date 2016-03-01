<div class="block">
	<div class="news">
		<h3>Anda Baru Di {{Theme::place('title')}}?</h3>
        <p>Daftar & dapatkan update terbaru serta penawaran spesial</p>
        <form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate" target="_blank" novalidate>
        	<input type="text" placeholder="Masukkan email anda" class="input" name="email" required {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}>
            <button class="normal" type="submit" {{ @$mailing->action==''?'disabled="disabled" style="opacity: 0.5; cursor: default;"':'' }}><span>DAFTAR</span></button>
        </form>
    </div>
</div>