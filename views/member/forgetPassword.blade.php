<div id="tagline" class="title tleft"><section><h2>Lupa Password</h2></section></div>

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
            <div class="title"><h2>Reset Password</h2></div>
            <form action="{{url('member/forgetpassword')}}" method="post">
                <ul>
                    <li class="field">
                        <label for="email">Email</label>
                        <input class="email input" id="email" type="email" name="recoveryEmail" required>
                    </li>
                </ul>
                <div class="block"><button type="submit" class="main">Kirim</button>
                </div>
            </form>
        </div>
    </article>
</section>