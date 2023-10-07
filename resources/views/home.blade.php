@extends('layout.main')
@section('container')
<div class="atas"></div>
<div class="">
    <div class="jumbotron" id="trans">
        <div class="row">
            <div class="col">
                <h2 class="jum">{{ $welcomehome }}</h2>
                <h2 class="jumsmall">{{ $welcomehome }}</h2>
                <p>{{ $deswelcome }}</p>
            </div>
        </div>
    </div>

    <div class="profperusahaan">
    
        <div class="row">
            <div class="col" id="hilang">
                {{-- <img src="img/.jpg" alt="" width="100%" class="profimg"> --}}
            </div>
            <div class="col">
                <p>{{ $profperusahaan }}</p>
                <div class="detail-profil">
                    <a href="/Profil-Perusahaan">Selengkapnya...</a>
                </div>
            </div>
            
        </div>
    </div>
  {{-- card --}}
  <div style="margin-top: 20px"></div>

    <div class="two" >
        <div class="row" id="small">
            @foreach ($welcome as $t)
                <div class="col" id="col-small">
                    <div class="card-image">
                        <img src="img/image.png" alt="" >
                    </div>
                    <div class="cardtitle">
                        <h5>{{ $t["name"] }}</h5>
                    </div>
                    <div class="card-text">
                        <p>{{ $t["deskripsi"] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div class="three">
        <div class="jud">
            <h3>Paket Internet</h3>
        </div>
    <div class="row">
            <div class="col" id="hilang"></div>
            @foreach ($produk as $p)
                
            
            <div class="col" id="content">
                <img src="img/{{ $p['gambar'] }}" alt="" width="100%">
                <h5>{{ $p['kecepatan'] }}</h5>
                <p>Full Fiber optic<br>sampai ke rumah</p>
                <p>Up To {{ $p['kecepatan'] }}</p> 
                <p class="hide">Download/Upload</p> 
                <p class="hide">Kuota Unlimited</p> 
                <div class="pesan">
                    <p>Pesan Sekarang</p>
                </div>
            </div>
            @endforeach
            <div class="col" id="hilang"></div>
        <div class="selengkapnya">
            <a href="/hargapaket">Selengkapnya...</a>
        </div>
        </div>
    
    </div>

    {{-- Keunggulan --}}
    <div class="keunggulan">
        <h3>Keunggulan</h3>
        <div class="row">
            @foreach ($keunggulan as $k)
                <div class="col">
                    <div class="icon">
                        <i class= "{{ $k['icon'] }}"></i>
                    </div>
                    <h5>{{ $k['name'] }}</h5>
                        <p class="hide">{{ $k['body'] }}</p>
                 </div>
            @endforeach
        
    </div>

 <div class="row">
        @foreach ($produkicon as $pro)
            

        <div class="col">
            <div class="col" id="content">
                <img src="img/service/{{ $pro['gambar'] }}" alt="" width="100%">
            </div>
                <h5>{{ $pro['name'] }}</h5>
                <p class="hide">{{ $pro['body'] }}</p>
                <div class="selanjutnya">
                    <a href="/toserviceiconect" class="selanjutnya">Selanjutnya</a>
                </div>
        </div>
        @endforeach
 </div>
</div>
    @endsection