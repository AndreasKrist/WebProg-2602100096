@extends('layout.body')
@section('title', 'Our Writers')

@section('konten')
    <h1 style="margin-top: 120px; margin-bottom: 10px; margin-left: 40px;">Our Writers:</h2>
    <div style="display: flex; justify-content: center; gap: 60px; margin-top: 60px;">
        @foreach ($writers as $w)
            <div style="width: 200px; text-align: center;">
                <div style="width: 180px; height: 180px; margin: 0 auto; background-color: #001f43; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <a href="{{ route('writer.detail', ['writerId' => $w->id]) }}">
                        <img src="https://via.placeholder.com/100" style="border-radius: 50%;">
                    </a>
                </div>
                <h3 style="margin: 10px 0 5px; font-size: 18px; color: #333;">{{ $w->namaPenulis }}</h3>
            </div>
        @endforeach
    </div>
@endsection