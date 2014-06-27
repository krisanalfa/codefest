@section('content')
    @section('headline')
        <div class="headline">
            <h1 class="logo">
            <div class="logo"></div>
                <!-- Use Blade ternary -->
                <a href="{{ $url or URL::site('about') }}">CodeFest</a> <small>When templating is getting fun</small>
            </h1>
        </div>
    @show

    @section('article')
        <div class="row">
            <div class="col-xs-4">
                <div class="tile">
                    <img src="{{ Theme::base('images/icons/svg/clocks.svg') }}" alt="Compas" class="tile-image big-illustration">
                    <h3 class="tile-title">Time is running out</h3>
                    <p>
                        Waktu lu terlalu sedikit buat ngurusin template sebanyak itu.
                        Struktur template aja gak kelar-kelar, gimana mau fokus ke UX?
                    </p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="tile">
                    <img src="{{ Theme::base('images/icons/svg/loop.svg') }}" alt="Infinity-Loop" class="tile-image">
                    <h3 class="tile-title">Easy to Maintain</h3>
                    <p>
                        Once template kita berubah, harusnya gak akan keluar banyak effort untuk dilakukan maintain.
                        Template harus reuseable.
                    </p>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="tile">
                    <img src="{{ Theme::base('images/icons/svg/clipboard.svg') }}" alt="Pensils" class="tile-image">
                    <h3 class="tile-title">Readable</h3>
                    <p>
                        Pernah liat template sampe ribuan baris?
                        Ada yang salah dari template itu.
                        Template harusnya mudah dibaca dan tidak mengandung logic aplikasi.
                    </p>
                </div>
            </div>
        </div>
    @show

    @section('footer')
        <div class="row">
            <h1 class="text-center">Blade Template Engine <small>is your partner</small></h1>
        </div>
    @show
@endsection
