<div id="tagline" class="title tleft"><section><h2>Register</h2></section></div>

<section class="page">
    <aside>
        <ul class="accordion">
            <li><a href="{{url('konfirmasiorder')}}">Konfirmasi Order</a></li>
            <li><a href="{{url('member')}}">History Order</a></li>
        </ul>
    </aside> 
    <article>
        <form action="{{url('member')}}" method="post">
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Nama</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="text" name="nama" value="{{Input::old('nama')}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Email</strong></label>
                </div>
                <div>
                    <input class="wide email input" id="text2" type="email" name="email" value="{{Input::old('email')}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Password</strong></label>
                </div>
                <div>
                    <input class="wide password input" id="text2" type="password" name="password" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Konfirmasi Password</strong></label>
                </div>
                <div>
                    <input class="wide password input" id="text2" type="password" name="password_confirmation" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>No. Telepon / HP</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="number" name="telp" value="{{Input::old('telp')}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Negara</strong></label>
                </div>
                <div>
                    <div class="picker">
                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, Input::old('negara'),array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"wide", "name"=>"negara", "onchange"=>"searchProvinsi(this.value)"))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Provinsi</strong></label>
                </div>
                <div>
                    <div class="picker">
                        {{Form::select('provinsi', array('' => '-- Pilih Provinsi --') + $provinsi, Input::old('provinsi'), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "name"=>"provinsi", "class"=>"wide", "onchange"=>"searchKabupaten(this.value)"))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Kota</strong></label>
                </div>
                <div>
                    <div class="picker">
                        {{Form::select('kota', array('' => '-- Pilih Kota --') + $kota, Input::old('kota'), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"wide", "name"=>"kota"))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Alamat</strong></label>
                </div>
                <div>
                    <textarea class="input textarea" rows="3" name="alamat" required></textarea>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Kode Pos</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="text" name="kodepos" value="{{Input::old('kodepos')}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Captcha</strong></label>
                </div>
                <div>
                    {{ HTML::image(Captcha::img(), 'Captcha image') }}
                    <input class="text input" type="text" name="captcha" placeholder="Masukkan kode diatas" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="checkbox" for="check2">
                        <input name="readme" id="check2" value="1" type="checkbox" checked />
                        <span></span> Saya telah membaca dan menyetujui <a class="rules" href="{{URL::to('service')}}" target="_blank" ><b>Syarat dan Ketentuan</b></a> di {{Theme::place('title')}}
                    </label>
                </div>
            </div>
            <div class="field row">
                <div>
                    <button class="main" type="submit">Daftar</button> <button type="reset" class="normal">Reset</button>
                </div>
            </div>
        </form>
    </article>
</section>