@extends('layouts.app')
@section('title', 'Biodata Karyawan')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <style>
        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 5px 15px 5px 15px;
            border-radius: 4px;
            border-color: red;
            font-size: 12px;
            font-weight: bold;
            min-width: 100%;
            margin-top: 5px;
        }

        input[type="text"] {
            border-color: red;
            border-radius: 4px;
            padding: 5px;
        }

        .judul {
            font-size: 14px;
            font-weight: bold;
        }
    </style>

    <h2>Tambahkan biodata anda</h2>

    <table>
        <form method="post" autocomplete="off">
            @csrf
            <tr>
                <td class="judul">Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size=20 /></td>
            </tr>
            <tr>
                <td class="judul">Email</td>
                <td>:</td>
                <td><input type="text" name="email" size=20 /></td>
            </tr>
            <tr>
                <td class="judul">No. HP</td>
                <td>:</td>
                <td><input type="text" name="no_hp" size=20 /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </form>
    </table>
@endsection
