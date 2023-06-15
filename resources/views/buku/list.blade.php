<style>
    * {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    h2 {
        font-size: 1.5rem;
        font-weight: 800;
        color: sienna;
    }

    p {
        font-weight: 600;
        text-decoration: underline;
        color: blue;
    }

    .item {
        transition: .3s;
        font-weight: bold;
    }

    .container:hover> :not(:hover) {
        opacity: .4;
    }

    ul {
        list-style: none;
        width: 10%;
    }

    li {
        cursor: default;
        padding: 20px;
        background-color: sienna;
        color: white;
        box-shadow: 10px 10px 33px -3px rgba(0, 0, 0, 0.48);
        -webkit-box-shadow: 10px 10px 33px -3px rgba(0, 0, 0, 0.48);
        -moz-box-shadow: 10px 10px 33px -3px rgba(0, 0, 0, 0.48);
        margin-bottom: 10px;
        border-radius: 12px;
    }
</style>
<h2>Daftar Buku</h2>
<h3>{{ $sub_judul }}</h3>

<p>Perintah Kondisional</p>
@if ($poin > 80 && $poin <= 100)
    Poin {{ $poin }} = Rating A <br />
@elseif($poin > 60 && $poin <= 80)
    Poin {{ $poin }} = Rating B <br />
@elseif($poin > 40 && $poin <= 60)
    Poin {{ $poin }} = Rating C <br />
@elseif($poin > 20 && $poin <= 40)
    Poin {{ $poin }} = Rating D <br />
@elseif($poin >= 0 && $poin <= 20)
    Poin {{ $poin }} = Rating E <br />
@else
    Salah Nilai <br />
@endif

<p>Perintah Switch</p>
@switch($flag)
    @case(1)
        Flag {{ $flag }} => Jenis Pemrograman <br />
    @break

    @case(2)
        Flag {{ $flag }} => Jenis Struktur Data <br />
    @break

    @case(3)
        Flag {{ $flag }} => Jenis Basis Data <br />
    @break

    @default
        Flag {{ $flag }} => Bukan Buku Komputer <br />
@endswitch

<p>Perintah Perulangan</p>
<ul class="container">
    @foreach ($buku as $b)
        <li class="item"> {{ $b }} </li>
    @endforeach
</ul>
