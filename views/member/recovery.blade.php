<div id="tagline" class="title tleft"><section><h2>Lupa Password</h2></section></div>

<section>
    <section class="middle">
        <article>
            <div class="title"><h2>Pelanggan Baru</h2></div>
            <div class="address">
                <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member. Cepat dan mudah dalam bertransaksi. Mudah untuk mengetahui status dan riwayat order kamu.</p>
                <a href="{{url('member/create')}}" class="btn btn-info">Daftar</a>
            </div>
        </article>
        <article>
            <div class="respond">
                <div class="title"><h2>Update Password</h2></div>
                <form action="{{url('member/recovery/'.$id.'/'.$code)}}" method="post">
                    <ul>
                        <li class="field">
                            <label for="email">Password Baru</label>
                            <input class="email input" type="password" name="password" required>
                        </li>
                        <li class="field">
                            <label for="email">Konfirmasi Password Baru</label>
                            <input class="email input" type="password" name="password_confirmation" required>
                        </li>
                    </ul>
                    <div class="block">
                        <button type="submit" class="main">Simpan</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
</section>