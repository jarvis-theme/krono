<div id="tagline" class="title tleft"><section><h2>Member Area</h2></section></div>
  
<section class="page">
    <aside>
        <ul class="accordion">
            <li><a href="{{url('member')}}">Daftar Pembelian</a></li>
            <li><a href="{{url('member/profile/edit')}}">Ubah Profil</a></li>
        </ul>
    </aside> 
    <article>
        <form action="{{url('member/update')}}" method="put">
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Nama</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="text" name="nama" value="{{$user->nama}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Email</strong></label>
                </div>
                <div>
                    <input class="wide email input" id="text2" type="email" name="email" value="{{$user->email}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>No. Telepon</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="number" name="telp" value="{{$user->telp}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Negara</strong></label>
                </div>
                <div>
                    <div class="picker">
						{{Form::select('negara',array('' => '-- Pilih Negara --') + $negara, ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'form-control'))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Provinsi</strong></label>
                </div>
                <div>
                    <div class="picker">
						{{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'form-control'))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Kota</strong></label>
                </div>
                <div>
                    <div class="picker">
						{{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'form-control'))}}
                    </div>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Alamat</strong></label>
                </div>
                <div>
                    <textarea class="input textarea" rows="3" name="alamat" required>{{$user->alamat}}</textarea>
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Kode Pos</strong></label>
                </div>
                <div>
                    <input class="wide text input" id="text2" type="text" name="kodepos" value="{{$user->kodepos}}" required />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Password Lama</strong></label>
                </div>
                <div>
                    <input class="wide password input" id="text2" type="password" name="oldpassword" />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Password Baru</strong></label>
                </div>
                <div>
                    <input class="wide password input" id="text2" type="password" name="password" />
                </div>
            </div>
            <div class="field row">
                <div>
                    <label class="mheight" for="text2"><strong>Ulang Password</strong></label>
                </div>
                <div>
                    <input class="wide password input" id="text2" type="password" name="password_confirmation" />
                </div>
            </div>
            <div class="field row">
                <div>
                    <button class="main" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </article>
</section>