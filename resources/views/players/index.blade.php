@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Pemain</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
            <tr>
                <td>{{ $player->id }}</td>
                <td>{{ $player->nama_pemain }}</td>
                <td>{{ $player->no_punggung }}</td>
                <td>{{ $player->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
