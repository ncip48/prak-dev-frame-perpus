@extends('layouts.app')
@section('title', 'Daftar Rak Buku')
@section('content')
<script>
    $(function() {
        $('#datepicker').datepicker();
        $("#spinner").spinner();
        $("#tabs").tabs();
        $(document).tooltip();
    })
</script>
<h2>{{ $store }} Data Rak Buku</h2>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<form method="POST" action="{{$action}}">
    @csrf
    @if (strtolower($store) == 'ubah')
    @method('PUT')
    @endif
    <input type="hidden" name="id" value="{{ $rak->id }}" id="id" />
    <div class="form-group">
        <input type="text" class="mail_text" name="nama" placeholder="NamaRak" value="{{ $rak->nama }}" title="Masukkan Nama Rak" id="nama" />
        @error('nama')
        <b>{{$message}}</b>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" class="mail_text" name="lokasi" placeholder="Lokasi" value="{{ $rak->lokasi }}" title="Masukkan Lokasi" id="lokasi" />
        @error('lokasi')
        <b>{{$message}}</b>
        @enderror
    </div>
    <input type="text" class="mail_text" name="keterangan" placeholder="keterangan" value="{{ $rak->keterangan }}" title="Masukkan Keterangan" id="keterangan" />
    <input type="text" id="datepicker" name="tanggal" class="mail_text" placeholder="Tanggal" title="Masukkan Tanggal" />
    <input type="number" class="mail_text" name="jumlah" placeholder="0" id="spinner" />

    <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>

    <div id="slider-range"></div>

    <div id="slider" style="width:260px; margin:15px;"></div>
    <br />
    Value <div id="val-slider"></div>
    <div id="progressbar"></div>
    <!-- <input type="submit" value="{{ $store }}" /> -->
</form>
<button class="save_bt" id="btn_save">
    Simpan
</button>
<div class="send_bt">
    <a href="{{ url('/rak_buku') }}">Kembali</a>
</div>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Nunc tincidunt</a></li>
        <li><a href="#tabs-2">Proin dolor</a></li>
        <li><a href="#tabs-3">Aenean lacinia</a></li>
    </ul>
    <div id="tabs-1">
        <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
    </div>
    <div id="tabs-2">
        <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
    </div>
    <div id="tabs-3">
        <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
        <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
    </div>
</div>


<script>
    $(function() {
        $("#progressbar").progressbar();
        $("#slider").slider({
            animate: "fast",
            max: 100,
            slide: function(event, ui) {
                // Update the progressbar value with the slider's value
                $('#val-slider').text(ui.value)
                $("#progressbar").progressbar("option", "value", ui.value);
                $("#progressbar").progressbar("option", "max", 100);
            }
        });
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));

        $("#btn_save").click(function(e) {
            console.log('ok')
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var formData = {
                nama: $('#nama').val(),
                lokasi: $('#lokasi').val(),
                keterangan: $('#keterangan').val()
            };
            var state = $('#btn-save').val();
            var type = "POST";
            var id = $('#id').val();
            var ajaxurl = '{{ $action }}';
            $.ajax({
                type: type,
                url: ajaxurl,
                data: formData,
                dataType: 'json',
                success: function(data) {
                    var todo = 'Pengiriman Data berhasil'
                    console.log(todo)
                    alert(todo)
                    window.location.href = "{{url('rak_buku')}}"
                },
                error: function(data) {
                    console.log(data);
                    alert(data.responseJSON.message)
                }
            });
        });
    });
</script>
@endsection