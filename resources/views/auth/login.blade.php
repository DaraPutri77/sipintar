<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#294C3A">

    <title>Masuk | SIPINTAR</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="sipintar-page">

<main class="login-shell">

    {{-- =========================================
         PANEL KIRI - BRANDING SIPINTAR
    ========================================== --}}
    <section class="brand-panel">

        <header class="brand-header">

            <a href="/" class="brand-lockup">

                <div class="brand-symbol">
                    <svg viewBox="0 0 48 48" fill="none"
                         xmlns="http://www.w3.org/2000/svg">

                        <path d="M7 19L24 7L41 19"
                              stroke="#F6F2E9"
                              stroke-width="2.8"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>

                        <path d="M11 18V40H37V18"
                              stroke="#F6F2E9"
                              stroke-width="2.5"
                              stroke-linejoin="round"/>

                        <path d="M11 26H37M11 33H37"
                              stroke="#A9B9A2"
                              stroke-width="2"/>

                        <rect x="15" y="20" width="8" height="5"
                              rx="1.2" fill="#C8A96A"/>

                        <rect x="26" y="20" width="7" height="5"
                              rx="1.2" fill="#A9B9A2"/>

                        <rect x="15" y="28" width="10" height="4"
                              rx="1" fill="#C86F52"/>

                        <rect x="28" y="28" width="5" height="4"
                              rx="1" fill="#F6F2E9"/>

                        <rect x="15" y="35" width="8" height="3"
                              rx="1" fill="#A9B9A2"/>

                        <rect x="26" y="35" width="7" height="3"
                              rx="1" fill="#C8A96A"/>

                    </svg>
                </div>

                <div class="brand-name">
                    <strong>SIPINTAR</strong>
                    <span>Sistem Informasi Persediaan Terintegrasi</span>
                </div>

            </a>

            <div class="brand-chip brand-chip--wide">

                <span class="chip-box-icon">
                    <svg viewBox="0 0 24 24" fill="none">

                        <path d="M12 3L19 7L12 11L5 7L12 3Z"
                              stroke="currentColor"
                              stroke-width="1.7"
                              stroke-linejoin="round"/>

                        <path d="M5 7V15L12 19V11"
                              stroke="currentColor"
                              stroke-width="1.7"
                              stroke-linejoin="round"/>

                        <path d="M19 7V15L12 19"
                              stroke="currentColor"
                              stroke-width="1.7"
                              stroke-linejoin="round"/>

                    </svg>
                </span>

                <span>PENGELOLAAN<br>PERSEDIAAN</span>

            </div>

        </header>


        {{-- INTRO BRAND --}}
        <div class="brand-copy">

            <p class="brand-eyebrow">
                TERTATA <span>·</span>
                TERINTEGRASI <span>·</span>
                TERPERCAYA
            </p>

            <h1>
                Satu gudang,<br>
                <em>satu kendali</em><br>
                untuk persediaan.
            </h1>

            <p class="brand-description">
                Kelola permintaan dan persediaan barang dalam satu alur
                yang tertib, transparan, dan mudah dipantau.
            </p>

        </div>


        {{-- ILUSTRASI GUDANG --}}
        <div class="illustration-card">

            <div class="illustration-header">

                <span>RUANG PERSEDIAAN</span>

                <span class="illustration-status">
                    <i></i>
                    TERORGANISIR
                </span>

            </div>

            <div class="illustration-scene">

                <svg viewBox="0 0 620 300"
                     class="warehouse-art"
                     xmlns="http://www.w3.org/2000/svg"
                     fill="none">

                    <defs>

                        <linearGradient id="boxA"
                                        x1="0" y1="0"
                                        x2="1" y2="1">
                            <stop stop-color="#E7D3AA"/>
                            <stop offset="1" stop-color="#C8A66E"/>
                        </linearGradient>

                        <linearGradient id="boxB"
                                        x1="0" y1="0"
                                        x2="1" y2="1">
                            <stop stop-color="#A9B9A2"/>
                            <stop offset="1" stop-color="#718B73"/>
                        </linearGradient>

                    </defs>

                    <circle cx="470" cy="65" r="90"
                            fill="#A9B9A2" opacity=".10"/>

                    <circle cx="100" cy="220" r="110"
                            fill="#E7D3AA" opacity=".07"/>

                    {{-- RAK GUDANG --}}
                    <path d="M40 265H580"
                          stroke="#A9B9A2"
                          stroke-opacity=".35"/>

                    <g stroke="#D8DCCB"
                       stroke-opacity=".8"
                       stroke-width="5"
                       stroke-linecap="round">

                        <path d="M125 65V245"/>
                        <path d="M470 65V245"/>

                        <path d="M125 100H470"/>
                        <path d="M125 170H470"/>
                        <path d="M125 240H470"/>

                    </g>

                    {{-- BARANG RAK ATAS --}}
                    <g>

                        <rect x="150" y="67" width="70" height="32"
                              rx="5" fill="url(#boxA)"/>

                        <path d="M185 67V99"
                              stroke="#987A4C" stroke-width="2"/>

                        <rect x="238" y="48" width="66" height="51"
                              rx="5" fill="url(#boxB)"/>

                        <path d="M271 48V99"
                              stroke="#527054" stroke-width="2"/>

                        <rect x="320" y="72" width="60" height="27"
                              rx="5" fill="#C86F52"/>

                        <path d="M350 72V99"
                              stroke="#8F503B" stroke-width="2"/>

                        <rect x="395" y="56" width="55" height="43"
                              rx="5" fill="url(#boxA)"/>

                    </g>

                    {{-- BARANG RAK TENGAH --}}
                    <g>

                        <rect x="150" y="135" width="78" height="34"
                              rx="5" fill="#C86F52"/>

                        <path d="M189 135V169"
                              stroke="#8F503B" stroke-width="2"/>

                        <rect x="246" y="117" width="82" height="52"
                              rx="5" fill="url(#boxA)"/>

                        <path d="M287 117V169"
                              stroke="#987A4C" stroke-width="2"/>

                        <rect x="347" y="139" width="95" height="30"
                              rx="5" fill="url(#boxB)"/>

                        <path d="M394 139V169"
                              stroke="#527054" stroke-width="2"/>

                    </g>

                    {{-- BARANG RAK BAWAH --}}
                    <g>

                        <rect x="150" y="202" width="65" height="37"
                              rx="5" fill="url(#boxB)"/>

                        <rect x="232" y="185" width="92" height="54"
                              rx="5" fill="url(#boxA)"/>

                        <rect x="342" y="202" width="100" height="37"
                              rx="5" fill="#C86F52"/>

                    </g>

                    {{-- TANAMAN DEKORASI --}}
                    <g>

                        <path d="M520 246V185"
                              stroke="#A9B9A2" stroke-width="4"/>

                        <path d="M520 207C487 203 482 180 491 172C511 176 520 190 520 207Z"
                              fill="#A9B9A2"/>

                        <path d="M520 222C548 214 555 191 545 183C529 190 520 204 520 222Z"
                              fill="#789477"/>

                        <path d="M520 190C513 164 525 149 537 151C543 169 535 181 520 190Z"
                              fill="#A9B9A2"/>

                        <path d="M503 246H537L532 263H508L503 246Z"
                              fill="#C86F52"/>

                    </g>

                    <path d="M40 264H580"
                          stroke="#A9B9A2"
                          stroke-width="3"
                          stroke-opacity=".5"/>

                </svg>


                {{-- FLOATING CARD ATAS --}}
                <div class="floating-note floating-note--top">

                    <span class="note-icon">

                        <svg viewBox="0 0 24 24" fill="none">

                            <path d="M4 16L9 11L13 14L20 6"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>

                            <path d="M15 6H20V11"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"/>

                        </svg>

                    </span>

                    <span>
                        <strong>Data lebih tertata</strong>
                        <small>Dalam satu sistem</small>
                    </span>

                </div>


                {{-- FLOATING CARD BAWAH --}}
                <div class="floating-note floating-note--bottom">

                    <span class="note-dot"></span>

                    <span>
                        <strong>Satu gudang</strong>
                        <small>Satu data persediaan</small>
                    </span>

                </div>

            </div>

        </div>


        {{-- FOOTER PANEL KIRI --}}
        <footer class="brand-footer">

            <span class="footer-decoration"></span>

            <p>
                Pengelolaan barang yang lebih tertib dimulai dari data yang tepat.
            </p>

        </footer>

    </section>


    {{-- =========================================
         PANEL KANAN - FORM LOGIN
    ========================================== --}}
    <section class="form-panel form-panel--enhanced">


        {{-- TOPBAR --}}
        <header class="form-topbar">

            <div class="topbar-label">

                <svg viewBox="0 0 24 24" fill="none"
                     aria-hidden="true">

                    <path d="M8 7V5M16 7V5M4 10H20"
                          stroke="currentColor"
                          stroke-width="1.7"
                          stroke-linecap="round"/>

                    <rect x="4" y="7" width="16" height="13"
                          rx="3"
                          stroke="currentColor"
                          stroke-width="1.7"/>

                </svg>

                <span>AREA PENGGUNA</span>

            </div>


            <div class="topbar-meta">

                {{-- TANGGAL --}}
                <div class="meta-pill">

                    <svg viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">

                        <rect x="4" y="7" width="16" height="13"
                              rx="3"
                              stroke="currentColor"
                              stroke-width="1.7"/>

                        <path d="M8 7V5M16 7V5"
                              stroke="currentColor"
                              stroke-width="1.7"
                              stroke-linecap="round"/>

                    </svg>

                    <span id="current-date-label">
                        Memuat tanggal...
                    </span>

                </div>


                {{-- JAM --}}
                <div class="meta-pill">

                    <svg viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">

                        <circle cx="12" cy="12" r="8"
                                stroke="currentColor"
                                stroke-width="1.7"/>

                        <path d="M12 8V12L15 14"
                              stroke="currentColor"
                              stroke-width="1.7"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>

                    </svg>

                    <span id="current-time-label">
                        --:-- WIB
                    </span>

                </div>

            </div>

        </header>


        {{-- KONTEN LOGIN --}}
        <div class="login-content login-content--rich">


            {{-- PESAN SUKSES REGISTRASI --}}
            @if (session('status'))

                <div role="status"
                     style="
                        position: relative;
                        z-index: 2;
                        margin-bottom: 18px;
                        padding: 12px 14px;
                        border: 1px solid #CFE0CA;
                        border-radius: 12px;
                        background: #EDF5E9;
                        color: #355A3D;
                        font-size: 12px;
                        line-height: 1.6;
                     ">

                    {{ session('status') }}

                </div>

            @endif


            {{-- PESAN LOGIN GAGAL --}}
            @if ($errors->has('auth'))

                <div role="alert"
                     style="
                        position: relative;
                        z-index: 2;
                        margin-bottom: 18px;
                        padding: 12px 14px;
                        border: 1px solid #E7C6BD;
                        border-radius: 12px;
                        background: #FBEDE9;
                        color: #9C493B;
                        font-size: 12px;
                        line-height: 1.6;
                     ">

                    {{ $errors->first('auth') }}

                </div>

            @endif


            {{-- JUDUL DAN ORNAMEN LOGIN --}}
            <div class="form-intro form-intro--rich">


                {{-- ORNAMEN DAUN PANEL KANAN --}}
                <div class="leaf-ornament" aria-hidden="true">

                    <span class="leaf leaf-one"></span>
                    <span class="leaf leaf-two"></span>

                </div>


                <div class="intro-kicker-row">

                    <div class="welcome-icon">

                        <svg viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">

                            <path d="M7 12L10 15L17 8"
                                  stroke="currentColor"
                                  stroke-width="1.8"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>

                        </svg>

                    </div>

                    <div class="intro-line"></div>

                    <p class="form-kicker">
                        SELAMAT DATANG DI SIPINTAR
                    </p>

                </div>


                <h2>
                    Silakan login terlebih dahulu.
                </h2>

                <p class="form-description">
                    Gunakan email dan kata sandi akun Anda untuk mengakses
                    layanan SIPINTAR.
                </p>

            </div>


            {{-- =================================
                 FORM AUTENTIKASI LOGIN
            ================================== --}}
            <form
                class="login-form"
                method="POST"
                action="{{ url('/login') }}"
            >

                @csrf


                {{-- EMAIL --}}
                <div class="field-group">

                    <label for="email">
                        Alamat email
                    </label>

                    <div class="input-wrap">

                        <svg viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">

                            <rect x="3" y="5" width="18" height="14"
                                  rx="3"
                                  stroke="currentColor"
                                  stroke-width="1.6"/>

                            <path d="M4 7L12 13L20 7"
                                  stroke="currentColor"
                                  stroke-width="1.6"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>

                        </svg>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan alamat email"
                            autocomplete="username"
                            maxlength="255"
                            required
                            autofocus
                        >

                    </div>

                    @error('email')
                        <span style="color:#B45345; font-size:11px;">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                {{-- PASSWORD --}}
                <div class="field-group">

                    <label for="password">
                        Kata sandi
                    </label>

                    <div class="input-wrap input-wrap--password">

                        <svg viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">

                            <rect x="4" y="10" width="16" height="11"
                                  rx="3"
                                  stroke="currentColor"
                                  stroke-width="1.6"/>

                            <path d="M8 10V7C8 4.8 9.8 3 12 3C14.2 3 16 4.8 16 7V10"
                                  stroke="currentColor"
                                  stroke-width="1.6"
                                  stroke-linecap="round"/>

                        </svg>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan kata sandi"
                            autocomplete="current-password"
                            required
                        >


                        {{-- TOMBOL LIHAT PASSWORD --}}
                        <button
                            type="button"
                            class="password-toggle"
                            id="password-toggle"
                            aria-label="Tampilkan kata sandi"
                            title="Tampilkan kata sandi"
                        >

                            <svg viewBox="0 0 24 24" fill="none"
                                 aria-hidden="true">

                                <path d="M2 12C4.8 7.8 8 6 12 6C16 6 19.2 7.8 22 12C19.2 16.2 16 18 12 18C8 18 4.8 16.2 2 12Z"
                                      stroke="currentColor"
                                      stroke-width="1.7"
                                      stroke-linejoin="round"/>

                                <circle cx="12" cy="12" r="2.6"
                                        stroke="currentColor"
                                        stroke-width="1.7"/>

                            </svg>

                        </button>

                    </div>

                    @error('password')
                        <span style="color:#B45345; font-size:11px;">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                {{-- OPSI LOGIN --}}
                <div class="form-options">

                    <label class="remember-label">

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                            @checked(old('remember'))
                        >

                        <span>Ingat saya</span>

                    </label>


                    <span class="secure-caption">

                        <svg viewBox="0 0 24 24" fill="none"
                             aria-hidden="true">

                            <path d="M12 3L20 6V11C20 16 16.5 19.5 12 21C7.5 19.5 4 16 4 11V6L12 3Z"
                                  stroke="currentColor"
                                  stroke-width="1.6"
                                  stroke-linejoin="round"/>

                            <path d="M9 12L11 14L15 10"
                                  stroke="currentColor"
                                  stroke-width="1.6"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"/>

                        </svg>

                        <span>Akses aman &amp; terlindungi</span>

                    </span>

                </div>


                {{-- TOMBOL LOGIN --}}
                <button
                    type="submit"
                    class="login-button login-button--gradient"
                >

                    <span>Masuk ke SIPINTAR</span>

                    <svg viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">

                        <path d="M5 12H19M13 6L19 12L13 18"
                              stroke="currentColor"
                              stroke-width="1.8"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>

                    </svg>

                </button>

            </form>


            {{-- LINK REGISTRASI --}}
            <div class="register-prompt">

                <span>Belum punya akun?</span>

                <a
                    href="{{ route('register') }}"
                    class="register-link"
                >

                    Daftar sebagai Peminta Barang

                    <svg viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">

                        <path d="M5 12H19M13 6L19 12L13 18"
                              stroke="currentColor"
                              stroke-width="1.8"
                              stroke-linecap="round"
                              stroke-linejoin="round"/>

                    </svg>

                </a>

            </div>

        </div>


        {{-- FOOTER PANEL KANAN --}}
        <footer class="form-footer form-footer--brand">

            <span class="footer-brand">
                SIPINTAR
            </span>

            <span>
                Pengelolaan Persediaan Instansi
            </span>

        </footer>

    </section>

</main>


{{-- =========================================
     JAVASCRIPT
========================================== --}}
<script>
(function () {

    const dateLabel = document.getElementById('current-date-label');
    const timeLabel = document.getElementById('current-time-label');

    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');


    // TANGGAL DAN JAM WIB
    function updateDateTime() {

        const now = new Date();

        const dateFormatter = new Intl.DateTimeFormat('id-ID', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric',
            timeZone: 'Asia/Jakarta'
        });

        const timeFormatter = new Intl.DateTimeFormat('id-ID', {
            hour: '2-digit',
            minute: '2-digit',
            timeZone: 'Asia/Jakarta',
            hour12: false
        });


        if (dateLabel) {

            const rawDate = dateFormatter.format(now);

            dateLabel.textContent =
                rawDate.charAt(0).toUpperCase() + rawDate.slice(1);

        }


        if (timeLabel) {

            timeLabel.textContent =
                timeFormatter.format(now) + ' WIB';

        }

    }


    // LIHAT / SEMBUNYIKAN PASSWORD
    if (passwordToggle && passwordInput) {

        passwordToggle.addEventListener('click', function () {

            const isPassword =
                passwordInput.getAttribute('type') === 'password';

            passwordInput.setAttribute(
                'type',
                isPassword ? 'text' : 'password'
            );

            const label = isPassword
                ? 'Sembunyikan kata sandi'
                : 'Tampilkan kata sandi';

            passwordToggle.setAttribute('aria-label', label);
            passwordToggle.setAttribute('title', label);

        });

    }


    // JALANKAN JAM
    updateDateTime();

    setInterval(updateDateTime, 1000);

})();
</script>

</body>
</html>
