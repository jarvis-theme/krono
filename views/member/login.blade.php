<div id="tagline" class="title tleft"><section><h2>Login to Access</h2></section></div>

<section>
    <section class="middle">
        <article>
            <div class="title"><h2>Pelanggan Baru</h2></div>
            <div class="address">
                <p>Nikmati kemudahan berbelanja dengan mendaftar sebagai member. Cepat dan mudah dalam bertransaksi. Mudah untuk mengetahui status dan riwayat order kamu.</p>
                <a class="btn btn-info" href="{{url('member/create')}}">Daftar</a>
            </div>
        </article>
        <article>
            <div class="respond">
                <div class="title"><h2>Login</h2></div>
                <form action="{{url('member/login')}}" method="post">
                    <ul>
                        <li class="field">
                            <label for="email">Email</label>
                            <input class="email input" id="email" type="email" name="email" required>
                        </li>
                        <li class="field">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required>
                        </li>
                        <div>
                            <li class="field fleft"></li>
                            <li class="fright forget">
                                <a href="{{url('member/forget-password')}}">Lupa password?</a>
                            </li>
                        </div>
                    </ul>
                    <div class="block"><button type="submit" class="main">Login</button><button type="reset" class="normal">Reset</button>
                    </div>
                </form>
            </div>
        </article>
    </section>
</section>