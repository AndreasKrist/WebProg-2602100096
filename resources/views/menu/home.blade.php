@extends('layout.body')
@section('title', 'Home')

@section('konten')
    <div class="row no-gutters">
        <div class="col-12">
            <img src="{{ asset('images/banner.jpg') }}" alt="Home" class="img-fluid" style="width: 100%; height: 500px; ">
            
            <div style="display: flex; flex-direction: column; gap: 20px; max-width: 800px; margin: 60px auto 60px auto;">
                @foreach ($details as $detail)
                    <div style="display: flex; background-color: #fff; border-radius: 10px; overflow: hidden;">
                        <div style="flex: 1; background-color: #004aad; display: flex; align-items: center; justify-content: center;">
                            <img src="{{ asset('images/materi.png') }}" alt="Materi" style="width: 100%; height: 100%;">
                        </div>
                        <div style="flex: 2; padding: 15px; display: flex; flex-direction: column;">
                            <h2 style="margin: 0; font-size: 18px; color: #333;">{{ $detail->materi }}</h2>
                            <p style="font-size: 12px; color: #666; margin: 5px 0;">{{ $detail->tanggalPost }} | By {{ $detail->writers->namaPenulis }}</p>
                            <p style="font-size: 14px; color: #444; margin: 10px 0; flex: 1;">{{ $detail->deskripsi }}</p>
                            <a href="{{ route('materi.detail', ['categoryId' => $detail->categories->id, 'detailId' => $detail->id]) }}" style="align-self: flex-end; padding: 8px 50px; background-color: #000; color: #fff; text-decoration: none; border-radius: 50px; font-size: 12px;">read more...</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection