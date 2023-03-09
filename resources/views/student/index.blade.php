@extends('layout/cstudent')

@section('konten')
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->NIM }}</td>
                    <td>{{ $item->NAMA }}</td>
                    <td>{{ $item->ALAMAT }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection